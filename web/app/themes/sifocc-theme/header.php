<!DOCTYPE html>
<!--[if lt IE 9]>
<html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 9]><!-->
<html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <title>
        <?php if (is_front_page()) : ?>
            SIFoCC | <?php bloginfo('name'); ?>
        <?php else : ?>
            <?php wp_title(' | ', 'echo', 'right'); ?><?php bloginfo('name'); ?>
        <?php endif; ?>
    </title>
    <meta name="description" content="<?php bloginfo('description'); ?>"/>

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<!--[if lt IE 9]>
<div class="alert"><p><?php _e('You are using an <strong>outdated</strong> browser. Please <a
        href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'roots'); ?></p></div>
<![endif]-->

<?php get_template_part('partials/global-header'); ?>

<main class="main" role="main">