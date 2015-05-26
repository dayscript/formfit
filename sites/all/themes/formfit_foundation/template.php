<?php

/**
 * Implements template_preprocess_html().
 */
function formfit_foundation_preprocess_html(&$variables) {
}

/**
 * Implements template_preprocess_page.
 */
function formfit_foundation_preprocess_page(&$variables) {
}

/**
 * Implements template_preprocess_node.
 */
function formfit_foundation_preprocess_node(&$variables) {
}

/**
 * Implements form_alter
 */
function formfit_form_alter(&$form, &$form_state, $form_id) {
  if ($form_id = 'search_block_form') {
    $form['actions']['submit']['#attributes']['class'][] = 'fi-magnifying-glass large';
  }
}
/**
 * [formfit_foundation_process_field description]
 * @param  [type] &$vars [description]
 * @return [type]        [description]
 */
function formfit_foundation_process_field(&$vars) {
  $element = $vars['element'];
  // Field type image
  if ($element['#field_type'] == 'image') {

    // Reduce number of images in teaser view mode to single image
    if ($element['#view_mode'] == 'line_item') {
      $item = reset($vars['items']);
      $vars['items'] = array($item);
    }

  }

}
