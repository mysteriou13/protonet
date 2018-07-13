
 <?php
  ini_set('display_errors', 1);

  include_once("./vendor/predis/predis/autoload.php");

 try {

$redis = new redis();


$redis->connect("localhost");
$redis->del('snapshot-test');

}
catch (Exception $e) {
        die($e->getMessage());
}

  $allKeys = $redis->keys('*');
print_r($allKeys); // nothing here


?>

