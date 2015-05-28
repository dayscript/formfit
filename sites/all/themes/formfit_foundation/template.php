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
  switch ($form_id) {
    case 'search_block_form':
      $form['actions']['submit']['#attributes']['class'][] = 'fi-magnifying-glass large';
    break;
    case 'webform_client_form_78':
      $form['actions']['submit']['#attributes']['class'][] = 'fi-play medium';
      $form['actions']['submit']['#value'] = '';
    break;
    default:
      # code...
    break;
  }
  if(strpos($form_id, 'commerce_cart_add_to_cart_form_') !== false){
    $form['submit']['#attributes']['class'] = array('fi-shopping-cart');
    $form['submit']['#value'] = '';

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
