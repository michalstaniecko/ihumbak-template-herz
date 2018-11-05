<?php


function cp( $position ) {
  $h = 2924;

  return ( $position / $h ) * 100;
}

$stones_raw = rwmb_meta( 'stones' );
$stones     = [];

foreach ( $stones_raw['stone-left'] as $s ) {
  $stones['left'][] = array(
    'top'    => $s['top'],
    'edge'   => $s['left'],
    'image-position' => $s['left-image'],
    'scroll' => $s['scroll'],
    'image'  =>
      wp_get_attachment_image_url( $s['image'][0], 'full' )
  );
}
foreach ( $stones_raw['stone-right'] as $s ) {
  $stones['right'][] = array(
    'top'    => $s['top'],
    'edge'   => $s['right'],
    'image-position' => $s['right-image'],
    'scroll' => $s['scroll'],
    'image'  =>
      wp_get_attachment_image_url( $s['image'][0], 'full' )
  );
}


?>

<div class="c-stones c-stones--left">

  <?php foreach ( $stones['left'] as $stone ): ?>
    <div class="c-stones__item c-stones__item--big c-stones__item--left" id="stone-1"
         style="top: <?= $stone['top'] ?>%;"
         data-bottom-top="top: <?= $stone['top'] ?>%; <?= !empty($stone['edge']) ? 'left: '.$stone['edge'].'px' : 'left: 0' ?>" data-top-bottom="top:<?= $stone['top'] / $stone['scroll'] ?>%;">
      <img src="<?= $stone['image'] ?>" style="left: <?= $stone['image-position'] ?>px" />
    </div>
  <?php endforeach; ?>


</div>
<div class="c-stones c-stones--right">

  <?php foreach ( $stones['right'] as $stone ): ?>
    <div class="c-stones__item c-stones__item--big" id="stone-1"
         style="top: <?= $stone['top'] ?>%;"
         data-bottom-top="top: <?= $stone['top'] ?>%; <?= !empty($stone['edge']) ? 'right: '.$stone['edge'].'px' : 'right: 0' ?>" data-top-bottom="top:<?= $stone['top'] / $stone['scroll'] ?>%;">
      <img src="<?= $stone['image'] ?>"  style="right: <?= $stone['image-position'] ?>px" />
    </div>
  <?php endforeach; ?>


</div>