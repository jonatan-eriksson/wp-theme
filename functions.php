<?php
function addStyleSheets(): void
{
  $version = wp_get_theme()->get('Version');
  wp_enqueue_style('style', get_stylesheet_uri(), array('bootstrap'), $version, 'all');
  wp_enqueue_style('bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css", array(), '5.0.0', 'all');
}
add_action('wp_enqueue_scripts', 'addStyleSheets');

function addScripts(): void
{
  wp_enqueue_script('bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js", array(), '5.0.0', true);
}
add_action('wp_enqueue_scripts', 'addScripts');

function addMenus()
{
  $locations = array(
    'header' => "Header menu",
  );

  register_nav_menus($locations);
}
add_action('init', 'addMenus');
