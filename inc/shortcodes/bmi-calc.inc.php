<?php
add_shortcode('bmicalc' , 'sc__bmicalc');
function sc__bmicalc( $atts , $content = null ){
	extract( shortcode_atts( array(
		'name'	=> '',

	), $atts , 'bmicalc' ) );
		ob_start();

?>
	

<div id="bmi-calc">
	<h2>BMI Calculator</h2>
	<form id="bmi-form" action="#" method="post"><input name="phpMyAdmin" type="hidden" value="7c4edd669et6f4db0f5" />
		<div class="box"><label>Height:</label><input id="feet" name="feet" type="text" />Feet<input id="inches" name="inches" type="text" />Inches</div>
		<div class="box"><label>Weight:</label><input id="lbs" name="lbs" type="text" />Lbs.</div>
		<input id="submit" name="submit" type="button" value="Find My BMI" />
		<span id="title">Your BMI:</span><span id="results"></span>

	</form>
	<table id="tbl-bmi">
		<thead>
			<tr class="main-title">
				<th colspan="2">Body Mass Index Chart</th>
			</tr>
		</thead>
		<tbody>
			<tr class="title">
				<td>BMI</td>
				<td>Weight Status</td>
			</tr>
			<tr id="underweight">
				<td>Below 18.5</td>
				<td>Underweight</td>
			</tr>
			<tr id="normal">
				<td>18.5-24.9</td>
				<td>Normal</td>
			</tr>
			<tr id="overweight">
				<td>25.0-30.9</td>
				<td>Overweight</td>
			</tr>
			<tr id="obese">
				<td>31.0-40.0</td>
				<td>Obese</td>
			</tr>
			<tr id="morbidly-obese">
				<td>40 and Above</td>
				<td>Morbidly Obese</td>
			</tr>
		</tbody>
	</table>
</div>

<?php
	$output = ob_get_contents();
	ob_end_clean();
	return $output;
}
