<?php
/**
 * @file
 * media_ckeditor_extras_features.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function media_ckeditor_extras_features_ctools_plugin_api($module = NULL, $api = NULL) {
  if ($module == "field_group" && $api == "field_group") {
    return array("version" => "1");
  }
  if ($module == "linkit" && $api == "linkit_profiles") {
    return array("version" => "1");
  }
}