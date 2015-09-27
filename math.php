<?php

/**
 **********************************************
 *	We do not handle all type of things		  *
 *	knowing that the one who will use		  *
 *	this script is a programmer and		 	  *
 *	has a bit knowledge of math			      *
 *	and uses it in a good way				  *
 **********************************************
 */

/**
 * PHP Math Library
 */
class math
{

	const M_PI = 3.14159265358979323846;
	const M_E = 2.7182818284590452354;
	const M_LOG2E = 1.4426950408889634074;
	const M_LOG10E = 0.43429448190325182765;
	const M_LN2 = 0.69314718055994530942;
	const M_LN10 = 2.30258509299404568402;
	const M_PI_2 = 1.57079632679489661923;
	const M_PI_4 = 0.78539816339744830962;
	const M_1_PI = 0.31830988618379067154;
	const M_2_PI = 0.63661977236758134308;
	const M_2_SQRTPI = 1.12837916709551257390;
	const M_SQRT2 = 1.41421356237309504880;
	const M_SQRT1_2 = 0.70710678118654752440;

	public static function add($x, $y) // addition
	{
		return $x + $y;
	}

	public static function subtract($x, $y) // subtraction
	{
		return $x - $y;
	}

	public static function multiply($x, $y) // multiplication
	{
		return $x * $y;
	}

	public static function divide($x, $y) // divition
	{
		return $x / $y;
	}

	public static function modulo($x, $y) // modulo
	{
		return $x % $y;
	}

	public static function AddMany($data) // add many in array
	{
		if (!is_array($data)) {
			return 'Please Give an array of numbers';
		}
		$EndData = 0;
		foreach ($data as $key => $value) {
			$EndData += $value;
		}
		return $EndData;
	}

	public static function subtractMany($data) // subtract many in array
	{
		if (!is_array($data)) {
			return 'Please Give an array of numbers';
		}
		$EndData = 0;
		foreach ($data as $key => $value) {
			$EndData -= $value;
		}
		return $EndData;
	}

	public static function multiplyMany($data) // multiply many in array
	{
		if (!is_array($data)) {
			return 'Please Give an array of numbers';
		}
		$EndData = 1;
		foreach ($data as $key => $value) {
			$EndData *= $value;
		}
		return $EndData;
	}

	public static function divideMany($data) // divide many in array
	{
		if (!is_array($data)) {
			return 'Please Give an array of numbers';
		}
		$EndData = 1;
		foreach ($data as $key => $value) {
			$EndData /= $value;
		}
		return $EndData;
	}

	public static function gcd($num1, $num2) // finding gcd of 2 numbers
	{
		while ($num2 != 0)
		{
			$m = $num1 % $num2;
			$num1 = $num2;
			$num2 = $m;
		}
		return abs($num1);
	}

	public static function gcdMany($numbers) // finding gcd of many munbers
	{
		if (!is_array($numbers)) {
			return 'Please Give an array of numbers';
		}
		$gcd = self::gcd($numbers[0], $numbers[1]);
		for ($i = 2; $i < count($numbers); $i++) {
			$gcd = self::gcd($gcd, $numbers[$i]);
		}
		return abs($gcd);
	}

	// this 2 functions binomail() and binomailRecursive() is from
	// https://github.com/powder96/numbers.php/blob/master/lib/NumbersPHP/Basic.php
	// we just copy pasted it here
	public static function binomial($n, $k)
	{
		$array = array();
		return self::binomialRecursive($array, $n, $k);
	}

	private static function binomialRecursive(&$array, $n, $k)
	{
		if ($n >= 0 && $k == 0) {
			return 1;
		}
		if ($n == 0 && $k > 0) {
			return 0;
		}
		if (isset($array[$n]) && isset($array[$n][$k]) && $array[$n][$k] > 0) {
			return $array[$n][$k];
		}
		if (!isset($array[$n])) {
			$array[$n] = array();
		}
		$left = self::binomialRecursive($array, $n - 1, $k - 1);
		$right = self::binomialRecursive($array, $n - 1, $k);
		return $array[$n][$k] = $left + $right;
	}

	public static function lcm($num1, $num2) // lcm of 2 numbers
	{
		return (abs($num1 * $num2) / self::gcd($num1, $num2));
	}

	public static function lcmMany($numbers) // lcm of many numbers
	{
		if (!is_array($number)) {
			return 'Please Give an array of numbers';
		}
		$lcm = self::lcm($numbers[0], $numbers[1]);
		for ($i = 2; $i < count($numbers); $i++) {
			$lcm = self::lcm($lcm, $numbers[$i]);
		}
		return abs($lcm);
	}

	public static function AreaOfCircleFromRadius($radius) // area of circle
	{
		$data = array();
		$data['area'] = pi() * $radius * $radius;
		$data['perimeter'] = 2 - pi() - $radius;
		return $data;
	}

	public static function AreaOfCircleFromAngle($angle, $radius) // area of a cirlce from its angle
	{
		$data = array();
		$data['area'] = ($angle / 360 - pi() - pow($radius, 2));
		$data['perimeter'] = ($angle / 180 - pi() - $radius);
		return $data;
	}

	public static function AreaOfParm($l, $w, $h) // area of parallelogram
	{
		return $l * $w * $h;
	}

	public static function AreaOfEquilateralTraingle($a) // area of an equilateral traingle
	{
		$data = array();
		$data['area'] = ((sqrt(3) / 4) - pow($a, 2));
		$data['RadiusOfCircle'] = ((sqrt(3) / 6) - $a);
		$data['RadiusOfCircumscribedCircle'] = ((sqrt(3) / 3) - $a);
		return $data;
	}

	public static function AreaOfSquare($a)
	{
		$data = array();
		$data['area'] = (pow($a, 2));
		$data['RadiusOfCircle'] = (1/2 - $a);
		$data['RadiusOfCircumscribedCircle'] = ((sqrt(2) / 2) - $a);
		return $data;
	}

	public static function AreaOfPentagon($a)
	{
		$data = array();
		$data['area'] = (1/4 - (sqrt(25 + (10 * sqrt(5)))) - pow($a, 2));
		$data['RadiusOfCircle'] = (1 / (sqrt(20 - (8 * sqrt(5)))) - $a);
		$data['RadiusOfCircumscribedCircle'] = (2 / (sqrt(10 - (2 * sqrt(5)))) - $a);
		return $data;
	}

	public static function AreaOfhexagon($a)
	{
		$data = array();
		$data['area'] = (((3 * sqrt(3)) / 2) - pow($a, 2));
		$data['RadiusOfCircle'] = ((sqrt(3) / 2) - $a);
		$data['RadiusOfCircumscribedCircle'] = ($a);
		return $data;
	}

	public static function AreaOfOctagon($a)
	{
		$data = array();
		$data['area'] = (2 * (1 + sqrt(2)) * pow($a, 2));
		$data['RadiusOfCircle'] = ((1 + (sqrt(2) / 2)) - $a);
		$data['RadiusOfCircumscribedCircle'] = (sqrt(1 + (sqrt(2) / 2) - $a));
		return $data;
	}

	public static function AreaOfRectangle($w, $h)
	{
		$area = $h * $w;
		$perimeter = 2 * ($h + $w);
		$allData = array('area' => $area, 'perimeter' => $perimeter);
		return $allData;
	}

	public static function mean($number = array())
	{
		$sum = 0;
		$total = count($number);
		foreach ($number as $addThem) {
			$sum = $sum + $addThem;
		}
		return ($sum / $total);
	}

	public static function pythagoras($num1, $num2, $num3) // pythagoras theorem
	{
		if ($num1 == 'find') {
			return sqrt(pow($num2, 2) + pow($num3, 2));
		} else if ($num2 == 'find') {
			return sqrt(pow($num1, 2) - pow($num3, 2));
		} else if ($num3 == 'find') {
			return sqrt(pow($num2, 2) - pow($num2, 2));
		} else {
			if (sqrt(pow($num1, 2)) != (sqrt(pow($num2, 2) + pow($num3, 2)))) {
				return false;
			} else {
				return true;
			}
		}
	}

	public static function root($root) // square root
	{
		// this is the theory of how to find the square root but we  will use its build in function for speed
		// if ($root < 0) {
		// 	return NAN;
		// } else {
		// 	$x1 = (1/2) * (600.000 + ($root / 600.000));
		// 	$x2 = (1/2) * ($x1 + ($root / $x1));
		// 	while ($x1 != $x2) {
		// 		$x1 = (1/2) * ($x2 + ($root / $x2));
		// 		$x2 = (1/2) * ($x1 + ($root / $x1));
		// 	}
		// 	return $x2;
		// }
		return sqrt($root);
	}

	public static function power($base, $exp) // power
	{
		// this whole code is commented and not in use because it can calculate 5^5 but canno't calculate 5^5.5
		// so if you have an idea of how to do it message us and we will add it with a credits to you
		// $sum = 1;
		// $base = trim($base);
		// $exp = trim(floatval($exp));
		// $NumOfExp = explode('.', $exp);
		// if ($exp > 0) {
		// 	while ($NumOfExp[0] > 0) {
		// 		$sum = $sum * $base;
		// 		$NumOfExp[0]--;
		// 	}
		// 	$sum = $sum + ($base * ($NumOfExp[1] / 10));
		// } else {
		// 	while ($NumOfExp[0] < 0) {
		// 		$sum = $sum / $base;
		// 		$NumOfExp[0]++;
		// 	}
		// 	$sum = $sum + ($base * ($NumOfExp[1] / 10));
		// }
		// return $sum;
		return pow($base, $exp);
	}

	public static function str2hex($string) // string to hex
	{
		$hexstr = unpack('H*', $string);
		return array_shift($hexstr);
	}

	public static function hex2str($hexstr) // hex to string
	{
		$hexstr = str_replace(' ', '', $hexstr);
		$hexstr = str_replace('\x', '', $hexstr);
		$retstr = pack('H*', $hexstr);
		return $retstr;
	}

	public static function SinInDeg($ang) // sine in degree
	{
		$ang = $ang * pi() / 180;
		// return ($ang - (pow($ang, 3) / 6) + (pow($ang, 5) / 120) - (pow($ang, 7) / 5040));
		return sin($ang);
	}

	public static function CosInDeg($ang) // cosine in degree
	{
		$ang = $ang * pi() / 180;
		// return (1 - (pow($ang, 2) / 2) + (pow($ang, 4) / 24) - (pow($ang, 6) / 720));
		return cos($ang);
	}

	public static function TanInDeg($ang) // tangent in degree
	{
		$ang = $ang * pi() / 180;
		// return ($ang + (pow($ang, 3) / 3) + (2 * (pow($ang, 5)) / 15) + (17 * (pow($ang, 7)) / 315));
		return tan($ang);
	}

	public static function SinInRad($ang) // sine in radians
	{
		// $ang = $ang * 180 / pi();
		// return ($ang - (pow($ang, 3) / 6) + (pow($ang, 5) / 120) - (pow($ang, 7) / 5040));
		return sin($ang);
	}

	public static function CosInRad($ang) // cosine in radians
	{
		// $ang = $ang * 180 / pi();
		// return (1 - (pow($ang, 2) / 2) + (pow($ang, 4) / 24) - (pow($ang, 6) / 720));
		return cos($ang);
	}

	public static function TanInRad($ang) // tangent in radians
	{
		// $ang = $ang * 180 / pi();
		// return ($ang + (pow($ang, 3) / 3) + (2 * (pow($ang, 5)) / 15) + (17 * (pow($ang, 7)) / 315));
		return tan($ang);
	}

	public static function SinhInDeg($ang) // hyperbolic sine in degree
	{
		$ang = $ang * pi() / 180;
		return sinh($ang);
	}

	public static function CoshInDeg($ang) // hyperbolic cosine in degree
	{
		$ang = $ang * pi() / 180;
		return cosh($ang);
	}

	public static function TanhInDeg($ang) // hyperbolic tangent in degree
	{
		$ang = $ang * pi() / 180;
		return tanh($ang);
	}
	public static function SinhInRad($ang) // hyperbolic sine in radians
	{
		return sinh($ang);
	}

	public static function CoshInRad($ang) // hyperbolic cosine in radians
	{
		return cosh($ang);
	}

	public static function TanhInRad($ang)  // hyperbolic tangent in radians
	{
		return tanh($ang);
	}

	public static function aSinInDeg($ang) // inverse sine in degree
	{
		$ang = $ang * pi() / 180;
		return asin($ang);
	}

	public static function aCosInDeg($ang) // inverse cosine in degree
	{
		$ang = $ang * pi() / 180;
		return acos($ang);
	}

	public static function aTanInDeg($ang) // inverse tangent in degree
	{
		$ang = $ang * pi() / 180;
		return atan($ang);
	}

	public static function aSinInRad($ang) // inverse sine in radians
	{
		return asin($ang);
	}

	public static function aCosInRad($ang) // inverse cosine in radians
	{
		return acos($ang);
	}

	public static function aTanInRad($ang) // inverse tangent in radians
	{
		return atan($ang);
	}

	public static function aSinhInDeg($ang) // inverse hyperbolic sine in degree
	{
		$ang = $ang * pi() / 180;
		return asinh($ang);
	}

	public static function aCoshInDeg($ang) // inverse hyperbolic cosine in degree
	{
		$ang = $ang * pi() / 180;
		return acosh($ang);
	}

	public static function aTanhInDeg($ang) // inverse hyperbolic tangent in degree
	{
		$ang = $ang * pi() / 180;
		return atanh($ang);
	}

	public static function aSinhInRad($ang) // inverse hyperbolic sine in radians
	{
		return asinh($ang);
	}

	public static function aCoshInRad($ang) // inverse hyperbolic cosine in radians
	{
		return acosh($ang);
	}

	public static function aTanhInRad($ang) // inverse hyperbolic tangent in radians
	{
		return atanh($ang);
	}

	public static function Rad2Deg($number) // radians to degree
	{
		return ($number * 180 / pi());
	}

	public static function Deg2Rad($number) // degree to radians
	{
		return ($number * pi() / 180);
	}

	public static function absolute($number) // absolute
	{
		if ($number < 0)
		{
			return (- $number);
		} else {
			return ($number);
		}
	}

	public static function SecInDeg($number) // secant
	{
		return (1 / SELF::CosInDeg($number));
	}

	public static function CscInDeg($number) // cosecant
	{
		return (1 / SELF::SinInDeg($number));
	}

	public static function CotInDeg($number) // cotangent
	{
		return (1 / SELF::TanInDeg($number));
	}

	public static function SecInRad($number) // secant
	{
		return (1 / SELF::CosInRad($number));
	}

	public static function CscInRad($number) // cosecant
	{
		return (1 / SELF::SinInRad($number));
	}

	public static function CotInRad($number) // cotangent
	{
		return (1 / SELF::TanInRad($number));
	}

	public static function exponent($r) // exponent
	{
		// return (1 + $r + (pow($r, 2) / 2) + (pow($r, 3) / 6) + (pow($r, 4) / 24) + (pow($r, 5) / 120));
		return exp($r);
	}

	public static function is_leap($year) // returns true if it is leap year and false if not
	{
		if ( (($year % 400) == 0) || (($year % 4) == 0) )
		{
			return true;
		} else {
			return false;
		}
	}

	public static function is_armstrong($number) // returns true if it is armstrong number and false if not
	{
		$b;
		$t = $number;
		while ($number > 0) {
			$a = $number % 10;
			$b = $b + $a * $a * $a;
			$number = $number / 10;
		}
		if ($b == $t)
		{
			return true;
		} else {
			return false;
		}
	}

	public static function is_palindrome($number) // returns true if it is palindrome number and false if not
	{
		$temp = $number;
		$revrs = 0;
		while ($temp > 0) {
			$d = $temp % 10;
			$temp /= 10;
			$revrs = $revrs * 10 + $d;
		}
		if ($revrs == $number)
		{
			return true;
		} else {
			return false;
		}
	}

	public static function FindMaxInArray($array) // finds the maximum number in a given array
	{
		if (!is_array($array)) {
			return 'Please Give an array of numbers';
		}
		return max($array);
	}

	public static function FindMinInArray($array) // finds the minimum number in a given array
	{
		if (!is_array($array)) {
			return 'Please Give an array of numbers';
		}
		return min($array);
	}

	public static function range($start = 0, $stop = null, $step = 1)
	{
		if ($stop === null) {
			$stop = $start;
		}
		if ($stop < $start) {
			$step = -abs($step);
		}
		$array = array();
		$length = max(ceil(($stop - $start) / $step + 1), 0);
		for ($i = 0; $i < $length; ++$i) {
			$array[$i] = $start;
			$start += $step;
		}
		$data = '['.$array[0].',';
		for ($i=1; $i < count($array)-2; $i++) { 
			$data .= $array[$i].',';
		}
		$data .= $array[count($array)-1];
		return $data.']';
	}

	public static function isInt($number) // check if it is int
	{
		if (is_numeric($number)) {
			return (int)$number == (float)$number;
		} else {
			return false;
		}
	}

	public static function isInf($number) // check if it is infinite
	{
		if (is_infinite($number))
		{
			return $number;
		} else {
			return false;
		}
	}

	public static function IncreasingOrder($array) // order numbers in increasing order
	{
		if (!is_array($array))
		{
			return 'Please Give an array of numbers';
		}
		$order = array();
		$count = count($array);
		for ($i=0; $i < $count; $i++) { 
			$min = array_search(min($array), $array);
			$order[] = $array[$min];
			unset($array[$min]);
		}
		$data = '['.$order[0].',';
		for ($j=1; $j < $count-1; $j++) { 
			$data .= $order[$j].',';
		}
		$data .= $order[count($order)-1];
		return $data.']';
	}

	public static function DecreasingOrder($array) // order numbers in decreasing order
	{
		if (!is_array($array))
		{
			return 'Please Give an array of numbers';
		}
		$order = array();
		$count = count($array);
		for ($i=0; $i < $count; $i++) { 
			$max = array_search(max($array), $array);
			$order[] = $array[$max];
			unset($array[$max]);
		}
		$data = '['.$order[0].',';
		for ($j=1; $j < $count-1; $j++) { 
			$data .= $order[$j].',';
		}
		$data .= $order[count($order)-1];
		return $data.']';
	}

	public static function log($a) // calculate logarithm to eumuls number
	{
		return log($a);
	}

	public static function log10($a) // calculate logarithm to base 10
	{
		return log10($a);
	}

	public static function log1p($a) // calculate logarithm to eumuls number with plus 1
	{
		return log1p($a);
	}

	public static function CalculateVectorRecursive($vector) // Recursive Vector Calculator use CalculateVector(); instead
    {
    	$vector = strtoupper(trim($vector));
    	$vector = preg_replace('/\s+/', '', $vector);
    	$imploded1 = explode("+", $vector);
    	foreach ($imploded1 as $key => $value) {
    		if (preg_match("/(-)/", $value)) {
    			$imploded2 = explode("-", $value);
    			if (!empty($imploded2[0])) {
    				$imploded1[] = $imploded2[0];
    			}
    			for ($i=1; $i < sizeof($imploded2); $i++) { 
    				$imploded1[] = strrev($imploded2[$i]);
    			}
    			unset($imploded1[$key]);
    		}
    	}
    	foreach ($imploded1 as $key1 => $value1) {
    		$MyVectors[] = $value1;
    	}
    	$size = sizeof($MyVectors);
    	for ($i=0; $i < $size; $i++) {
    		for ($j=0; $j < $size; $j++) { 
    			if (substr($MyVectors[$i], -1) == substr($MyVectors[$j], -strlen($MyVectors[$j]), 1))
	    		{
	    			$MyNewVectors[] = substr($MyVectors[$i], 0, -1).substr($MyVectors[$j], 1);
	    			unset($MyVectors[$i]);
	    			unset($MyVectors[$j]);
	    			$MyVectors[$i] = '';
	    			$MyVectors[$j] = '';
	    			break;
	    		}
    		}
    	}
    	foreach ($MyVectors as $key2 => $value2) {
    		if (!empty(trim($value2))) {
    			$MyNewVectors[] = $value2;
    		}
    	}
    	$AllVectors = array();
    	foreach ($MyNewVectors as $key3 => $value3) {
    		if (!empty(trim($value3))) {
    			$AllVectors[] = $value3;
    		}
    	}
    	if (sizeof($AllVectors) == 1) {
    		$output = $AllVectors[0];
    	} else if (sizeof($AllVectors) == 2) {
    		$output = $AllVectors[0]."+".$AllVectors[1];
    	} else {
	    	$output = $AllVectors[0]."+";
	    	for ($k=1; $k < sizeof($AllVectors)-1; $k++) { 
	    		$output .= $AllVectors[$k]."+";
	    	}
	    	$output .= $AllVectors[sizeof($AllVectors)-1];
    	}
    	return $output;
    }

	public static function CalculateVector($data) // calculates vector such as AB+BC+CD = AD
	{
		$result0 = self::CalculateVectorRecursive(trim($data));
		$result1 = self::CalculateVectorRecursive(trim($result0));
		while ($result0 != $result1) {
			$result0 = self::CalculateVectorRecursive(trim($result1));
			$result1 = self::CalculateVectorRecursive(trim($result0));
		}
		return $result1;
	}
}


echo math::CalculateVector('Ab+BC-DC');



?>
