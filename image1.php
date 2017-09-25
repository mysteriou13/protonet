<?php 

function() i{
$chaine = 'ABCDEFGHIJKLMNPQRSTUVWXYZ123456789';
    $codeCaptcha = '';

    for($i=0; $i<$nombreCaractere; $i++)
    {
        $nombreAleatoire = rand(0, strlen($chaine)-1);
        $codeCaptcha .= $chaine[$nombreAleatoire];
    }

  return $codeCaptcha;

header ("Content-type: image/png");

$image = imagecreate(200,50);


$orange = imagecolorallocate($image, 255, 128, 0);

$bleu = imagecolorallocate($image, 0, 0, 255);

$bleuclair = imagecolorallocate($image, 156, 227, 254);

$noir = imagecolorallocate($image, 0, 0, 0);

$blanc = imagecolorallocate($image, 255, 255, 255);




imagestring($image, 4, 35, 15, $codeCaptcha, $blanc);

imagepng($image);
}


?>


