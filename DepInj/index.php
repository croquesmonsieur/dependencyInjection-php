<?php
include 'Transform.php';
$word = new Capitalization;
$newWord =  $word->transform('How about now');
$sentence = new Dashination();
$sentence = $sentence->transform('Did it do you any good?');
?>
<p><?php echo $newWord ?></p>
<p><?php echo $sentence ?></p>
