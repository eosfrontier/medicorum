$(load)

var perfectscrollbar

/* Load initial data and att click events */
function load () {
	/* Autocomplete fields */
	$.get('getpatientlist.php', {}, fillpatientlist, 'json');
	/* Button and enter to start search */
	$("#searchpatientbutton").click(searchpatient)
	$('input#searchpatientfield').on('keypress', function(e) { if (e.which==13) { searchpatient(); } })
	/* Button actions: edit and save.  NB: close treatment also does save but with a bit extra */
	$("#edit-button").click(editfields)
	$("#save-button").click(savefields)
	$('#closetreatmentbutton').click(savefields)
	/* Add fancy scrollbar to main content */
	perfectscrollbar = new PerfectScrollbar('#main-content', { })
	/* Make sure the scrollbar sees when we change tabs */
	$("li.tab input").change(function() { setTimeout(function() { perfectscrollbar.update() }, 100) })
}

/* Autocomplete box */
function fillpatientlist(patientlist)
{
	/* close and open functions are for nice fades */
	$('#searchpatientfield').autocomplete({
		source: patientlist,
		close: function(e,ui) {
			$(e.target).autocomplete('widget').removeClass('autocomplete-visible')
		},
		select: function(e,ui) {
			setTimeout(searchpatient,0)
		},
		open: function(e,ui) {
			$(e.target).autocomplete('widget').addClass('autocomplete-visible')
		},
		delay: 50,
		minLength: 2,
		position: {my: "right top", at: "right bottom", collision: "none" }
	})
}

/* Retrieve patient data according to search field */
function searchpatient(){
	$('#searchpatientfield').autocomplete("close")
	$.get("searchpatient.php", {searchpatientfield:$("#searchpatientfield").val()}, showpatient, 'json')
}

/* Show the retrieved data.  First remove any datafields and uncheck checkboxes */
function showpatient(patientdata){
	$(".datafield,.subdatafield").text("")
	$("input[type='checkbox'].datafield,input[type='checkbox'].subdatafield").prop('checked',false).attr('value','')
	/* Edit button visible, save button invisible */
	$("#edit-button").addClass("button01_visible")
	$("#save-button").removeClass("button01_visible")
	showdata(patientdata)
}

/* If you click the edit button */
function editfields(){
	/* all editable fields become input fields */
	$("span.datafield.editable,span.subdatafield.editable").each(function(){
		var value=$(this).text()
		$(this).html('<input type="text" class="input01" value="'+value+'">')
	})
	/* and all checkboxes are enabled */
	$("input.datafield.editable,input.subdatafield.editable").each(function(){
		this.disabled = false
	})
	/* also the save button is made visible */
	$("#save-button").addClass("button01_visible")
}

/* Save all changed fields
 * attribute 'value' is the old value, val() (or checked) is the new value */
function savefields(){
	/* For collecting all changes */
	var collectsavefields = {}
	/* Loop over the input elements */
	$(".datafield.editable input").each(function(){
		var value=$(this).val()
		if (value!=$(this).attr("value")){
			var id=$(this).parent().attr("id").replace(/^field_/,"")
			collectsavefields[id]=value
		}
	})
	/* And also the checkboxes */
	$("input[type='checkbox'].datafield.editable").each(function(){
		var value=this.checked?'1':''
		if (value != $(this).attr('value')) {
			var id=this.id.replace(/^field_/,"")
			collectsavefields[id]=value
		}
	})
	/* Loop over the subfields, per subchart */
	$(".subdata.editable").each(function(){
		/* The name is linked to fieldtypes, the ID is 'volgnummer' */
		var subfieldname = $(this).find(".subfieldID").attr("id").replace(/^field_/,"")
		var subfieldID = $(this).find(".subfieldID").text()
		/* An empty ID means we create a new one, this is done in the backend */
		if (!subfieldID) subfieldID = ''
		/* Get all the subfield data that matches the fieldname */
		$(".subdatafield.editable[id^='subfield_"+subfieldname+"_'] input").each(function(){
			var value=$(this).val()
			if (value!=$(this).attr("value")){
				var id=$(this).parent().attr("id")
				id = id.substr(subfieldname.length+10)
				collectsavefields[subfieldname+'/'+subfieldID+'/'+id]=value
			}
		})
		/* And the checkboxes too */
		$("input[type='checkbox'][id^='subfield_"+subfieldname+"_'].subdatafield.editable").each(function(){
			var value=this.checked?'1':''
			if (value!=$(this).attr("value")){
				id = this.id.substr(subfieldname.length+10)
				collectsavefields[subfieldname+'/'+subfieldID+'/'+id]=value
			}
		})
	})
	/* Character ID is always needed so the backend knows which character is being saved */
	collectsavefields["characterID"]=$("#field_characterID").text()
	if (this.id == 'closetreatmentbutton') {
		/* This function can be called by this button as well, in which case the field needs to be closed */
		collectsavefields['-treatment-chart'] = $('#field_treatment-chart').text()
	}
	$.post("savepatient.php",collectsavefields,saveready)
}

/* The data has been saved.  Update the fields back to text spans and disable the checkboxes */
function saveready(patientdata){
	$("span.datafield.editable,span.subdatafield.editable").each(function() {
		$(this).text($(this).find('input').val())
	})
	$("input.datafield.editable,input.subdatafield.editable").each(function() {
		this.disabled = true
	})
	$("#save-button").removeClass("button01_visible")
	/* The save backend returns all the changed data, show this (this also sets the 'value' attribute so it is no longer 'changed') */
	showdata(patientdata)
}

/* Show all the data in the array, by ID */
function showdata(patientdata) {
	/* First the non-subfields so the subfieldID gets filled */
	for(fieldname in patientdata){
		if (!fieldname.match(/\//)) {
			var field = $(":not(input)#field_"+fieldname)
			if (field.length > 0) {
				field.text(patientdata[fieldname]) 
				/* Special case: if a subfield is empty, clear out all the connected subfield entries */
				if (patientdata[fieldname] == '') {
					$(":not(input).subdatafield[id^='subfield_"+fieldname+"_']").text('')
					$("input.subdatafield[id^='subfield_"+fieldname+"_']").prop('checked',false).attr('value','')
				}
			}
			/* Special: If it's an image, fill the 'src' so it points to the url */
			if (field.is('img')) {
				field.attr('src',patientdata[fieldname])
			}
			/* Also check or uncheck the checkboxes */
			field = $("input#field_"+fieldname)
			if (field.length > 0) {
				if (patientdata[fieldname] && patientdata[fieldname] != 'false') {
					field.prop('checked', true).attr('value', '1')
				} else {
					field.prop('checked', false).attr('value', '')
				}
			}
		}
	}
	/* Then the subfields.  Same procedure, but only if the subfieldID matches the content of the matching datafield */
	for(fieldsubfieldname in patientdata){
		var name_num_name = fieldsubfieldname.split('/')
		if (name_num_name.length > 1) {
			/* The ID consists of fieldname / ID (volgnummer) / subfieldname */
			var fieldname = name_num_name[0]
			var subnumber = name_num_name[1]
			var subfieldname = name_num_name[2]
			/* Only fill data if it's the correct volgnummer */
			if (patientdata[fieldname] == subnumber) {
				$(":not(input)#subfield_"+fieldname+"_"+subfieldname).text(patientdata[fieldsubfieldname])
				if (patientdata[fieldsubfieldname] && patientdata[fieldsubfieldname] != 'false') {
					$("input#subfield_"+fieldname+"_"+subfieldname).prop('checked', true).attr('value','1')
				} else {
					$("input#subfield_"+fieldname+"_"+subfieldname).prop('checked', false).attr('value','')
				}
			}
		}
	}
	for (subset in patientdata['subsets']) {
		$('#subsetlist_'+subset).html(patientdata['subsets'][subset].join(''))
	}
}
