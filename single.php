<?php
/**
 * The Template for displaying all single posts
 *
 * Methods for TimberHelper can be found in the /lib sub-directory
 *
 * @package  WordPress
 * @subpackage  Timber
 * @since    Timber 0.1
 */

$context                 = Timber::get_context();
$post                    = Timber::query_post();
$context['post']         = $post;
$context['comment_form'] = TimberHelper::get_comment_form();\
$tag                     = get_field('field_59c2f8b94fa85', 'option');
if (!empty($tag)) {
    $instaresults = filter_instagram_results($tag, null);
} else {
    $instaresults = $instagramCachedResults;
}

$context['instagram'] = $instaresults;
if (post_password_required($post->ID)) {
    Timber::render('single-password.twig', $context);
} else {
    Timber::render(array('single-' . $post->ID . '.twig', 'single-' . $post->post_type . '.twig', 'single.twig'), $context);
}
