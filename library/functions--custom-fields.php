<?php
function prepareOptions()
{
    $phone = array(
        'title' => get_field('field_59949e7fd1359', 'options'),
        'phone' => get_field('field_59949e69d1358', 'options'),
    );
    $contact = array(
        'title'     => get_field('field_59949ac16e4b9', 'options'),
        'link'      => get_field('field_59949ad46e4ba', 'options'),
        'link_text' => get_field('field_59949ae46e4bb', 'options'),
    );
    $hours = array(
        'title'   => get_field('field_59949cf4628de', 'options'),
        'content' => get_field('field_59949d07628df', 'options'),
    );
    $footer = array(
        'phone'   => $phone,
        'contact' => $contact,
        'address' => get_field('field_59949ce73de48', 'options'),
        'hours'   => $hours,
    );
    $options = array(
        'footer' => $footer,
    );
    return $options;
}
function prepareHeaderFields()
{
    $header = array(
        'alternative_title' => get_field('field_5994a4d6a01d8'),
        'title_location'    => get_field('field_5994a4dca01d9'),
    );
    return $header;
}
function prepareHomePageFields()
{
    $intro = array(
        'small_text'      => get_field('field_5994ae2f6414c'),
        'large_text'      => get_field('field_5994aed11cbdf'),
        'content'         => get_field('field_5994ae4c6414d'),
        'button_text'     => get_field('field_5994ae596414e'),
        'button_text_url' => get_field('field_5994ae726414f'),
    );
    $beforeId = get_field('field_5994cb6d1dab5');
    if ($beforeId != null) {
        $before = new TimberImage($beforeId);
    } else {
        $before = null;
    }
    $afterId = get_field('field_5994cb751dab6');
    if ($afterId != null) {
        $after = new TimberImage($afterId);
    } else {
        $after = null;
    }

    $about = array(
        'small_text'      => get_field('field_5994cb581dab2'),
        'large_text'      => get_field('field_5994cb5b1dab3'),
        'content'         => get_field('field_5994cb671dab4'),
        'before'          => $before,
        'after'           => $after,
        'button_text'     => get_field('field_5994cbc4d12cc'),
        'button_text_url' => get_field('field_5994cbc6d12cd'),
    );
    $meetId = get_field('field_5994cc43b7aef');
    if ($meetId != null) {
        $meetImage = new TimberImage($meetId);
    } else {
        $meetImage = null;
    }
    $meet = array(
        'small_text'      => get_field('field_5994cbf7b7aea'),
        'large_text'      => get_field('field_5994cbfab7aeb'),
        'content'         => get_field('field_5994cc19b7aec'),
        'button_text'     => get_field('field_5994cc28b7aee'),
        'button_text_url' => get_field('field_5994cc27b7aed'),
        'image'           => $meetImage,
    );
    $home = array(
        'intro' => $intro,
        'about' => $about,
        'meet'  => $meet,
    );
    return $home;
}

function prepareServices()
{

    // Get the service repeater (about three of these)
    if (have_rows('field_5995d29ce8345')) {
        $services = array();
        while (have_rows('field_5995d29ce8345')) {
            the_row();
            if (have_rows('field_5995d2afdfd57')) {
                $steps = array();
                while (have_rows('field_5995d2afdfd57')) {
                    the_row();
                    $steps[] = array(
                        'title'               => get_sub_field('field_5995d2bbdfd58'),
                        'icon_class'          => get_sub_field('field_5995d2cddfd59'),
                        'description_title'   => get_sub_field('field_5995d31adfd5a'),
                        'description_content' => get_sub_field('field_5995d337dfd5b'),
                    );
                }
            }

            $services[] = array(
                'small_title' => get_sub_field('field_5995d3574e497'),
                'large_title' => get_sub_field('field_5995d3664e498'),
                'description' => get_sub_field('field_5995d36f4e499'),
                'steps'       => $steps,
            );
        }
    }
    return $services;

}

function prepareMeetKristene()
{
    $intro = array(
        'small_text'      => get_field('field_59b0664a6c206'),
        'large_text'      => get_field('field_59b0664a6c212'),
        'content'         => get_field('field_59b0664a6c21d'),
        'button_text'     => get_field('field_59b0664a6c228'),
        'button_text_url' => get_field('field_59b0664a6c232'),
    );

    $meetGallery = get_field('field_59b067c6b46cf');

    if (!empty($meetGallery)) {
        foreach ($meetGallery as $image) {
            $gallery[] = new TimberImage($image['id']);
        }
    } else {
        $gallery = null;
    }
    $meet = array(
        'intro'   => $intro,
        'gallery' => $gallery,
    );

    return $meet;
}

function preparePortfolio()
{
    $intro = array(
        'small_text'      => get_field('field_59b06fe3afa0a'),
        'large_text'      => get_field('field_59b06fe3afa14'),
        'content'         => get_field('field_59b06fe3afa1e'),
        'button_text'     => get_field('field_59b06fe3afa29'),
        'button_text_url' => get_field('field_59b06fe3afa35'),
    );

    if (have_rows('field_59b071da818ef')) {
        $images = array();
        while (have_rows('field_59b071da818ef')) {
            the_row();
            $beforeId = get_sub_field('field_59b071e4818f0');
            if (!empty($beforeId)) {
                $beforeImage = new TimberImage($beforeId);
            } else {
                $beforeImage = null;
            }
            $afterId = get_sub_field('field_59b071f5818f1');
            if (!empty($afterId)) {
                $afterImage = new TimberImage($afterId);
            } else {
                $afterImage = null;
            }
            $images[] = array(
                'before' => $beforeImage,
                'after'  => $afterImage,
            );
        }
    }

    $portfolio = array(
        'intro'  => $intro,
        'images' => $images,

    );

    return $portfolio;
}
