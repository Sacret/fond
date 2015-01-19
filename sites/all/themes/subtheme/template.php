<?php

/**
 * @file
 * template.php
 */

function subtheme_preprocess_image_style(&$vars) {
  if (isset($vars['style_name']) && ($vars['style_name'] == 'object_300x200' || $vars['style_name'] == 'progs_image' || $vars['style_name'] ==  'gallery_image_full' || $vars['style_name'] ==  'portfolio_400_200')) {
    $vars['attributes']['class'][] = 'img-responsive'; // can be 'img-rounded', 'img-circle', or 'img-thumbnail'
  }
}
