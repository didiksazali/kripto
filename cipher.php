<?php

function Cipher($ch, $key)
{
	if (!ctype_alpha($ch))
		return $ch;

	$offset = ord(ctype_upper($ch) ? 'A' : 'a');
	return chr(fmod(((ord($ch) + $key) - $offset), 26) + $offset);
}

function Encipher($input, $key)
{
	$output = "";

	$inputArr = str_split($input);
	foreach ($inputArr as $ch)
		$output .= Cipher($ch, $key);

	return $output;
}

function Decipher($input, $key)
{
	return Encipher($input, 26 - $key);
}

?>

<?php

				
				
//$text = "The quick brown fox jumps over the lazy dog";

//echo $text;
//echo '</br>';

//$cipherText = Encipher($text, 3);

//echo $cipherText;
//echo '</br>';

//$plainText = Decipher($cipherText, 3);

//echo $plainText;

?>

								