<?php

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
		$EndData = 0;
		foreach ($data as $key => $value) {
			$EndData += $value;
		}
		return $EndData;
	}

	public static function subtractMany($data) // subtract many in array
	{
		$EndData = 0;
		foreach ($data as $key => $value) {
			$EndData -= $value;
		}
		return $EndData;
	}

	public static function multiplyMany($data) // multiply many in array
	{
		$EndData = 1;
		foreach ($data as $key => $value) {
			$EndData *= $value;
		}
		return $EndData;
	}

	public static function divideMany($data) // divide many in array
	{
		$EndData = 1;
		foreach ($data as $key => $value) {
			$EndData /= $value;
		}
		return $EndData;
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

	public static function rectangle($w, $h)
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
		} elseif ($num2 == 'find') {
			return sqrt(pow($num1, 2) - pow($num3, 2));
		} elseif ($num3 == 'find') {
			return sqrt(pow($num2, 2) - pow($num2, 2));
		}
	}

	public static function root($root) // square root
	{
		if ($root < 0) {
			return NAN;
		} else {
			$x1 = (1/2) * (600.000 + ($root / 600.000));
			$x2 = (1/2) * ($x1 + ($root / $x1));
			while ($x1 != $x2) {
				$x1 = (1/2) * ($x2 + ($root / $x2));
				$x2 = (1/2) * ($x1 + ($root / $x1));
			}
			return $x2;
		}
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
		return ($ang - (pow($ang, 3) / 6) + (pow($ang, 5) / 120) - (pow($ang, 7) / 5040));
	}

	public static function CosInDeg($ang) // cosine in degree
	{
		$ang = $ang * pi() / 180;
		return (1 - (pow($ang, 2) / 2) + (pow($ang, 4) / 24) - (pow($ang, 6) / 720));
	}

	public static function TanInDeg($ang) // tangent in degree
	{
		$ang = $ang * pi() / 180;
		return ($ang + (pow($ang, 3) / 3) + (2 * (pow($ang, 5)) / 15) + (17 * (pow($ang, 7)) / 315));
	}

	public static function SinInRad($ang) // sine in radians
	{
		$ang = $ang * pi() / 180;
		return ($ang - (pow($ang, 3) / 6) + (pow($ang, 5) / 120) - (pow($ang, 7) / 5040));
	}

	public static function CosInRad($ang) // cosine in radians
	{
		$ang = $ang * pi() / 180;
		return (1 - (pow($ang, 2) / 2) + (pow($ang, 4) / 24) - (pow($ang, 6) / 720));
	}

	public static function TanInRad($ang) // tangent in radians
	{
		$ang = $ang * pi() / 180;
		return ($ang + (pow($ang, 3) / 3) + (2 * (pow($ang, 5)) / 15) + (17 * (pow($ang, 7)) / 315));
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
		return (1 + $r + (pow($r, 2) / 2) + (pow($r, 3) / 6) + (pow($r, 4) / 24) + (pow($r, 5) / 120));
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
}

echo math::power(5, 5.55);

?>
