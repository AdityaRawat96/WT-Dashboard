<?php
  require __DIR__ . '/vendor/autoload.php';

  $data = $_POST['data'];
  $options = array(
    'cluster' => 'ap2',
    'useTLS' => true
  );
  $pusher = new Pusher\Pusher(
    '27e871ff188efd5a73db',
    '7612eaa70836d4dd75ba',
    '784377',
    $options
  );

  $pusher->trigger('my-channel', 'my-event', $data);
?>
