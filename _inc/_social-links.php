<?php  $odin_social = get_option( 'odin_social' ); ?>
<?php  if( $odin_social['yt'] !== '' ) { ?>
    <a href="<?php echo $odin_social['yt']; ?>" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a>
<?php } ?>
<?php  if( $odin_social['in'] !== '' ) { ?>
  <a href="<?php echo $odin_social['in']; ?>" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
<?php } ?>
<?php  if( $odin_social['ig'] !== '' ) { ?>
  <a href="<?php echo $odin_social['ig']; ?>" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
<?php } ?>
<?php  if( $odin_social['tt'] !== '' ) { ?>
  <a href="<?php echo $odin_social['tt']; ?>" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
<?php } ?>
<?php  if( $odin_social['fb'] !== '' ) { ?>
  <a href="<?php echo $odin_social['fb']; ?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
<?php } ?>
