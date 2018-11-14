
 <?php
  require_once'./vendor/predis/predis/src/Autoloader.php';

  Predis\Autoloader::register();

   try {
    $redis = new Predis\Client();
    echo "connect sucess";
  
}
catch (Exception $e) {
    echo "Couldn't connected to Redis";
    echo $e->getMessage();
}


$redis->del("test");

?>

