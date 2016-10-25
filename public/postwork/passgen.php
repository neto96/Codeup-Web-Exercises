<?php
function has($key)
{
	return (isset($_REQUEST[$key]));

}

function get($key, $default = null)
{
	return has($key) ? $_REQUEST[$key] : $default;
}
$uppercase = range('A','Z');
$lowercase = range('a','z');

function genPass($specs) {

	return $password = implode("", $specs);
}

function checkSCAndNum ($numSC, $numNumber) {
    $numbers = range('0','9');
    $specialCharacters = ['!', '"', '#', '$', '%', '&', "'", '(', ')', '*', '+', ',', '-', '.', '/', ':', ';', '<', '=', '>', '?', '@', '[', '\\', ']', '^', '_', '`', '{', '|', '}', '~'];
    if ($numSC == 0) {
        $specialCharacters = [];
    }
    if ($numNumber == 0) {
        $numbers = [];
    }
    $scKeys = array_rand($specialCharacters, $numSC);
    $specialCharacters = array_intersect_key($specialCharacters, array_flip($scKeys));
    $nKeys = array_rand($numbers, $numNumber);
    $numbers = array_intersect_key($numbers, array_flip($nKeys));
    return [$specialCharacters, $numbers];

}


$message = "";
if (!has('length') || !has('spChar') || !has('digits') || !has('case')) {
	$message = "Please don't leave any blank boxes";
} else {
	$length = get('length');
	$spChar = get('spChar');
	$digits = get('digits');
	$case = get('case');
    $totalLetters = $length - ($spChar + $digits);
}


if (has('length') && has('spChar') && has('digits') && has('case')) {
    switch ($case) {
        case 'upper':
            list($specialCharacters, $numbers) = checkSCAndNum($spChar, $digits);
            if ($totalLetters!= 0) {
                $upperKeys = array_rand($uppercase, $totalLetters);
            } else {
                $upperKeys = array_rand($uppercase, $length);
            }
            $uppercase = array_intersect_key($uppercase, array_flip($upperKeys));
            $array = array_merge($uppercase, $specialCharacters, $numbers);
            $arrayKeys = array_rand($array, $length);

            $password = array_intersect_key($array, array_flip($arrayKeys));
            shuffle($password);
            $password = genPass($password);
            break;
        case 'lower':
            $array = array_merge($lowercase, checkSCAndNum($spChar, $digits));
            $password = array_rand($array, $length);
            genPass($password);
            break;
        case 'mixed':
            $array = array_merge($uppercase, $lowercase, checkSCAndNum($spChar, $digits));
            $password = array_rand($array, $length);
            genPass($password);
            break;
    }
} else {
    $message = 'Dont\'t leave any blank boxes dude';
}

?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<title>Password Generator</title>
</head>
<body>
<div class="col-sm-3"></div>
<div class="container col-sm-6">

    <h1>Password Generator</h1>

    <p>Create a script which will generate a random password. Allow your user to specify:</p>

    <form>
        <div class="form-group">
            <label for="length">Total length (min: 6, max:64)</label><br>
            <input class="form-control" type="number" name="length" style="width: 33.33%">
        </div>
        <div class="form-group">
            <label for="spChar">Number of special characters (including 0)</label><br>
            <input class="form-control" type="number" name="spChar" style="width: 33.33%">
        </div>
        <div class="form-group">
            <label for="digits">Number of digits (including 0)</label><br>
            <input class="form-control" type="number" name="digits" style="width: 33.33%">
        </div>
        <div class="radio">
            <label class="radio-inline">
                <input type="radio" name="case" value="upper" checked>All uppercase
            </label>
            <label class="radio-inline">
                <input type="radio" name="case" value="lower">All lowercase
            </label>
            <label class="radio-inline">
                <input type="radio" name="case" value="mixed">Mixed case
            </label>
        </div>
        <div class="form-group">
            <input type="submit" value="Submit">
        </div>

        <?php if ($message != "") :?>
        <div class="alert alert-danger" style="width: 43.33%"><?= $message ?></div>
        <?php endif ?>
    </form>
    <div class="form-group">
        <textarea class="form-control" style="resize: none; width: 43.33%;" placeholder="Your randomly generated password will appear here" rows="2" cols="50"><?php if (!empty($password)) :?><?= var_export($password, true) ?><?php endif ?></textarea>
    </div>
</div>
</body>
</html>
