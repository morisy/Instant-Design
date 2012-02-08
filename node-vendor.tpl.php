<div id="node-<?php print $node->nid; ?>" class="node<?php if ($sticky) { print ' sticky'; } ?><?php if (!$status) { print ' node-unpublished'; } ?> clear-block">

<?php if ($page == 0): ?>
  <h2><a href="<?php print $node_url ?>" title="<?php print $title ?>"><?php print $title ?></a></h2>
<?php endif; ?>

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
	
<div class="content">
<div style="float:left;
	margin-right: 1em;
        margin-bottom: 1.5em;">

<?php if ($node->field_vendorpic[0]): ?>
     <?php print theme(
          'imagefield_image',
          $node->field_vendorpic[0],
          $node->field_vendorpic[0]["alt"],
          $node->field_vendorpic[0]["title"]);
     ?>
<?php endif; ?>
</div>
<?php print $node->field_bioteaser[0]['view'] ?>

<script type="text/javascript">
function toggleBlock(id, linkid) {
if (document.getElementById(id).style.display == 'none') {
document.getElementById(id).style.display = 'block';
document.getElementById(linkid).innerHTML = 'HIDE TEXT'
} else {
document.getElementById(id).style.display = 'none';
document.getElementById(linkid).innerHTML = 'Click here to show more text.'
}
}
</script>

<div>
<a href="javascript:void(0)" onClick="toggleBlock('below', 'linkid');" id="linkid">Continued</a>
</div>
<div id="below" style="display:none; ">
<?php print $node->field_bio[0]['view'] ?>
</div>

</div>



<?php
  if ($links) {
    print '<div class="node-links">'. $links .'</div>';
  }
?>

</div>