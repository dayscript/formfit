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
    case 'comment_node_product_display_form':
    $form['subject']['#attributes']['placeholder'][] = t('Title comment');
    $form['author']['name']['#attributes']['placeholder'][] = $form['author']['name']['#title'];
    $form['comment_body']['und'][0]['#attributes']['placeholder']= $form['comment_body']['und'][0]['#title'];
    $form['subject']['#title']= '';
    $form['author']['name']['#title'] = '';
    $form['comment_body']['und'][0]['#title'] = '';

    break;
    default:
      # code...
    break;
  }
  if(strpos($form['#action'], 'catalogo')!== false){
    if(strpos($form_id, 'commerce_cart_add_to_cart_form_') !== false){
      $uri = $_SERVER['HTTP_HOST'] . '/' . request_uri();
      $positions = explode("/", $uri);
      $last_position = array_pop($positions);
      $form['submit']['#attributes']['class'] = array('fi-shopping-cart');
      if($last_position=='catalogo'){
        $form['submit']['#value'] = t('');
      }
    }
    if(strpos($form_id, 'properties_compare_add_form_commerce_product')){

    }
  }else{
    if(strpos($form_id, 'commerce_cart_add_to_cart_form_') !== false){
      $form['submit']['#attributes']['class'] = array('fi-shopping-cart');
      $form['submit']['#value'] = '';
    }
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
/**
 * [formfit_preprocess_comment description]
 * @param  [type] &$variables [description]
 * @return [type]             [description]
 */
function formfit_preprocess_comment(&$variables){
  $comment = $variables['elements']['#comment'];
  $node = $variables['elements']['#node'];
  $variables['created']   = format_date($comment->created, 'custom', 'F d \d\e Y');
  $variables['changed']   = format_date($comment->changed, 'custom', 'F d \d\e Y');
  $variables['submitted'] = t('!username - !datetime', array('!username' => $variables['author'], '!datetime' => $variables['created']));
}
