<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="<?php bloginfo( 'template_url' ); ?>/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/lightbox.css">
    <link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/fontawesome-all.min.css">
    <link href="<?php bloginfo( 'template_url' ); ?>/css/styles.css" rel="stylesheet">
    <title><?php wp_title( '|', true,'right' ); ?> <?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
