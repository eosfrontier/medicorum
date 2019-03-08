<div class="treatment_chart_history">
<table class="subdata">
	<tr>
		<td width="380px" class="overview">
			<p>	<span class="overview_1stcol">Volgnummer</span><span class="overview_2ndcol subfieldID grey"><?=$subfieldID ?></span><br>
				<span class="overview_1stcol">datum opname</span><span class="overview_2ndcol" ><?=@$subfieldvalues['startdate'] ?></span><br>
				<span class="overview_1stcol">tijd opname</span><span class="overview_2ndcol" ><?=@$subfieldvalues['starttime'] ?></span><br>
				<span class="overview_1stcol">datum ontslag</span><span class="overview_2ndcol" ><?=@$subfieldvalues['enddate'] ?></span><br>
				<span class="overview_1stcol">tijd ontslag</span><span class="overview_2ndcol" ><?=@$subfieldvalues['endtime'] ?></span><br>
			</p>
		</td>
		<td width="400px" class="overview">
			<p>	<span class="overview_1stcol">Verantwoordelijk arts</span><span class="overview_2ndcol" ><?=@$subfieldvalues['doctor-responsible'] ?></span><br>
				<span class="overview_1stcol">Behandelend arts</span><span class="overview_2ndcol" ><?=@$subfieldvalues['doctor-acting'] ?></span><br>
				<span class="overview_1stcol">Assistentie door</span><span class="overview_2ndcol" ><?=@$subfieldvalues['doctor-assisting'] ?></span><br>
				<span class="overview_1stcol">Nazorg inplannen?</span><span class="overview_2ndcol" ><?=@$subfieldvalues['aftercare-plan'] ?></span><br>
			</p>
		</td>
	</tr>
</table>
<hr>
<h3>Reden van opname</h3>
<table>
	<tr class="chart_treatment">
		<td width="180px" class="overview">
			<input type="checkbox" disabled <?=@$subfieldvalues['wound']?'checked':'' ?> name="wound"><label for="wound">Verwonding</label>
		</td>
		<td width="200px" class="overview">
			<input type="checkbox" disabled <?=@$subfieldvalues['wound-shot']?'checked':'' ?> name="wound-shot"><label for="wound-shot">Schotwond</label><br>
			<input type="checkbox" disabled <?=@$subfieldvalues['wound-burn']?'checked':'' ?> name="wound-burn"><label for="wound-burn">Brandwond</label><br>
			<input type="checkbox" disabled <?=@$subfieldvalues['wound-fracture']?'checked':'' ?> name="wound-fracture"><label for="wound-fracture">Breuk</label>
		</td>
		<td width="200" class="overview">
			<input type="checkbox" disabled <?=@$subfieldvalues['wound-cut']?'checked':'' ?> name="wound-cut"><label for="wound-cut">Snijwond</label><br>
			<input type="checkbox" disabled <?=@$subfieldvalues['wound-abrasion']?'checked':'' ?> name="wound-abrasion"><label for="wound-abrasion">Schaafwond</label><br>
			<input type="checkbox" disabled <?=@$subfieldvalues['wound-infection']?'checked':'' ?> name="wound-infection"><label for="wound-infection">Infectie</label>
		</td>
		<td width="200" class="overview">
			<input type="checkbox" disabled <?=@$subfieldvalues['wound-blunt']?'checked':'' ?> name="wound-blunt"><label for="wound-blunt">Slagwond (stomp)</label><br>
			<input type="checkbox" disabled <?=@$subfieldvalues['wound-sprain']?'checked':'' ?> name="wound-sprain"><label for="wound-sprain">Verstuiking/verrekking</label>
		</td>
	</tr>
	<tr class="chart_treatment"><td colspan = "4">&nbsp;</td></tr>
	<tr class="chart_treatment">
		<td colspan = "2" class="overview">
			<input type="checkbox" disabled <?=@$subfieldvalues['psych']?'checked':'' ?> name="psych"><label for="psych">Psychologische klachten</label>
		</td>
		<td width="200px" class="overview">
			<input type="checkbox" disabled <?=@$subfieldvalues['psych-acute']?'checked':'' ?> name="psych-acute"><label for="psych-acute">Acuut</label><br>
		</td>
		<td width="200" class="overview">
			<input type="checkbox" disabled <?=@$subfieldvalues['psych-long']?'checked':'' ?> name="psych-long"><label for="psych-long">Langdurig</label><br>
		</td>
	</tr>
	<tr class="chart_treatment"><td colspan = "4">&nbsp;</td></tr>
	<tr class="chart_treatment">
		<td colspan = "2" class="overview">
			<input type="checkbox" disabled <?=@$subfieldvalues['poison']?'checked':'' ?> name="poison"><label for="poison">Vergiftiging door (indien bekend)</label>
		</td>
		<td colspan = "2" class="overview">
			<span ><?=@$subfieldvalues['poison-note'] ?></span>
		</td>
	</tr>
	<tr class="chart_treatment"><td colspan = "4">&nbsp;</td></tr>

	<tr class="chart_treatment">
		<td colspan = "2" class="overview">
			<input type="checkbox" disabled <?=@$subfieldvalues['other']?'checked':'' ?> name="other"><label for="other">Anders</label>
		</td>
		<td colspan = "2" class="overview">
			<span ><?=@$subfieldvalues['aftercare-other-note'] ?></span>
		</td>
	</tr>
</table>
<hr>
<h3>Behandeling</h3>
<table>
	<tr class="chart_treatment">
		<td width="380px" class="overview">Omschrijving behandelde locatie<br><span ><?=@$subfieldvalues['treated-location'] ?></span></td>
		<td width="400px" class="overview">Aantal gebruikte bloedzakken<br><span ><?=@$subfieldvalues['used-bloodbags'] ?></span></td>
	</tr>
	<tr class="chart_treatment"><td colspan = "2">&nbsp;</td></tr>
	<tr class="chart_treatment">
		<td width="380px" class="overview">Gebruikte medicatie tijdens de behandeling<br><span ><?=@$subfieldvalues['used-medication'] ?></span></td>
		<td width="400px" class="overview">Voorgeschreven medicatie<br><span ><?=@$subfieldvalues['prescribed-medication'] ?></span></td>
	</tr>
	<tr class="chart_treatment"><td colspan = "2"><hr></td></tr>
	<tr class="chart_treatment">
		<td width="380px" class="overview"><h3>Uitgevoerde behandeling</h3>
			<p><input type="checkbox" disabled <?=@$subfieldvalues['care-reanimation']?'checked':'' ?> name="care-reanimation"><label for="care-reanimation">Reanimatie</label><br>				<span ><?=@$subfieldvalues['care-reanimation-note'] ?></span></p>
			<p><input type="checkbox" disabled <?=@$subfieldvalues['care-transfusion']?'checked':'' ?> name="care-transfusion"><label for="care-transfusion">Bloedtransfusie</label><br>				<span ><?=@$subfieldvalues['care-transfusion-note'] ?></span></p>
			<p><input type="checkbox" disabled <?=@$subfieldvalues['care-scan']?'checked':'' ?> name="care-scan"><label for="care-scan">Scan<br>				<span ><?=@$subfieldvalues['care-scan-note'] ?></span></p>
			<p><input type="checkbox" disabled <?=@$subfieldvalues['care-transplant']?'checked':'' ?> name="care-transplant"><label for="care-transplant">Transplantatie</label><br>				<span ><?=@$subfieldvalues['care-transplant-note'] ?></span></p>							<p><input type="checkbox" disabled <?=@$subfieldvalues['care-amputate']?'checked':'' ?> name="care-amputate"><label for="care-amputate">Amputatie</label><br>				<span ><?=@$subfieldvalues['care-amputate-note'] ?></span></p>
			<p><input type="checkbox" disabled <?=@$subfieldvalues['care-regeneration']?'checked':'' ?> name="care-regeneration"><label for="care-regeneration">Regeneratie</label><br>				<span ><?=@$subfieldvalues['care-regeneration-note'] ?></span></p>
			<p><input type="checkbox" disabled <?=@$subfieldvalues['care-psychic']?'checked':'' ?> name="care-psychic"><label for="care-psychic">Psychische zorg</label><br>				<span ><?=@$subfieldvalues['care-psychic-note'] ?></span></p>
			<p><input type="checkbox" disabled <?=@$subfieldvalues['care-dental']?'checked':'' ?> name="care-dental"><label for="care-dental">Tandheelkundige zorg</label><br>				<span ><?=@$subfieldvalues['care-dental-note'] ?></span></p>
			<p><input type="checkbox" disabled <?=@$subfieldvalues['care-wound']?'checked':'' ?> name="care-wound"><label for="care-wound">Wondzorg</label><br>				<span ><?=@$subfieldvalues['care-wound-note'] ?></span></p>			<p><input type="checkbox" disabled <?=@$subfieldvalues['care-aid']?'checked':'' ?> name="care-aid"><label for="care-aid">Hulpmiddel toegepast (mitella, nek-brace, ed)</label><br>				<span ><?=@$subfieldvalues['care-aid-note'] ?></span></p>
			<p><input type="checkbox" disabled <?=@$subfieldvalues['care-other']?'checked':'' ?> name="care-other"><label for="care-other">Anders</label><br>				<span ><?=@$subfieldvalues['care-other-note'] ?></span></p>
		</td>
		<td width="400px" class="overview"><h3>Uitgevoerde operatie</h3>
			<p><input type="checkbox" disabled <?=@$subfieldvalues['oper-removal']?'checked':'' ?> name="oper-removal"><label for="oper-removal">Verwijderen lichaamsvreemd materiaal</label><br>				<span ><?=@$subfieldvalues['oper-removal-note'] ?></span></p>
			<p><input type="checkbox" disabled <?=@$subfieldvalues['oper-transplant']?'checked':'' ?> name="oper-transplant"><label for="oper-transplant">Transplantatie</label><br>				<span ><?=@$subfieldvalues['oper-transplant-note'] ?></span></p>							<p><input type="checkbox" disabled <?=@$subfieldvalues['oper-amputate']?'checked':'' ?> name="oper-amputate"><label for="oper-amputate">Amputatie</label><br>				<span ><?=@$subfieldvalues['oper-amputate-note'] ?></span></p>
			<p><input type="checkbox" disabled <?=@$subfieldvalues['oper-fracture']?'checked':'' ?> name="oper-fracture"><label for="oper-fracture">Herstel breuk</label><br>				<span ><?=@$subfieldvalues['oper-fracture-note'] ?></span></p>
			<p><input type="checkbox" disabled <?=@$subfieldvalues['oper-prosthetic']?'checked':'' ?> name="oper-prosthetic"><label for="soper-prosthetic">Prothese plaatsen/vervangen/onderhoud</label><br>				<span ><?=@$subfieldvalues['oper-prosthetic-note'] ?></span></p>
			<p><input type="checkbox" disabled <?=@$subfieldvalues['oper-dental']?'checked':'' ?> name="oper-dental"><label for="oper-dental">Tandheelkundig/endodontologisch</label><br>				<span ><?=@$subfieldvalues['oper-dental-note'] ?></span></p>
			<p><input type="checkbox" disabled <?=@$subfieldvalues['oper-other']?'checked':'' ?> name="oper-other"><label for="oper-other">Anders</label><br>				<span ><?=@$subfieldvalues['oper-other-note'] ?></span></p>						<p><input type="checkbox" disabled <?=@$subfieldvalues['oper-suture']?'checked':'' ?> name="oper-suture"><label for="oper-suture">Hechten</label><br>				<span ><?=@$subfieldvalues['oper-suture-note'] ?></span></p>
		</td>
	</tr>
</table>
<hr>
<h3>Bijwerkingen</h3>
<table>
	<tr class="chart_treatment">
		<td width="280px" class="overview">
			<input type="checkbox" disabled <?=@$subfieldvalues['side-hypertension']?'checked':'' ?> name="side-hypertension"><label for="side-hypertension">Bloeddruk verhoogd</label><br>
			<input type="checkbox" disabled <?=@$subfieldvalues['side-drymouth']?'checked':'' ?> name="side-drymouth"><label for="side-drymouth">Droge mond</label><br>
			<input type="checkbox" disabled <?=@$subfieldvalues['side-arrythmia']?'checked':'' ?> name="side-arrythmia"><label for="side-arrythmia">Hartritmestoornissen</label><br>
			<input type="checkbox" disabled <?=@$subfieldvalues['side-throatache']?'checked':'' ?> name="side-throatache"><label for="side-throatache">Keelpijn</label><br>
			<input type="checkbox" disabled <?=@$subfieldvalues['side-gastro']?'checked':'' ?> name="side-gastro"><label for="side-gastro">Maag en darmklachten</label><br>
			<input type="checkbox" disabled <?=@$subfieldvalues['side-inflammation']?'checked':'' ?> name="side-inflammation"><label for="side-inflammation">Ontsteking</label><br>
			<input type="checkbox" disabled <?=@$subfieldvalues['side-insomnia']?'checked':'' ?> name="side-insomnia"><label for="side-insomnia">Slaapproblemen</label><br>
			<input type="checkbox" disabled <?=@$subfieldvalues['side-appetite-increase']?'checked':'' ?> name="side-appetite-increase"><label for="side-appetite-increase">Verhoogde eetlust</label><br>
			<input type="checkbox" disabled <?=@$subfieldvalues['side-confusion']?'checked':'' ?> name="side-confusion"><label for="side-confusion">Verwardheid</label><br>
		</td>
		<td width="280px" class="overview">
			<input type="checkbox" disabled <?=@$subfieldvalues['side-hypotension']?'checked':'' ?> name="side-hypotension"><label for="side-hypotension">Bloeddruk verlaagd</label><br>
			<input type="checkbox" disabled <?=@$subfieldvalues['side-vertigo']?'checked':'' ?> name="side-vertigo"><label for="side-vertigo">Duizeligheid</label><br>
			<input type="checkbox" disabled <?=@$subfieldvalues['side-headache']?'checked':'' ?> name="side-headache"><label for="side-headache">Hoofdpijn</label><br>
			<input type="checkbox" disabled <?=@$subfieldvalues['side-fever']?'checked':'' ?> name="side-fever"><label for="side-fever">Koorts</label><br>
			<input type="checkbox" disabled <?=@$subfieldvalues['side-nausea']?'checked':'' ?> name="side-nausea"><label for="side-nausea">Misselijkheid</label><br>
			<input type="checkbox" disabled <?=@$subfieldvalues['side-sensitivity-sun']?'checked':'' ?> name="side-sensitivity-sun"><label for="side-sensitivity-sun">Overgevoeligheid zonlicht</label><br>
			<input type="checkbox" disabled <?=@$subfieldvalues['side-myalgia']?'checked':'' ?> name="side-myalgia"><label for="side-myalgia">Spierpijn</label><br>
			<input type="checkbox" disabled <?=@$subfieldvalues['side-appetite-loss']?'checked':'' ?> name="side-appetite-loss"><label for="side-appetite-loss">Verminderde eetlust</label><br>
			<input type="checkbox" disabled <?=@$subfieldvalues['side-transpiration']?'checked':'' ?> name="side-transpiration"><label for="side-transpiration">Zweten</label><br>
		</td>
		<td width="280px" class="overview">
			<input type="checkbox" disabled <?=@$subfieldvalues['side-concentration']?'checked':'' ?> name="side-concentration"><label for="side-concentration">Concentratieproblemen</label><br>
			<input type="checkbox" disabled <?=@$subfieldvalues['side-hairloss']?'checked':'' ?> name="side-hairloss"><label for="side-hairloss">Haaruitval</label><br>
			<input type="checkbox" disabled <?=@$subfieldvalues['side-infection']?'checked':'' ?> name="side-infection"><label for="side-infection">Infectie</label><br>
			<input type="checkbox" disabled <?=@$subfieldvalues['side-breathlessness']?'checked':'' ?> name="side-breathlessness"><label for="side-breathlessness">Kortademigheid</label><br>
			<input type="checkbox" disabled <?=@$subfieldvalues['side-bleeding']?'checked':'' ?> name="side-bleeding"><label for="side-bleeding">Nabloedingen</label><br>
			<input type="checkbox" disabled <?=@$subfieldvalues['side-panic']?'checked':'' ?> name="side-panic"><label for="side-panic">Paniekaanvallen</label><br>
			<input type="checkbox" disabled <?=@$subfieldvalues['side-muscletwitching']?'checked':'' ?> name="side-muscletwitching"><label for="side-muscletwitching">Spiertrillen</label><br>
			<input type="checkbox" disabled <?=@$subfieldvalues['side-fatigue']?'checked':'' ?> name="side-fatigue"><label for="side-fatigue">Vermoeidheid</label><br>
			<input type="checkbox" disabled <?=@$subfieldvalues['side-functionloss']?'checked':'' ?> name="side-functionloss"><label for="side-functionloss">Functieverlies</label><br>
		</td>
	</tr>
	<tr class="chart_treatment">
		<td colspan= "3" class="overview">
		<input type="checkbox" disabled <?=@$subfieldvalues['side-other']?'checked':'' ?> name="side-other"><label for="side-other">Anders</label><span ><?=@$subfieldvalues['side-other-note'] ?></span>
		</td>
	</tr>
</table>
<hr>
<h3>Nazorg</h3>
<table>
	<tr class="chart_treatment">
		<td width="380px" class="overview">Doorverwijzing<br><span ><?=@$subfieldvalues['referral'] ?></span></td>
		<td width="400px" class="overview">Controleafspraak<br><span ><?=@$subfieldvalues['aftercare-appointment'] ?></span></td>
	</tr>
</table>
<div>
