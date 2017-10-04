
<?php

if(file_exists("./site1/style/style.css")){

$style = './site1/style/style.css';

}else{

$style = '../site1/style/style.css';

}

?>

<link rel = "stylesheet" href = "<?php echo $style;?>">



