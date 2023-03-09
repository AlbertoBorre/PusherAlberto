<?php
// First, run 'composer require pusher/pusher-php-server'
require __DIR__ . '/vendor/autoload.php';

$pusher = new Pusher\Pusher(
  "96ee000cbf43915d698f", //key
  "13b044f7e5106334e84b", //secret
  "1557866", //app_id
  array(
    'cluster' => 'eu' //cluster
  )
);


for($i = 0 ; $i < 4; $i++) {
  $pusher->trigger('price-btcusd', 'new-price', array(
    'value' => rand(0, 100)
  ));
  sleep(2);
}

/*while (true) {
  $pusher->trigger('price-btcusd', 'new-price', array(
    'value' => rand(0, 100)
  ));
  sleep(2);
}*/

?>
