<?php
add_action('init', 'add_acf_option_page_support');

function add_acf_option_page_support() {
  if(function_exists('acf_add_options_page')) {
    acf_add_options_page();
  }
}