<?php
/**
 * The Template for displaying all single elementor_library posts.
 *
 * @package Vikinger
 */

get_header();

while (have_posts()) {
  the_post();

  // Elementor page template
  if (vikinger_plugin_elementor_is_active() && vikinger_is_elementor_page()) {
    the_content();
  } else {
    get_template_part('template-parts/content/content', 'none');
  }
}

get_footer();
