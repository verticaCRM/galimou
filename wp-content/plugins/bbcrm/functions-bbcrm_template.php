<?php

if(!function_exists('wpp_css')):

  /**
   * It returns specific classes for element.
   * This function is just wrapper.
   * See: WPP_F::get_css_classes();
   *
   * @param type $element [required] It's used for determine which classes should be filtered.
   * It can be set of template and element: "{template}::{element}"
   * @param array $classes [optional] Set of classes
   * @param boolean $return [optional] If false, prints classes. If true returns array of classes
   * @param array $args [optional] Any set of additional arguments which can be needed.
   * @return array|echo
   * @author peshkov@UD
   * @version 0.1
   */
  function wpp_css($element, $classes = false, $return = false, $args = array()) {
    $args = array_merge((array)$args, array(
      'instance' => 'wpp',
      'element' => $element,
      'classes' => $classes,
      'return' => $return,
    ));
    if(is_callable(array('WPP_F','get_css_classes'))) {
      return WPP_F::get_css_classes($args);
    }
    return false;
  }

endif;
?>
