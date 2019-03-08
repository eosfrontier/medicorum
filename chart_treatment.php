<table class="subdata editable">
	<tr>
		<td width="380px" class="overview">
			<p>	<span class="overview_1stcol">Volgnummer</span><span class="overview_2ndcol datafield subfieldID grey" id="field_treatment-chart"></span><br>
				<span class="overview_1stcol">datum opname</span><span class="overview_2ndcol subdatafield editable" id="subfield_treatment-chart_startdate"></span><br>
				<span class="overview_1stcol">tijd opname</span><span class="overview_2ndcol subdatafield editable" id="subfield_treatment-chart_starttime"></span><br>
				<span class="overview_1stcol">datum ontslag</span><span class="overview_2ndcol subdatafield editable" id="subfield_treatment-chart_enddate"></span><br>
				<span class="overview_1stcol">tijd ontslag</span><span class="overview_2ndcol subdatafield editable" id="subfield_treatment-chart_endtime"></span><br>
			</p>
		</td>
		<td width="400px" class="overview">
			<p>	<span class="overview_1stcol">Verantwoordelijk arts</span><span class="overview_2ndcol subdatafield editable" id="subfield_treatment-chart_doctor-responsible"></span><br>
				<span class="overview_1stcol">Behandelend arts</span><span class="overview_2ndcol subdatafield editable" id="subfield_treatment-chart_doctor-acting"></span><br>
				<span class="overview_1stcol">Assistentie door</span><span class="overview_2ndcol subdatafield editable" id="subfield_treatment-chart_doctor-assisting"></span><br>
				<span class="overview_1stcol">Nazorg inplannen?</span><span class="overview_2ndcol subdatafield editable" id="subfield_treatment-chart_aftercare-plan"></span><br>
			</p>
		</td>
	</tr>
</table>
<hr>
<h3>Reden van opname</h3>
<table>
	<tr class="chart_treatment">
		<td width="180px" class="overview">
			<input type="checkbox" disabled class="subdatafield editable" id="subfield_treatment-chart_wound" name="wound"><label for="wound">Verwonding</label>
		</td>
		<td width="200px" class="overview">
			<input type="checkbox" disabled class="subdatafield editable" id="subfield_treatment-chart_wound-shot" name="wound-shot"><label for="wound-shot">Schotwond</label><br>
			<input type="checkbox" disabled class="subdatafield editable" id="subfield_treatment-chart_wound-burn" name="wound-burn"><label for="wound-burn">Brandwond</label><br>
			<input type="checkbox" disabled class="subdatafield editable" id="subfield_treatment-chart_wound-fracture" name="wound-fracture"><label for="wound-fracture">Breuk</label>
		</td>
		<td width="200" class="overview">
			<input type="checkbox" disabled class="subdatafield editable" id="subfield_treatment-chart_wound-cut" name="wound-cut"><label for="wound-cut">Snijwond</label><br>
			<input type="checkbox" disabled class="subdatafield editable" id="subfield_treatment-chart_wound-abrasion" name="wound-abrasion"><label for="wound-abrasion">Schaafwond</label><br>
			<input type="checkbox" disabled class="subdatafield editable" id="subfield_treatment-chart_wound-infection" name="wound-infection"><label for="wound-infection">Infectie</label>
		</td>
		<td width="200" class="overview">
			<input type="checkbox" disabled class="subdatafield editable" id="subfield_treatment-chart_wound-blunt" name="wound-blunt"><label for="wound-blunt">Slagwond (stomp)</label><br>
			<input type="checkbox" disabled class="subdatafield editable" id="subfield_treatment-chart_wound-sprain" name="wound-sprain"><label for="wound-sprain">Verstuiking/verrekking</label>
		</td>
	</tr>
	<tr class="chart_treatment"><td colspan = "4">&nbsp;</td></tr>
	<tr class="chart_treatment">
		<td colspan = "2" class="overview">
			<input type="checkbox" disabled class="subdatafield editable" id="subfield_treatment-chart_psych" name="psych"><label for="psych">Psychologische klachten</label>
		</td>
		<td width="200px" class="overview">
			<input type="checkbox" disabled class="subdatafield editable" id="subfield_treatment-chart_psych-acute" name="psych-acute"><label for="psych-acute">Acuut</label><br>
		</td>
		<td width="200" class="overview">
			<input type="checkbox" disabled class="subdatafield editable" id="subfield_treatment-chart_psych-long" name="psych-long"><label for="psych-long">Langdurig</label><br>
		</td>
	</tr>
	<tr class="chart_treatment"><td colspan = "4">&nbsp;</td></tr>
	<tr class="chart_treatment">
		<td colspan = "2" class="overview">
			<input type="checkbox" disabled class="subdatafield editable" id="subfield_treatment-chart_poison" name="poison"><label for="poison">Vergiftiging door (indien bekend)</label>
		</td>
		<td colspan = "2" class="overview">
			<span class="subdatafield editable" id="subfield_treatment-chart_poison-note"></span>
		</td>
	</tr>
	<tr class="chart_treatment"><td colspan = "4">&nbsp;</td></tr>

	<tr class="chart_treatment">
		<td colspan = "2" class="overview">
			<input type="checkbox" disabled class="subdatafield editable" id="subfield_treatment-chart_other" name="other"><label for="other">Anders</label>
		</td>
		<td colspan = "2" class="overview">
			<span class="subdatafield editable" id="subfield_treatment-chart_aftercare-other-note"></span>
		</td>
	</tr>
</table>
<hr>
<h3>Behandeling</h3>
<table>
	<tr class="chart_treatment">
		<td width="380px" class="overview">Omschrijving behandelde locatie<br><span class="subdatafield editable" id="subfield_treatment-chart_treated-location"></span></td>
		<td width="400px" class="overview">Aantal gebruikte bloedzakken<br><span class="subdatafield editable" id="subfield_treatment-chart_used-bloodbags"></span></td>
	</tr>
	<tr class="chart_treatment"><td colspan = "2">&nbsp;</td></tr>
	<tr class="chart_treatment">
		<td width="380px" class="overview">Gebruikte medicatie tijdens de behandeling<br><span class="subdatafield editable" id="subfield_treatment-chart_used-medication"></span></td>
		<td width="400px" class="overview">Voorgeschreven medicatie<br><span class="subdatafield editable" id="subfield_treatment-chart_prescribed-medication"></span></td>
	</tr>
	<tr class="chart_treatment"><td colspan = "2"><hr></td></tr>
	<tr class="chart_treatment">
		<td width="380px" class="overview"><h3>Uitgevoerde behandeling</h3>
			<p><input type="checkbox" disabled class="subdatafield editable" id="subfield_treatment-chart_care-reanimation" name="care-reanimation"><label for="care-reanimation">Reanimatie</label><br>				<span class="subdatafield editable" id="subfield_treatment-chart_care-reanimation-note"></span></p>
			<p><input type="checkbox" disabled class="subdatafield editable" id="subfield_treatment-chart_care-transfusion" name="care-transfusion"><label for="care-transfusion">Bloedtransfusie</label><br>				<span class="subdatafield editable" id="subfield_treatment-chart_care-transfusion-note"></span></p>
			<p><input type="checkbox" disabled class="subdatafield editable" id="subfield_treatment-chart_care-scan" name="care-scan"><label for="care-scan">Scan<br>				<span class="subdatafield editable" id="subfield_treatment-chart_care-scan-note"></span></p>
			<p><input type="checkbox" disabled class="subdatafield editable" id="subfield_treatment-chart_care-transplant" name="care-transplant"><label for="care-transplant">Transplantatie</label><br>				<span class="subdatafield editable" id="subfield_treatment-chart_care-transplant-note"></span></p>							<p><input type="checkbox" disabled class="subdatafield editable" id="subfield_treatment-chart_care-amputate" name="care-amputate"><label for="care-amputate">Amputatie</label><br>				<span class="subdatafield editable" id="subfield_treatment-chart_care-amputate-note"></span></p>
			<p><input type="checkbox" disabled class="subdatafield editable" id="subfield_treatment-chart_care-regeneration" name="care-regeneration"><label for="care-regeneration">Regeneratie</label><br>				<span class="subdatafield editable" id="subfield_treatment-chart_care-regeneration-note"></span></p>
			<p><input type="checkbox" disabled class="subdatafield editable" id="subfield_treatment-chart_care-psychic" name="care-psychic"><label for="care-psychic">Psychische zorg</label><br>				<span class="subdatafield editable" id="subfield_treatment-chart_care-psychic-note"></span></p>
			<p><input type="checkbox" disabled class="subdatafield editable" id="subfield_treatment-chart_care-dental" name="care-dental"><label for="care-dental">Tandheelkundige zorg</label><br>				<span class="subdatafield editable" id="subfield_treatment-chart_care-dental-note"></span></p>
			<p><input type="checkbox" disabled class="subdatafield editable" id="subfield_treatment-chart_care-wound" name="care-wound"><label for="care-wound">Wondzorg</label><br>				<span class="subdatafield editable" id="subfield_treatment-chart_care-wound-note"></span></p>			<p><input type="checkbox" disabled class="subdatafield editable" id="subfield_treatment-chart_care-aid" name="care-aid"><label for="care-aid">Hulpmiddel toegepast (mitella, nek-brace, ed)</label><br>				<span class="subdatafield editable" id="subfield_treatment-chart_care-aid-note"></span></p>
			<p><input type="checkbox" disabled class="subdatafield editable" id="subfield_treatment-chart_care-other" name="care-other"><label for="care-other">Anders</label><br>				<span class="subdatafield editable" id="subfield_treatment-chart_care-other-note"></span></p>
		</td>
		<td width="400px" class="overview"><h3>Uitgevoerde operatie</h3>
			<p><input type="checkbox" disabled class="subdatafield editable" id="subfield_treatment-chart_oper-removal" name="oper-removal"><label for="oper-removal">Verwijderen lichaamsvreemd materiaal</label><br>				<span class="subdatafield editable" id="subfield_treatment-chart_oper-removal-note"></span></p>
			<p><input type="checkbox" disabled class="subdatafield editable" id="subfield_treatment-chart_oper-transplant" name="oper-transplant"><label for="oper-transplant">Transplantatie</label><br>				<span class="subdatafield editable" id="subfield_treatment-chart_oper-transplant-note"></span></p>							<p><input type="checkbox" disabled class="subdatafield editable" id="subfield_treatment-chart_oper-amputate" name="oper-amputate"><label for="oper-amputate">Amputatie</label><br>				<span class="subdatafield editable" id="subfield_treatment-chart_oper-amputate-note"></span></p>
			<p><input type="checkbox" disabled class="subdatafield editable" id="subfield_treatment-chart_oper-fracture" name="oper-fracture"><label for="oper-fracture">Herstel breuk</label><br>				<span class="subdatafield editable" id="subfield_treatment-chart_oper-fracture-note"></span></p>
			<p><input type="checkbox" disabled class="subdatafield editable" id="subfield_treatment-chart_oper-prosthetic" name="oper-prosthetic"><label for="soper-prosthetic">Prothese plaatsen/vervangen/onderhoud</label><br>				<span class="subdatafield editable" id="subfield_treatment-chart_oper-prosthetic-note"></span></p>
			<p><input type="checkbox" disabled class="subdatafield editable" id="subfield_treatment-chart_oper-dental" name="oper-dental"><label for="oper-dental">Tandheelkundig/endodontologisch</label><br>				<span class="subdatafield editable" id="subfield_treatment-chart_oper-dental-note"></span></p>
			<p><input type="checkbox" disabled class="subdatafield editable" id="subfield_treatment-chart_oper-other" name="oper-other"><label for="oper-other">Anders</label><br>				<span class="subdatafield editable" id="subfield_treatment-chart_oper-other-note"></span></p>						<p><input type="checkbox" disabled class="subdatafield editable" id="subfield_treatment-chart_oper-suture" name="oper-suture"><label for="oper-suture">Hechten</label><br>				<span class="subdatafield editable" id="subfield_treatment-chart_oper-suture-note"></span></p>
		</td>
	</tr>
</table>
<hr>
<h3>Bijwerkingen</h3>
<table>
	<tr class="chart_treatment">
		<td width="280px" class="overview">
			<input type="checkbox" disabled class="subdatafield editable" id="subfield_treatment-chart_side-hypertension" name="side-hypertension"><label for="side-hypertension">Bloeddruk verhoogd</label><br>
			<input type="checkbox" disabled class="subdatafield editable" id="subfield_treatment-chart_side-drymouth" name="side-drymouth"><label for="side-drymouth">Droge mond</label><br>
			<input type="checkbox" disabled class="subdatafield editable" id="subfield_treatment-chart_side-arrythmia" name="side-arrythmia"><label for="side-arrythmia">Hartritmestoornissen</label><br>
			<input type="checkbox" disabled class="subdatafield editable" id="subfield_treatment-chart_side-throatache" name="side-throatache"><label for="side-throatache">Keelpijn</label><br>
			<input type="checkbox" disabled class="subdatafield editable" id="subfield_treatment-chart_side-gastro" name="side-gastro"><label for="side-gastro">Maag en darmklachten</label><br>
			<input type="checkbox" disabled class="subdatafield editable" id="subfield_treatment-chart_side-inflammation" name="side-inflammation"><label for="side-inflammation">Ontsteking</label><br>
			<input type="checkbox" disabled class="subdatafield editable" id="subfield_treatment-chart_side-insomnia" name="side-insomnia"><label for="side-insomnia">Slaapproblemen</label><br>
			<input type="checkbox" disabled class="subdatafield editable" id="subfield_treatment-chart_side-appetite-increase" name="side-appetite-increase"><label for="side-appetite-increase">Verhoogde eetlust</label><br>
			<input type="checkbox" disabled class="subdatafield editable" id="subfield_treatment-chart_side-confusion" name="side-confusion"><label for="side-confusion">Verwardheid</label><br>
		</td>
		<td width="280px" class="overview">
			<input type="checkbox" disabled class="subdatafield editable" id="subfield_treatment-chart_side-hypotension" name="side-hypotension"><label for="side-hypotension">Bloeddruk verlaagd</label><br>
			<input type="checkbox" disabled class="subdatafield editable" id="subfield_treatment-chart_side-vertigo" name="side-vertigo"><label for="side-vertigo">Duizeligheid</label><br>
			<input type="checkbox" disabled class="subdatafield editable" id="subfield_treatment-chart_side-headache" name="side-headache"><label for="side-headache">Hoofdpijn</label><br>
			<input type="checkbox" disabled class="subdatafield editable" id="subfield_treatment-chart_side-fever" name="side-fever"><label for="side-fever">Koorts</label><br>
			<input type="checkbox" disabled class="subdatafield editable" id="subfield_treatment-chart_side-nausea" name="side-nausea"><label for="side-nausea">Misselijkheid</label><br>
			<input type="checkbox" disabled class="subdatafield editable" id="subfield_treatment-chart_side-sensitivity-sun" name="side-sensitivity-sun"><label for="side-sensitivity-sun">Overgevoeligheid zonlicht</label><br>
			<input type="checkbox" disabled class="subdatafield editable" id="subfield_treatment-chart_side-myalgia" name="side-myalgia"><label for="side-myalgia">Spierpijn</label><br>
			<input type="checkbox" disabled class="subdatafield editable" id="subfield_treatment-chart_side-appetite-loss" name="side-appetite-loss"><label for="side-appetite-loss">Verminderde eetlust</label><br>
			<input type="checkbox" disabled class="subdatafield editable" id="subfield_treatment-chart_side-transpiration" name="side-transpiration"><label for="side-transpiration">Zweten</label><br>
		</td>
		<td width="280px" class="overview">
			<input type="checkbox" disabled class="subdatafield editable" id="subfield_treatment-chart_side-concentration" name="side-concentration"><label for="side-concentration">Concentratieproblemen</label><br>
			<input type="checkbox" disabled class="subdatafield editable" id="subfield_treatment-chart_side-hairloss" name="side-hairloss"><label for="side-hairloss">Haaruitval</label><br>
			<input type="checkbox" disabled class="subdatafield editable" id="subfield_treatment-chart_side-infection" name="side-infection"><label for="side-infection">Infectie</label><br>
			<input type="checkbox" disabled class="subdatafield editable" id="subfield_treatment-chart_side-breathlessness" name="side-breathlessness"><label for="side-breathlessness">Kortademigheid</label><br>
			<input type="checkbox" disabled class="subdatafield editable" id="subfield_treatment-chart_side-bleeding" name="side-bleeding"><label for="side-bleeding">Nabloedingen</label><br>
			<input type="checkbox" disabled class="subdatafield editable" id="subfield_treatment-chart_side-panic" name="side-panic"><label for="side-panic">Paniekaanvallen</label><br>
			<input type="checkbox" disabled class="subdatafield editable" id="subfield_treatment-chart_side-muscletwitching" name="side-muscletwitching"><label for="side-muscletwitching">Spiertrillen</label><br>
			<input type="checkbox" disabled class="subdatafield editable" id="subfield_treatment-chart_side-fatigue" name="side-fatigue"><label for="side-fatigue">Vermoeidheid</label><br>
			<input type="checkbox" disabled class="subdatafield editable" id="subfield_treatment-chart_side-functionloss" name="side-functionloss"><label for="side-functionloss">Functieverlies</label><br>
		</td>
	</tr>
	<tr class="chart_treatment">
		<td colspan= "3" class="overview">
		<input type="checkbox" disabled class="subdatafield editable" id="subfield_treatment-chart_side-other" name="side-other"><label for="side-other">Anders</label><span class="subdatafield editable" id="subfield_treatment-chart_side-other-note"></span>
		</td>
	</tr>
</table>
<hr>
<h3>Nazorg</h3>
<table>
	<tr class="chart_treatment">
		<td width="380px" class="overview">Doorverwijzing<br><span class="subdatafield editable" id="subfield_treatment-chart_referral"></span></td>
		<td width="400px" class="overview">Controleafspraak<br><span class="subdatafield editable" id="subfield_treatment-chart_aftercare-appointment"></span></td>
	</tr>
	<tr class="chart_treatment">
		<td width="380px"></td>
		<td width="160px" class="overview"><button id="closetreatmentbutton" class="button03">Behandelkaart Afsluiten</input></td>
	</tr>
</table>
