<?php
  function _formfit_compare(){
    return theme('formfit_compare', array());
  }
  /**
   *
   * formfit_callback( $projectId, $action ).
   *
   * @param int $projectId with the node id project.
   *
   */

  function formfit_product_add( $projectId ) {

    if ( !isset($_SESSION) ) { session_start(); }

    $productCompare = isset($_SESSION['productCompare']) ? $_SESSION['productCompare'] : array();

    $productCompare[] = $projectId;
    $_SESSION['productCompare'] = $productCompare;

    if ( count($productCompare) === 4 ) {

      $attributes =  array(
    'attributes' => array(
        'class'=> array('link-compare', 'disable' )
    )
      );

    } else {

      $attributes = array(
    'attributes' => array(
        'class'=> array('link-compare', 'disable', 'use-ajax' )
    )
      );

    }

    $commands[] = ajax_command_html('.content-compare', l(t('+ comparar'), 'formfit-compare/add/'. $projectId . '', $attributes));
    $commands[] = ajax_command_html('.content-link-redirect', l(t('Lista de comparación (@count) >', array('@count' => count($productCompare))), 'comparar', array('attributes' => array('class' => array('link-list-compare')))));

    ajax_deliver( array('#type' => 'ajax', '#commands' => $commands) );

  }

  function formfit_product_remove( $nId ) {

    if ( !isset($_SESSION) ) { session_start(); }

    $productCompare = isset($_SESSION['productCompare']) ? $_SESSION['productCompare'] : array();

    unset( $productCompare[ array_search($nId, $productCompare) ] );

    $productCompare             = array_values( $productCompare );
    $_SESSION['productCompare'] = $productCompare;

    $commands[] = ajax_command_remove('.project-' . $nId );

    ajax_deliver( array('#type' => 'ajax', '#commands' => $commands) );
  }
?>
