<?php
use yii\helpers\Html;
use yii\helpers\Url;
?>

<div class="container">
  <h2>Detail User</h2>
  <table class="table table-bordered table-striped">
    <tr><th>ID</th><td><?=$user->id?></td><tr>
    <tr><th>Name</th><td><?=$user->username?></td><tr>
    <tr><th>Phone</th><td><?=$user->phone?></td><tr>
  </table>
  <table class="table table-bordered table-striped">
    <?php foreach ($user->posts as $post): ?>
    <tr><th>Title</th><td><?=$post->title?></td><tr>
    <?php endforeach; ?>
  </table>
  
</div>
