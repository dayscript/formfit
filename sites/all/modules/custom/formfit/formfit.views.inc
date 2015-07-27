<?php

  function formfit_views_query_alter(&$view, &$query) {

    if ( !isset($_SESSION) ) { session_start(); }

    $productCompare = isset($_SESSION['productCompare']) ? $_SESSION['productCompare'] : array();
    if ( $view->display_handler->display->id === 'page_compare' ) {
      $query->where[1]['conditions'][2] = array(
          'field'    => 'node.nid',
          'value'    => $productCompare,
          'operator' => 'in'
      );
    }

  }
?>
