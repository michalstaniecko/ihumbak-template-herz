<?php

$section = rwmb_meta( 'section-3' );

$columns = $section['columns'];

?>

<div class="row text-center o-section o-section--columns o-section-stop">
  <div class="col-12">
    <h2><?= $section['title'] ?></h2>
  </div>
  <?php foreach ( $columns as $column ): ?>
    <div class="col-12 col-md-4">
      <p>
        <?= $column['text'] ?>

      </p>
    </div>
  <?php endforeach; ?>
</div>