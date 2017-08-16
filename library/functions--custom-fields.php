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
    $home = array(
        'intro' => $intro,
    );
    return $home;
}
