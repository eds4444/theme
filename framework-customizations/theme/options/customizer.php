<?php if (!defined( 'FW' )) die('Forbidden');

$options = array(
    'body-color' => array(
        'type' => 'color-picker',
        'label' => __('Цвет фона', '{domain}'),
        'value' => '#ADFF2F',
    ),
    'about-text' => array(
        'type'  => 'textarea',
        'value' => 'Значение по умолчанию',
        'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
        'label' => __('Текст о компании', '{domain}'),
        'desc'  => __('Напишите сюда текст', '{domain}'),
        'help'  => __('Help tip', '{domain}'),
    )

);
