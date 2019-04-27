<?php
  require __DIR__ . '/vendor/autoload.php';

  $data = $_POST['data'];
  $options = array(
    'cluster' => 'ap2',
    'useTLS' => true
  );
  $pusher = new Pusher\Pusher(
    '1f80074228f1ab8196f3',
    'c31a838000d78bdbb657',
    '769765',
    $options
  );

  $pusher->trigger('my-channel', 'my-event', $data);
?>
