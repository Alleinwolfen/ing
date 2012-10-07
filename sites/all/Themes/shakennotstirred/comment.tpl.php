<?php
// $Id: comment.tpl.php,v 1.3 2010/03/23 11:03:52 adciservercom Exp $
?>
  <div class="comment<?php print ' '. $status; ?>">
    <?php if ($picture) {
    print $picture;
  } ?>
<h3 class="title"><?php print $title; ?></h3><?php if ($new != '') { ?><span class="new"><?php print $new; ?></span><?php } ?>
    
    <div class="content">
     <?php print $content; ?>
     <?php if ($signature): ?>
      <div class="clear-block">
       <div>—</div>
       <?php print $signature ?>
      </div>
     <?php endif; ?>
    </div>
	<div class="submitted"><?php print $submitted; ?></div>
    <div class="links"><?php print $links; ?></div>
  </div>
