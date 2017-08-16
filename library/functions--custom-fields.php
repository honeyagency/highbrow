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
