<?php

$section = rwmb_meta('section-2');
$columns = $section['columns'];
?>

<div class="row text-center o-section o-section-stop o-section--columns">
  <?php foreach ($columns as $column) : ?>
  <div class="col-12 col-md-4">
    <h2><?= $column['title'] ?></h2>
    <ul class="list-unstyled">
      <?php foreach ($column['list'] as $item): ?>
      <li>
        <?= $item['feature'] ?>
      </li>
      <?php endforeach; ?>
    </ul>
  </div>
  <?php endforeach; ?>
</div>