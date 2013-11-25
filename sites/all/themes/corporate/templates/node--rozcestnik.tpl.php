<?php
/**
 * @file
 * Default theme implementation to display a node.
 *
 * Available variables:
 * - $title: the (sanitized) title of the node.
 * - $content: An array of node items. Use render($content) to print them all, or
 *   print a subset such as render($content['field_example']). Use
 *   hide($content['field_example']) to temporarily suppress the printing of a
 *   given element.
 * - $user_picture: The node author's picture from user-picture.tpl.php.
 * - $date: Formatted creation date. Preprocess functions can reformat it by
 *   calling format_date() with the desired parameters on the $created variable.
 * - $name: Themed username of node author output from theme_username().
 * - $node_url: Direct url of the current node.
 * - $terms: the themed list of taxonomy term links output from theme_links().
 * - $display_submitted: whether submission information should be displayed.
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. The default values can be one or more of the following:
 *   - node: The current template type, i.e., "theming hook".
 *   - node-[type]: The current node type. For example, if the node is a
 *     "Blog entry" it would result in "node-blog". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - node-teaser: Nodes in teaser form.
 *   - node-preview: Nodes in preview mode.
 *   The following are controlled through the node publishing options.
 *   - node-promoted: Nodes promoted to the front page.
 *   - node-sticky: Nodes ordered above other non-sticky nodes in teaser listings.
 *   - node-unpublished: Unpublished nodes visible only to administrators.
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 *
 * Other variables:
 * - $node: Full node object. Contains data that may not be safe.
 * - $type: Node type, i.e. story, page, blog, etc.
 * - $comment_count: Number of comments attached to the node.
 * - $uid: User ID of the node author.
 * - $created: Time the node was published formatted in Unix timestamp.
 * - $classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 * - $zebra: Outputs either "even" or "odd". Useful for zebra striping in
 *   teaser listings.
 * - $id: Position of the node. Increments each time it's output.
 *
 * Node status variables:
 * - $view_mode: View mode, e.g. 'full', 'teaser'...
 * - $teaser: Flag for the teaser state (shortcut for $view_mode == 'teaser').
 * - $page: Flag for the full page state.
 * - $promote: Flag for front page promotion state.
 * - $sticky: Flags for sticky post setting.
 * - $status: Flag for published status.
 * - $comment: State of comment settings for the node.
 * - $readmore: Flags true if the teaser content of the node cannot hold the
 *   main body content.
 * - $is_front: Flags true when presented in the front page.
 * - $logged_in: Flags true when the current user is a logged-in member.
 * - $is_admin: Flags true when the current user is an administrator.
 *
 * Field variables: for each field instance attached to the node a corresponding
 * variable is defined, e.g. $node->body becomes $body. When needing to access
 * a field's raw values, developers/themers are strongly encouraged to use these
 * variables. Otherwise they will have to explicitly specify the desired field
 * language, e.g. $node->body['en'], thus overriding any language negotiation
 * rule that was previously applied.
 *
 * @see template_preprocess()
 * @see template_preprocess_node()
 * @see template_process()
 * <?php print render($title_prefix); ?>
 */
?>
<?php if (!$page): ?>
  <article id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
<?php endif; ?>
    <?php if (!$page): ?>
      <header>
	<?php endif; ?>
      
      <?php if (!$page): ?>
      <h2 class="title" <?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
      <?php endif; ?>
      <?php print render($title_suffix); ?>
  
      <?php if ($display_submitted): ?>
        <span class="submitted"><?php print $submitted; ?></span>
      <?php endif; ?>

    <?php if (!$page): ?>
      </header>
  <?php endif; ?>

  <div class="content"<?php print $content_attributes; ?>>
      <div id="ikonovyrozcestnik">
	  <div class="horizontalnecentrovany">
	      <div>
		  <a href="<?php echo $content['field_tryskani_link']['#items'][0]['url']; ?>"><?php print render($content['field_tryskani_ikona']); ?></a>
	      </div>
	      <div class="rozcestnik_operace_odkaz">
		  <a href="<?php echo $content['field_tryskani_link']['#items'][0]['url']; ?>"><?php echo $content['field_tryskani_link']['#items'][0]['title']; ?></a>
	      </div>
	  </div>

	  <div class="horizontalnecentrovanysipka">
	      <?php print render($content['field_sipka_dalsi_ikona']); ?>
	  </div>
	  
	  <div class="horizontalnecentrovany">
	      <div>
		  <a href="<?php echo $content['field_brouseni_link']['#items'][0]['url']; ?>"><?php print render($content['field_brouseni_ikona']); ?></a>
	      </div>
	      <div class="rozcestnik_operace_odkaz">
		  <a href="<?php echo $content['field_brouseni_link']['#items'][0]['url']; ?>"><?php echo $content['field_brouseni_link']['#items'][0]['title']; ?></a>
	      </div>
	  </div>

	  <div class="horizontalnecentrovanysipka">
	      <?php print render($content['field_sipka_dalsi_ikona']); ?>
	  </div>
	  
	  <div class="horizontalnecentrovany">
	      <div>
		  <a href="<?php echo $content['field_finalni_link']['#items'][0]['url']; ?>"><?php print render($content['field_finlani_ikona']); ?></a>
	      </div>
	      <div class="rozcestnik_operace_odkaz">
		  <a href="<?php echo $content['field_finalni_link']['#items'][0]['url']; ?>"><?php echo $content['field_finalni_link']['#items'][0]['title']; ?></a>
	      </div>
	  </div>

	  <div class="horizontalnecentrovanysipka">
	      <?php print render($content['field_sipka_dalsi_ikona']); ?>
	  </div>
	  
	  <div class="horizontalnecentrovany">
	      <div>
		  <a href="<?php echo $content['field_kontrola_link']['#items'][0]['url']; ?>"><?php print render($content['field_kontrola_ikona']); ?></a>
	      </div>
	      <div class="rozcestnik_operace_odkaz">
		  <a href="<?php echo $content['field_kontrola_link']['#items'][0]['url']; ?>"><?php echo $content['field_kontrola_link']['#items'][0]['title']; ?></a>
	      </div>
	  </div>

	  <div class="horizontalnecentrovanysipka">
	      <?php print render($content['field_sipka_dalsi_ikona']); ?>
	  </div>

	  <div class="horizontalnecentrovany">
	      <div>
		  <a href="<?php echo $content['field_logistika_link']['#items'][0]['url']; ?>"><?php print render($content['field_logistika_ikona']); ?></a>
	      </div>
	      <div class="rozcestnik_operace_odkaz">
		  <a href="<?php echo $content['field_logistika_link']['#items'][0]['url']; ?>"><?php echo $content['field_logistika_link']['#items'][0]['title']; ?></a>
	      </div>
	  </div>
      </div>

      <div id="dvojtext">
	  <div id="kdojsme">
	      <?php print render($content['field_kdo_jsme_nadpis']); ?>	  
	      <?php print render($content['field_kdo_jsme_text']); ?>	  
	  </div>
	  <div id="conabizime">
	      <?php print render($content['field_co_nab_z_me_nadpis']); ?>	  
	      <?php print render($content['field_co_nab_z_me_text']); ?>	  
	  </div>
      </div>
  </div>
  
<?php if (!$page): ?>
  </article> <!-- /.node -->
<?php endif; ?>
