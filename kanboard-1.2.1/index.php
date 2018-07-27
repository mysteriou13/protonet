
  <link rel = 'stylesheet' href = '../style/style.css'>
<?php

 include("../header.php");
 
use Kanboard\Core\Controller\Runner;

try {
    require __DIR__.'/app/common.php';
    $container['router']->dispatch();
    $runner = new Runner($container);
    $runner->execute();
} catch (Exception $e) {
    echo 'Internal Error: '.$e->getMessage();
}
