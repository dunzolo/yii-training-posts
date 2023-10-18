<?php

use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'My Yii Articles';
?>

<div class="container-fluid">
  <div class="d-flex justify-content-between align-items-center p-3">
    <h2>Lists of articles</h2>
    <a href="<?=Url::to(['create'])?>" class="btn btn-success">Create Post</a>
  </div>
  <table class="table table-striped table-bordered">
    <tr>
      <th>SN</th>
      <th>ID</th>
      <th>Title</th>
      <th>Posted Date</th>
      <th>Action</th>
    </tr>
    <?php
    $n = 1;
    foreach($model as $post):?>
      <tr>
        <td><?=$n?></td>
        <td><?=$post->id?></td>
        <td><?=$post->title?></td>
        <td><?=$post->created_at?></td>
        <td>
          <a href="<?=Url::to(['view','id'=>$post->id])?>" class="btn btn-primary">View</a>
          <a href="<?=Url::to(['update','id'=>$post->id])?>" class="btn btn-warning">Update</a>
          <a href="<?=Url::to(['delete','id'=>$post->id])?>" class="btn btn-danger">Delete</a>
        </td>
      </tr>
      <?php
      $n++;
    endforeach; ?>
  </table>
</div>