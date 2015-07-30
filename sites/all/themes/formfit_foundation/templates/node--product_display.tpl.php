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
 */
$content['field_product']['#label_display'] = 'hidden';
?>
<article id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?>"<?php print $attributes; ?>>
  <span class="title large-7 columns">
    <?php print $node->title;?>
  </span>
  <div class="large-12 columns body-product-container">
    <div class="large-7 columns">
      <div class="image-product">
      <?php print render ($content['product:field_image']);?>
      </div>
    </div>
    <div class="large-5 columns">
      <div class="votes"><?php print render($content['product:field_votes']);?></div>
      <div class="comment-count">
        <?php print render($node->comment_count) . ' ' . t('Coments');?>
      </div>
      <div class="summary">
        <?php print render($node->body['und'][0]['summary']); ?>
      </div>
      <div class="services">
        <div><?php print t('Services:');?></div>
        <?php foreach ($content['product:field_servicios']['#items'] as $key => $value) {?>
          <?php $term = taxonomy_term_load($value['tid']);?>
          <div class="services-tooltip">
            <span style="background-color:<?php print $term->field_color_taxonomy['und'][0]['rgb']?>"><?php print $term->field_abreviacion['und'][0]['value'];?></span>
            <div class="tooltip-none"><?php print $term->name;?></div>
          </div>

        <?php }?>
      </div>
      <div class="price-product">
        <?php print render($content['product:commerce_price']);?>
      </div>
      <div class="add-product">
        <?php print render($content['field_product']);?>
      </div>
      <div class="compare-product">
        <?php  print l(t('›‹ comparar'), 'formfit-compare/add/'. arg(1) . '', array('attributes' => array('class' => array('link-compare', 'active', 'use-ajax'))));?>
      </div>
      <div class="rs-product">
        <div class="addthis_toolbox" addthis:url="<?php print url(NULL, array('absolute' => TRUE)) . current_path();?>"
                    addthis:title='<?php print render($content['product:title']);?>'>
          <a class="addthis_button_facebook addthis_button_preferred_1"></a>
          <a class="addthis_button_email"></a>
          <a class="addthis_button_twitter"></a>
          <a class="addthis_button_print"></a>
          <a class="addthis_button_compact"></a>
        </div>
      </div>
    </div>
    <div class="large-12 columns">
      <ul class="tabs" data-tab role="tablist">
        <li class="tab-title active" role="presentational" >
          <a href="#panel2-1" role="tab" tabindex="0" aria-selected="true" controls="panel2-1">
            <?php print t('Description'); ?>
          </a>
        </li>
        <li class="tab-title" role="presentational" >
          <a href="#panel2-2" role="tab" tabindex="0" aria-selected="false" controls="panel2-2">
            <?php print t('Comments');?>
          </a>
        </li>
      </ul>
      <div class="tabs-content">
        <section role="tabpanel" aria-hidden="false" class="content active" id="panel2-1">
          <h2><?php print render($node->body['und'][0]['value']); ?></h2>
        </section>
        <section role="tabpanel" aria-hidden="true" class="content" id="panel2-2">
          <h2><?php print render($content['comments']); ?></h2>
        </section>
      </div>
    </div>
  </div>
</article>
