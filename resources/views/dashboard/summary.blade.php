<table cellspacing="0">
		
		<tbody><tr>					
			<td class="td1" colspan="2">
				
				<input type="hidden" id="dashboardPID" value="10">
				
				<select id="dashboardDate">
					@for($i=date("Y"); $i > 2012; $i--)
						<option value="{{ $i }}">{{ $i }}</option>
					@endfor
					<option value="2016">2016</option><option value="2015">2015</option><option value="2014">2014</option><option value="2013">2013</option>
				</select>
				
				<select id="dashboardMonth">
					<option value="01" selected="selected">Január</option>
					<option value="02">Február</option>
					<option value="03">Március</option>
					<option value="04">Április</option>
					<option value="05">Május</option>
					<option value="06">Június</option>
					<option value="07">Július</option>
					<option value="08">Augusztus</option>
					<option value="09">Szeptember</option>
					<option value="10">Október</option>
					<option value="11">November</option>
					<option value="12">December</option>
				</select>
				
				<button onclick="dashboardClick();">Váltás!</button>
			</td>
			
			<td class="td3">
			
			</td>
		</tr>
		
		<tr>
			<td class="td1">
				<span class="anchor2">E-havi felvitt standlapok</span>
			</td>
			
			<td class="td1">
				<span id="standszamspan">0</span> db
			</td>
			
			<td class="td3">
			
			</td>
		</tr><tr>
		
		</tr><tr>
			<td class="td1">
				<span class="anchor2">E-havi forgalom</span>
			</td>
			
			<td class="td1">
				<span id="haviforgalomspan">0</span> Ft
			</td>
			
			<td class="td3">
			
			</td>
		</tr><tr>
		
		</tr><tr>
			<td class="td1">
				<span class="anchor2">E-havi kiadások</span>
			</td>
			
			<td class="td1">
				<span id="havikiadasspan">0</span> Ft
			</td>
			
			<td class="td3">
			
			</td>
		</tr><tr>
		
		</tr><tr>
			<td class="td1">
				<span class="anchor2">E-havi kp leadó</span>
			</td>
			
			<td class="td1">
				<span id="havileadospan">0</span> Ft
			</td>
			
			<td class="td3">
			
			</td>
		</tr><tr>
		
		</tr><tr>
			<td class="td1">
				<span class="anchor2">E-havi fizetések</span>
			</td>
			
			<td class="td1">
				<span id="havifizetesspan">0 Ft <a href="?page=20"><img src="http://1.1.1.3/bmi/s2.standapp.hu/img/newItallap.png" width="25" height="25"></a></span>
			</td>
			
			<td class="td3">
			
			</td>
		</tr><tr>
		
		</tr><tr>
			<td class="td2">
				
			</td>
			
			<td class="td2">
				
			</td>
			
			<td>
			
			</td>
		</tr><tr>
	</tr></tbody></table>