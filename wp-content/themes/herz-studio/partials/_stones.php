<?php


function cp( $position ) {
  $h = 2924;

  return ( $position / $h ) * 100;
}

$stones_raw = rwmb_meta( 'stones' );
$stones     = [];

foreach ( $stones_raw['stone-left'] as $s ) {
  $stones['left'][] = array(
    'top'            => ! empty( $s['top'] ) ? $s['top'] : null,
    'edge'           => ! empty( $s['left'] ) ? $s['left'] : null,
    'image-position' => ! empty( $s['left-image'] ) ? $s['left-image'] : null,
    'scroll'         => ! empty( $s['scroll'] ) ? $s['scroll'] : null,
    'image'          =>
      wp_get_attachment_image_url( $s['image'][0], 'full' ),
    'z-index' => (!empty($s['z-index']) && $s['z-index'] == 'under') ? 1: 3
  );
}
foreach ( $stones_raw['stone-right'] as $s ) {
  $stones['right'][] = array(
    'top'            => ! empty( $s['top'] ) ? $s['top'] : null,
    'edge'           => ! empty( $s['right'] ) ? $s['right'] : null,
    'image-position' => ! empty( $s['right-image'] ) ? $s['right-image'] : null,
    'scroll'         => ! empty( $s['scroll'] ) ? $s['scroll'] : null,
    'image'          =>
      wp_get_attachment_image_url( $s['image'][0], 'full' ),
    'z-index' => (!empty($s['z-index']) && $s['z-index'] == 'under') == 'under' ? 1: 3
  );
}


?>


<?php foreach ( $stones['left'] as $stone ): ?>
  <div class="c-stones__item c-stones__item--big c-stones__item--left js-stones__item" id="stone-1"
       style="top: <?= $stone['top'] ?>%; z-index: <?= $stone['z-index'] ?>;"
       data-bottom-top="top:<?= $stone['top'] ?>%" data-top-bottom="top: <?= $stone['top'] / $stone['scroll'] ?>%"
       data-start="<?= $stone['top'] ?>" data-stop="<?= $stone['top'] / $stone['scroll'] ?>"
       data-scroll="<?= $stone['scroll'] ?>">
    <div class="c-stones__item-wrapper" style="left: <?= $stone['edge'] ?>px;">

      <img src="<?= $stone['image'] ?>" style="left: <?= $stone['image-position'] ?>px"/>
    </div>
  </div>
<?php endforeach; ?>

<?php foreach ( $stones['right'] as $stone ): ?>
  <div class="c-stones__item c-stones__item--big c-stones__item--right js-stones__item" id="stone-1"
       style="top: <?= $stone['top'] ?>%; z-index: <?= $stone['z-index'] ?>;"
       data-bottom-top="top:<?= $stone['top'] ?>%" data-top-bottom="top: <?= $stone['top'] / $stone['scroll'] ?>%"
       data-start="<?= $stone['top'] ?>" data-stop="<?= $stone['top'] / $stone['scroll'] ?>"
       data-scroll="<?= $stone['scroll'] ?>">
    <div class="c-stones__item-wrapper" style="right: <?= $stone['edge'] ?>px;">

      <img src="<?= $stone['image'] ?>" style="right: <?= $stone['image-position'] ?>px"/>
    </div>
  </div>
<?php endforeach; ?>
