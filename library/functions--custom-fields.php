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
