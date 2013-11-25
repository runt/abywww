<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
      <div id="abybanner">
	  <!-- na nemeckem uvodu bude slide show -->
	  <?php if ($language=="de"): ?>
	  <div id="slideshow">
	    <div id="slides">
		<div class="slides_container">
		    <img src="<?php print base_path() . drupal_get_path('theme', 'corporate') . '/images/slide-image-1.jpg'; ?>" height="200px"/>
		    <img src="<?php print base_path() . drupal_get_path('theme', 'corporate') . '/images/slide-image-2.jpg'; ?>" height="200px"/>
		    <img src="<?php print base_path() . drupal_get_path('theme', 'corporate') . '/images/slide-image-3.jpg'; ?>" height="200px"/>
		</div>
		<div class="slides_nav">
		    <a href="#" class="prev"></a>
		    <a href="#" class="next"></a>
		</div>
		</div>
	    </div>
	  <?php endif; ?>
      </div>
