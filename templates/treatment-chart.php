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
			</p>
		</td>
	</tr>
</table>
<hr>


<!-- hier ben ik gebleven -->


	<table class="history_main">
		<th colspan="4">Reden van opname</th>
			<tr>
				<td width="180px" class="history_side">
					<input type="checkbox" disabled <?=@$subfieldvalues['wound']?'checked':'' ?> name="wound">
					<label for="wound">Verwonding</label>
				</td>
				<td width="200px" class="history_side">
					<input type="checkbox" disabled <?=@$subfieldvalues['wound-shot']?'checked':'' ?> name="wound-shot">
					<label for="wound-shot">Schotwond</label><br>
					<input type="checkbox" disabled <?=@$subfieldvalues['wound-burn']?'checked':'' ?> name="wound-burn">
					<label for="wound-burn">Brandwond</label><br>
					<input type="checkbox" disabled <?=@$subfieldvalues['wound-fracture']?'checked':'' ?> name="wound-fracture">
					<label for="wound-fracture">Breuk</label>
				</td>
				<td width="200" class="history_side">
					<input type="checkbox" disabled <?=@$subfieldvalues['wound-cut']?'checked':'' ?> name="wound-cut">
					<label for="wound-cut">Snijwond</label><br>
					<input type="checkbox" disabled <?=@$subfieldvalues['wound-abrasion']?'checked':'' ?> name="wound-abrasion">
					<label for="wound-abrasion">Schaafwond</label><br>
					<input type="checkbox" disabled <?=@$subfieldvalues['wound-infection']?'checked':'' ?> name="wound-infection">
					<label for="wound-infection">Infectie</label>
				</td>
				<td width="200" class="history_side">
					<input type="checkbox" disabled <?=@$subfieldvalues['wound-blunt']?'checked':'' ?> name="wound-blunt">
					<label for="wound-blunt">Slagwond (stomp)</label><br>
					<input type="checkbox" disabled <?=@$subfieldvalues['wound-sprain']?'checked':'' ?> name="wound-sprain">
					<label for="wound-sprain">Verstuiking/verrekking</label>
				</td>
				</tr><tr>
			<tr>
					<td class="history_side">
						<input type="checkbox" disabled <?=@$subfieldvalues['psych']?'checked':'' ?> name="psych">
						<label for="psych">Psychologische klachten</label>
					</td>
					<td class="history_side">
						<input type="checkbox" disabled <?=@$subfieldvalues['psych-acute']?'checked':'' ?> name="psych-acute">
						<label for="psych-acute">Acuut</label>
					</td>
					<td colspan="2" class="history_side">
						<input type="checkbox" disabled <?=@$subfieldvalues['psych-long']?'checked':'' ?> name="psych-long">
						<label for="psych-long">Langdurig</label>
					</td>
			</tr><tr>
					<td class="history_side">
						<input type="checkbox" disabled <?=@$subfieldvalues['poison']?'checked':'' ?> name="poison">
						<label for="poison">Vergiftiging door (indien bekend)</label>
					</td>
					<td colspan = "3" class="history_side">
						<span ><?=@$subfieldvalues['poison-note'] ?></span>
					</td>
			</tr><tr>
					<td class="history_side">
						<input type="checkbox" disabled <?=@$subfieldvalues['other']?'checked':'' ?> name="other">
						<label for="other">Anders: </label>
					</td>
					<td colspan="3" class="history_side">
						<span ><?=@$subfieldvalues['aftercare-other-note'] ?></span>
					</td>
			</tr>
	</table>		

	<table class="history_main">
		<th colspan="2">Behandeling</th>
		<tr>
			<td width="350px">Omschrijving behandelde locatie:</td>
			<td><?=@$subfieldvalues['treated-location'] ?></span></td>
		</tr><tr>
			<td>Aantal gebruikte bloedzakken:</td>
			<td><?=@$subfieldvalues['used-bloodbags'] ?></td>
		</tr><tr>
			<td>Gebruikte medicatie tijdens de behandeling:</td>
			<td><?=@$subfieldvalues['used-medication'] ?></td>
		</tr><tr>
			<td>Voorgeschreven medicatie:</td>
			<td><?=@$subfieldvalues['prescribed-medication'] ?></td>
		</tr>
	</table>



	<table class="history_main">
		<th>Uitgevoerde behandeling</th>
		<th>Uitgevoerde operatie</th>
		<tr>
			<td width="450px" class="history_side">
					<input type="checkbox" disabled <?=@$subfieldvalues['care-reanimation']?'checked':'' ?> name="care-reanimation">
					<label for="care-reanimation">Reanimatie<br></label>
					<span ><?=@$subfieldvalues['care-reanimation-note'] ?></span>
				<hr class="splitter">
					<input type="checkbox" disabled <?=@$subfieldvalues['care-transfusion']?'checked':'' ?> name="care-transfusion">
					<label for="care-transfusion">Bloedtransfusie<br></label>
					<span ><?=@$subfieldvalues['care-transfusion-note'] ?></span>
				<hr class="splitter">
					<input type="checkbox" disabled <?=@$subfieldvalues['care-scan']?'checked':'' ?> name="care-scan">
					<label for="care-scan">Scan<br></label>
					<span ><?=@$subfieldvalues['care-scan-note'] ?></span>
				<hr class="splitter">
					<input type="checkbox" disabled <?=@$subfieldvalues['care-transplant']?'checked':'' ?> name="care-transplant">
					<label for="care-transplant">Transplantatie<br></label>
					<span ><?=@$subfieldvalues['care-transplant-note'] ?></span>
				<hr class="splitter">
					<input type="checkbox" disabled <?=@$subfieldvalues['care-amputate']?'checked':'' ?> name="care-amputate">
					<label for="care-amputate">Amputatie<br></label>
					<span ><?=@$subfieldvalues['care-amputate-note'] ?></span>
				<hr class="splitter">
					<input type="checkbox" disabled <?=@$subfieldvalues['care-regeneration']?'checked':'' ?> name="care-regeneration">
					<label for="care-regeneration">Regeneratie<br></label>
					<span ><?=@$subfieldvalues['care-regeneration-note'] ?></span>
				<hr class="splitter">
					<input type="checkbox" disabled <?=@$subfieldvalues['care-psychic']?'checked':'' ?> name="care-psychic">
					<label for="care-psychic">Psychische zorg<br></label>
					<span ><?=@$subfieldvalues['care-psychic-note'] ?></span></p>
				<hr class="splitter">	
					<input type="checkbox" disabled <?=@$subfieldvalues['care-dental']?'checked':'' ?> name="care-dental">
					<label for="care-dental">Tandheelkundige zorg<br></label>
					<span ><?=@$subfieldvalues['care-dental-note'] ?></span></p>
				<hr class="splitter">
					<input type="checkbox" disabled <?=@$subfieldvalues['care-wound']?'checked':'' ?> name="care-wound">
					<label for="care-wound">Wondzorg<br></label>
					<span ><?=@$subfieldvalues['care-wound-note'] ?></span>			
				<hr class="splitter">
					<input type="checkbox" disabled <?=@$subfieldvalues['care-aid']?'checked':'' ?> name="care-aid">
					<label for="care-aid">Hulpmiddel toegepast (mitella, nek-brace, ed)<br></label>
					<span ><?=@$subfieldvalues['care-aid-note'] ?></span>
				<hr class="splitter">
					<input type="checkbox" disabled <?=@$subfieldvalues['care-other']?'checked':'' ?> name="care-other">
					<label for="care-other">Anders: <br></label><span ><?=@$subfieldvalues['care-other-note'] ?></span>
			</td>
			<td width="450px" class="history_side">
					<input type="checkbox" disabled <?=@$subfieldvalues['oper-removal']?'checked':'' ?> name="oper-removal">
					<label for="oper-removal">Verwijderen lichaamsvreemd materiaal<br></label>
					<span ><?=@$subfieldvalues['oper-removal-note'] ?></span>
				<hr class="splitter">
					<input type="checkbox" disabled <?=@$subfieldvalues['oper-transplant']?'checked':'' ?> name="oper-transplant">
					<label for="oper-transplant">Transplantatie<br></label>
					<span ><?=@$subfieldvalues['oper-transplant-note'] ?></span>
				<hr class="splitter">
					<p><input type="checkbox" disabled <?=@$subfieldvalues['oper-amputate']?'checked':'' ?> name="oper-amputate">
					<label for="oper-amputate">Amputatie<br></label>
					<span ><?=@$subfieldvalues['oper-amputate-note'] ?></span>
				<hr class="splitter">
					<input type="checkbox" disabled <?=@$subfieldvalues['oper-fracture']?'checked':'' ?> name="oper-fracture">
					<label for="oper-fracture">Herstel breuk<br></label>
					<span ><?=@$subfieldvalues['oper-fracture-note'] ?></span>
				<hr class="splitter">						
					<input type="checkbox" disabled <?=@$subfieldvalues['oper-prosthetic']?'checked':'' ?> name="oper-prosthetic">
					<label for="soper-prosthetic">Prothese plaatsen/vervangen/onderhoud<br></label>
					<span ><?=@$subfieldvalues['oper-prosthetic-note'] ?></span>
				<hr class="splitter">
					<input type="checkbox" disabled <?=@$subfieldvalues['oper-dental']?'checked':'' ?> name="oper-dental">
					<label for="oper-dental">Tandheelkundig/endodontologisch<br></label>
					<span ><?=@$subfieldvalues['oper-dental-note'] ?></span>
				<hr class="splitter">
					<input type="checkbox" disabled <?=@$subfieldvalues['oper-suture']?'checked':'' ?> name="oper-suture">
					<label for="oper-suture">Hechten<br></label>
					<span ><?=@$subfieldvalues['oper-suture-note'] ?></span>
				<hr class="splitter">
					<input type="checkbox" disabled <?=@$subfieldvalues['oper-other']?'checked':'' ?> name="oper-other">
					<label for="oper-other">Anders: <br></label>
					<span ><?=@$subfieldvalues['oper-other-note'] ?></span>
			</td>
		</tr>
	</table>
	
	
	<table class="history_main">
		<th colspan="3">Bijwerkingen gemeld door patient</th>
		<tr>
			<td width="250px" class="history_side">
				<input type="checkbox" disabled <?=@$subfieldvalues['side-hypertension']?'checked':'' ?> name="side-hypertension">
					<label for="side-hypertension">Bloeddruk verhoogd<br></label>
				<input type="checkbox" disabled <?=@$subfieldvalues['side-drymouth']?'checked':'' ?> name="side-drymouth">
					<label for="side-drymouth">Droge mond<br></label>
				<input type="checkbox" disabled <?=@$subfieldvalues['side-arrythmia']?'checked':'' ?> name="side-arrythmia">
					<label for="side-arrythmia">Hartritmestoornissen<br></label>
				<input type="checkbox" disabled <?=@$subfieldvalues['side-throatache']?'checked':'' ?> name="side-throatache">
					<label for="side-throatache">Keelpijn<br></label>
				<input type="checkbox" disabled <?=@$subfieldvalues['side-gastro']?'checked':'' ?> name="side-gastro">
					<label for="side-gastro">Maag en darmklachten<br></label>
				<input type="checkbox" disabled <?=@$subfieldvalues['side-inflammation']?'checked':'' ?> name="side-inflammation">
					<label for="side-inflammation">Ontsteking<br></label>
				<input type="checkbox" disabled <?=@$subfieldvalues['side-insomnia']?'checked':'' ?> name="side-insomnia">
					<label for="side-insomnia">Slaapproblemen<br></label>
				<input type="checkbox" disabled <?=@$subfieldvalues['side-appetite-increase']?'checked':'' ?> name="side-appetite-increase">
					<label for="side-appetite-increase">Verhoogde eetlust<br></label>
				<input type="checkbox" disabled <?=@$subfieldvalues['side-confusion']?'checked':'' ?> name="side-confusion">
					<label for="side-confusion">Verwardheid</label>
			</td>
			<td width="250px" class="history_side">
				<input type="checkbox" disabled <?=@$subfieldvalues['side-hypotension']?'checked':'' ?> name="side-hypotension">
					<label for="side-hypotension">Bloeddruk verlaagd<br></label>
				<input type="checkbox" disabled <?=@$subfieldvalues['side-vertigo']?'checked':'' ?> name="side-vertigo">
					<label for="side-vertigo">Duizeligheid<br></label>
				<input type="checkbox" disabled <?=@$subfieldvalues['side-headache']?'checked':'' ?> name="side-headache">
					<label for="side-headache">Hoofdpijn<br></label>
				<input type="checkbox" disabled <?=@$subfieldvalues['side-fever']?'checked':'' ?> name="side-fever">
					<label for="side-fever">Koorts<br></label>
				<input type="checkbox" disabled <?=@$subfieldvalues['side-nausea']?'checked':'' ?> name="side-nausea">
					<label for="side-nausea">Misselijkheid<br></label>
				<input type="checkbox" disabled <?=@$subfieldvalues['side-sensitivity-sun']?'checked':'' ?> name="side-sensitivity-sun">
					<label for="side-sensitivity-sun">Overgevoeligheid zonlicht<br></label>
				<input type="checkbox" disabled <?=@$subfieldvalues['side-myalgia']?'checked':'' ?> name="side-myalgia">
					<label for="side-myalgia">Spierpijn<br></label>
				<input type="checkbox" disabled <?=@$subfieldvalues['side-appetite-loss']?'checked':'' ?> name="side-appetite-loss">
					<label for="side-appetite-loss">Verminderde eetlust<br></label>
				<input type="checkbox" disabled <?=@$subfieldvalues['side-transpiration']?'checked':'' ?> name="side-transpiration">
					<label for="side-transpiration">Zweten</label>
			</td>
			<td class="history_side">
				<input type="checkbox" disabled <?=@$subfieldvalues['side-concentration']?'checked':'' ?> name="side-concentration">
					<label for="side-concentration">Concentratieproblemen<br></label>
				<input type="checkbox" disabled <?=@$subfieldvalues['side-hairloss']?'checked':'' ?> name="side-hairloss">
					<label for="side-hairloss">Haaruitval<br></label>
				<input type="checkbox" disabled <?=@$subfieldvalues['side-infection']?'checked':'' ?> name="side-infection">
					<label for="side-infection">Infectie<br></label>
				<input type="checkbox" disabled <?=@$subfieldvalues['side-breathlessness']?'checked':'' ?> name="side-breathlessness">
					<label for="side-breathlessness">Kortademigheid<br></label>
				<input type="checkbox" disabled <?=@$subfieldvalues['side-bleeding']?'checked':'' ?> name="side-bleeding">
					<label for="side-bleeding">Nabloedingen<br></label>
				<input type="checkbox" disabled <?=@$subfieldvalues['side-panic']?'checked':'' ?> name="side-panic">
					<label for="side-panic">Paniekaanvallen<br></label>
				<input type="checkbox" disabled <?=@$subfieldvalues['side-muscletwitching']?'checked':'' ?> name="side-muscletwitching">
					<label for="side-muscletwitching">Spiertrillen<br></label>
				<input type="checkbox" disabled <?=@$subfieldvalues['side-fatigue']?'checked':'' ?> name="side-fatigue">
					<label for="side-fatigue">Vermoeidheid<br></label>
				<input type="checkbox" disabled <?=@$subfieldvalues['side-functionloss']?'checked':'' ?> name="side-functionloss">
					<label for="side-functionloss">Functieverlies</label>
			</td>
		</tr>
		<tr>
			<td colspan= "3" class="history_side">
				<input type="checkbox" disabled <?=@$subfieldvalues['side-other']?'checked':'' ?> name="side-other"><label for="side-other">Anders:&nbsp;</label><span ><?=@$subfieldvalues['side-other-note'] ?></span>	
			</td>
		</tr>
	</table>

	<table class="history_main">
		<th colspan="2">Nazorg</th>
		<tr>
			<td width="180px">Nazorg advies:</td>
			<td><?=@$subfieldvalues['aftercare-plan'] ?></td>	
		</tr>
		<tr>
			<td>Doorverwijzing:</td>
			<td><?=@$subfieldvalues['referral'] ?></td>	
		</tr>
		<tr>
			<td>Controleafspraak:</td>
			<td><?=@$subfieldvalues['aftercare-appointment'] ?></td>	
		</tr>
	</table>
<br><br>
	<hr class="history">
	
</div>
