<?php

function has($key)
{
	return (isset($_REQUEST[$key]));

}

function get($key, $default = null)
{
	return has($key) ? $_REQUEST[$key] : $default;
}

$result = 0;

if (has('digits')) {
	$digits = get('digits');
	var_dump($digits);
	$digArray = str_split($digits);
	var_dump($digArray);
	foreach ($digArray as $number) {
		$result += $number;
	}
}


?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Sum of digits</title>
</head>
<body>
<form method="post">
	<div>
		<label for="digits">Enter any number:</label>
		<input type="number" name="digits">
	</div>
	<div>
		<input type="submit" value="Add digits">
	</div>
</form>
	<div>
		<label for="result">This is the sum of all the digits in the number you entered:</label>
		<input  type="number" name="result" value="<?= $result ?>">
	</div>

</body>
</html>
