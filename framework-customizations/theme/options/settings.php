<?php if (!defined( 'FW' )) die('Forbidden');

$options = array(
    'body-color' => array(
        'type' => 'color-picker',
        'label' => __('Цвет фона', '{domain}'),
        'value' => '#ADFF2F',
    ),
    'phone-number' => array(
        'type' => 'text',
        'label' => __('Телефон на сайте ', '{domain}'),
        'value' => '8 (800) 123-45-66',
    ),
    'map' => array(
        'type'  => 'map',
        'value' => array(
            'coordinates' => array(
                'lat'   => -34,
                'lng'   => 150,
            )
        ),
        'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
        'label' => __('Map', '{domain}'),
        'desc'  => __('Description', '{domain}'),
        'help'  => __('Help tip', '{domain}'),
    )
    
);