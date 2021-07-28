<?php if (!defined( 'FW' )) die('Forbidden');

$options = array(
        'about-text' => array(
        'type'  => 'textarea',
        'value' => 'Значение по умолчанию',
        'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
        'label' => __('Текст о компании', '{domain}'),
        'desc'  => __('Напишите сюда текст', '{domain}'),
        'help'  => __('Help tip', '{domain}'),
    )
);
