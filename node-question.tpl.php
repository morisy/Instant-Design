<div id="node-<?php print $node->nid; ?>" class="node<?php if ($sticky) { print ' sticky'; } ?><?php if (!$status) { print ' node-unpublished'; } ?> clear-block">

<?php if ($submitted || $terms): ?>
  <div class="meta">
  <?php if ($submitted): ?>
    <div class="submitted"><?php print $submitted ?></div>
  <?php endif; ?>

  <?php if ($terms): ?>
    <div class="terms"><?php print $terms ?></div>
  <?php endif;?>
  </div>
<?php endif; ?>

  <div class="content clear-block">
    <?php print $picture ?>
    <?php print $content ?>
  </div>

<?php
  if ($links) {
    print '<div class="node-links">'. $links .'</div>';
  }
?>

</div>