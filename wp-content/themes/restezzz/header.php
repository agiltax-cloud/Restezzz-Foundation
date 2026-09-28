<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<a class="skip-link" href="#main"><?php esc_html_e('Skip to content', 'restezzz'); ?></a>
<header class="site-header">
  <div class="re-container">
    <?php the_custom_logo(); ?>
    <nav aria-label="<?php esc_attr_e('Primary navigation', 'restezzz'); ?>">
      <?php wp_nav_menu(['theme_location'=>'primary','container'=>false,'fallback_cb'=>false]); ?>
    </nav>
  </div>
</header>
