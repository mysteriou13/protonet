
<?php 

function captcha($nombreCaractere){


$chaine = 'ABCDEFGHIJKLMNPQRSTUVWXYZ123456789';
    $codeCaptcha = '';

    for($i=0; $i<$nombreCaractere; $i++)
    {
        $nombreAleatoire = rand(0, strlen($chaine)-1);
        $codeCaptcha .= $chaine[$nombreAleatoire];
    }

  return $codeCaptcha;


}

?>

