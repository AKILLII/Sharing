<?php
/**
 * The template for displaying the header
 *
 * @package Vtrois
 * @version 2.3
 */
?><!DOCTYPE HTML>
<html class="no-js">
	<head>
		<title><?php wp_title( '-', true, 'right' ); ?></title>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta name="description" content="<?php kratos_description(); ?>" />
		<meta name="keywords" content="<?php kratos_keywords();?>" />
        <link href="https://xxxxx/xxxxxxx/snow.css" rel="stylesheet"/>
		<?php wp_head(); ?>
		<?php wp_print_scripts('jquery'); ?>
		<?php if ( kratos_option('site_bw')==1 ) : ?>
			<style type="text/css">html{filter: grayscale(100%);-webkit-filter: grayscale(100%);-moz-filter: grayscale(100%);-ms-filter: grayscale(100%);-o-filter: grayscale(100%);filter: progid:DXImageTransform.Microsoft.BasicImage(grayscale=1);filter: gray;-webkit-filter: grayscale(1); }
			</style>
		<?php endif; ?>
	</head>
