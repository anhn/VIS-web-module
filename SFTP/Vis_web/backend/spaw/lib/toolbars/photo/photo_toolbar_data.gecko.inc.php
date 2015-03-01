<?php 
// ================================================
// SPAW PHP WYSIWYG editor control
// ================================================
// Default toolbar data file
// ================================================
// Developed: Alan Mendelevich, alan@solmetra.lt
// Copyright: Solmetra (c)2003 All rights reserved.
// ------------------------------------------------
//                                www.solmetra.com
// ================================================
// v.1.0, 2003-03-22
// ================================================

// array to hold toolbar definitions
// first dimension - toolbar location (top, left, right, bottom)
// second dimension - toolbar row/column
// third dimension - settings/data
// fourth dimension - setting/toolbar item
// toolbar item: name - item name, type - item type (button, dropdown, separator, etc.)

$spaw_toolbar_data = array(
  'top_design' => array(
      array(
        'settings' => array(
          'align' => 'left',
          'valign' => 'top'
        ),//setting
        'data' => array (
            array(
              'name' => 'image_insert',
              'type' => SPAW_TBI_BUTTON
            ),
            array(
              'name' => 'image_prop',
              'type' => SPAW_TBI_BUTTON
            ),
        ) // data
      ),
  ),
);
?>
