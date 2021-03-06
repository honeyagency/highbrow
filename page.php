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
 * /mytheme/views/page-mypage.twig
 * (which will still route through this PHP file)
 * OR
 * /mytheme/page-mypage.php
 * (in which case you'll want to duplicate this file and save to the above path)
 *
 * Methods for TimberHelper can be found in the /lib sub-directory
 *
 * @package  WordPress
 * @subpackage  Timber
 * @since    Timber 0.1
 */

$context           = Timber::get_context();
$post              = new TimberPost();
$context['post']   = $post;
$context['header'] = prepareHeaderFields();
if (is_front_page() == true) {
    $context['home'] = prepareHomePageFields();
} elseif (is_page(10)) {
    $context['services'] = prepareServices();
    if (!empty($_GET["service"])) {
        $context['current'] = $_GET["service"];
    } else {
        $context['current'] = null;
    }
} elseif (is_page(12)) {
    $context['meet'] = prepareMeetKristene();
} elseif (is_page(14)) {
    $context['portfolio'] = preparePortfolio();
} elseif (is_page(16)) {
    $context['apts'] = prepareAppointmentsPage();
}
$instagramTag = get_field('field_59c2f8b94fa85', 'option');

if ($instagramTag != null) {
    $context['instagram'] = filter_instagram_results($instagramTag, null);
} else {
    $context['instagram'] = $instagramCachedResults;
}

Timber::render(array('page-' . $post->post_name . '.twig', 'page.twig'), $context);
