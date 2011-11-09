<?php
/**
 * Preprocessor for theme('page').
 * All Rubik Subthemes must implement this
 */
function re_rubik_preprocess_page(&$vars) {
  global $theme;
  if ($theme === 're_rubik') {
    _rubik_local_tasks($vars);
  }
}