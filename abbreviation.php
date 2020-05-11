<?php 

/**
 * Function that converts a numeric value into an exact abbreviation
 */
function number_format_short( $n, $precision = 1 ) {
	if ($n < 900) {
		// 0 - 900
		$n_format = number_format($n, $precision);
		$suffix = '';
	} else if ($n < 900000) {
		// 0.9k-850k
		$n_format = number_format($n / 1000, $precision);
		$suffix = 'K';
	} else if ($n < 900000000) {
		// 0.9m-850m
		$n_format = number_format($n / 1000000, $precision);
		$suffix = 'M';
	} else if ($n < 900000000000) {
		// 0.9b-850b
		$n_format = number_format($n / 1000000000, $precision);
		$suffix = 'B';
	} else {
		// 0.9t+
		$n_format = number_format($n / 1000000000000, $precision);
		$suffix = 'T';
	}
  // Remove unecessary zeroes after decimal. "1.0" -> "1"; "1.00" -> "1"
  // Intentionally does not affect partials, eg "1.50" -> "1.50"
	if ( $precision > 0 ) {
		$dotzero = '.' . str_repeat( '0', $precision );
		$n_format = str_replace( $dotzero, '', $n_format );
	}
	return $n_format . $suffix;
}

$examples = array(15, 129, 400, 1500, 14350, 30489, 50222, 103977 , 2540388, 53003839);

foreach($examples as $example){
    echo "$example => " . number_format_short($example) . "\n";
}

/*

Outputs: 
	15 => 15
	129 => 129
	400 => 400
	1500 => 1.5K
	14350 => 14.4K
	30489 => 30.5K
	50222 => 50.2K
	103977 => 104K
	2540388 => 2.5M
	53003839 => 53M
*/