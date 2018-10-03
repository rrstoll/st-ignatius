<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * To generate specific templates for your pages you can use:
 * /mytheme/templates/page-mypage.twig
 * (which will still route through this PHP file)
 * OR
 * /mytheme/page-mypage.php
 * (in which case you'll want to duplicate this file and save to the above path)
 *
 *
 * @package  WordPress
 * @subpackage  Timber
 * @since    Timber 0.1
 */

$context = Timber::get_context();
$post = new Timber\Post();
$context['post'] = $post;
// Get all categories assigned to post
$categories = $post->terms( 'category' );
// Get only the first category from the array
$context['category'] = reset( $categories );
// Define generic templates.
$templates = array(
	'page-' . $post->post_name . '.twig',
	'page-' . $post->ID . '.twig',
	'page.twig'
);
// Set the Homepage template.
if ( is_front_page()){
	// get latest three posts
    $args = array(
		'posts_per_page' => 6,
		'post_type' => 'post',
		'meta_query' => array(
			‘relation’ => ‘OR’,
			array(
				'key' => 'featured_item',
				'value' => '1',
				'compare' => 'LIKE'
			)
		)
	);
	$context['posts'] = Timber::get_posts($args);

	// get non-feature posts
    $args2 = array(
		'posts_per_page' => 10,
		'post_type' => 'post',
		'meta_query' => array(
			‘relation’ => ‘OR’,
			array(
				'key' => 'featured_item',
				'value' => '1',
				'compare' => 'NOT LIKE'
			)
		)
	);
	$context['news'] = Timber::get_posts($args2);

	array_unshift( $templates, 'front-page.twig' );
}

// Render twig template.
if ( post_password_required( $post->ID ) ) {
	Timber::render( 'components/password-form.twig', $context );
} else {
	Timber::render( $templates, $context );
}
