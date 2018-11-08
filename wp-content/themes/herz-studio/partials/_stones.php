<?php


function cp( $position ) {
  $h = 2924;

  return ( $position / $h ) * 100;
}

$stones_raw = rwmb_meta( 'stones' );
$stones     = [];

foreach ( $stones_raw['stone-left'] as $s ) {
  $stones['left'][] = array(
    'top'    => !empty($s['top']) ? $s['top'] : null,
    'edge'   => !empty($s['left']) ? $s['left'] : null,
    'image-position' => !empty($s['left-image']) ? $s['left-image'] : null,
    'scroll' => !empty($s['scroll']) ? $s['scroll'] : null,
    'image'  =>
      wp_get_attachment_image_url( $s['image'][0], 'full' )
  );
}
foreach ( $stones_raw['stone-right'] as $s ) {
  $stones['right'][] = array(
    'top'    => !empty($s['top']) ? $s['top'] : null,
    'edge'   => !empty($s['right']) ? $s['right'] : null,
    'image-position' => !empty($s['right-image']) ? $s['right-image'] : null,
    'scroll' => !empty($s['scroll']) ? $s['scroll'] : null,
    'image'  =>
      wp_get_attachment_image_url( $s['image'][0], 'full' )
  );
}


?>

<div class="c-stones c-stones--left">

  <?php  foreach ( $stones['left'] as $stone ): ?>
    <div class="c-stones__item c-stones__item--big c-stones__item--left js-stones__item" id="stone-1"
         style="top: <?= $stone['top'] ?>%; left: <?= $stone['edge'] ?>;"
         data-bottom-top="top:<?=$stone['top']?>%" data-top-bottom="top: <?= $stone['top'] / $stone['scroll'] ?>%"
         data-start="<?= $stone['top'] ?>" data-stop="<?= $stone['top'] / $stone['scroll'] ?>" data-scroll="<?= $stone['scroll'] ?>">
      <img src="<?= $stone['image'] ?>" style="left: <?= $stone['image-position'] ?>px" />
    </div>
  <?php endforeach;  ?>

</div>
<?php /*
<div class="c-stones c-stones--right">

  <?php foreach ( $stones['right'] as $stone ): ?>
    <div class="c-stones__item c-stones__item--big js-stones__item" id="stone-1"
         style="top: <?= $stone['top'] ?>%;"
         data-bottom-top="top: <?= $stone['top'] ?>%; <?= !empty($stone['edge']) ? 'right: '.$stone['edge'].'px' : 'right: 0' ?>" data-top-bottom="top:<?= $stone['top'] / $stone['scroll'] ?>%;">
      <img src="<?= $stone['image'] ?>"  style="right: <?= $stone['image-position'] ?>px" />
    </div>
  <?php endforeach; ?>


</div>
 */ ?>