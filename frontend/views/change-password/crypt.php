<?php
use Yii;
?>

<div class="container-fluid">
  <h2>Cryptography</h2>

  <!--  default length = 32-->
  <?= Yii::$app->security->generateRandomString(50); ?>
  <br>
  <br>

  <h4>Encryption</h4>
  <?=$encrypt?>
  <br>
  <hr>

  <h4>Decryption</h4>
  <!--  if password key isn't the same, the decryption don't work-->
  <?= Yii::$app->security->decryptByPassword($encrypt, 12345);?>

</div>


