<?php if (!defined( 'FW' )) die('Forbidden');

$options = array(
    'description' => array(
        'type' => 'box',
        'options' => array(
            'phone-number'  => array( 
                'type' => 'text',
                'label' => 'Телефонный номер'
            ),
        ),
        'title' => __('ВВедите данные', '{domain}'),
        'attr' => array('class' => 'custom-class', 'data-foo' => 'bar'),
    
        /**
         * When used in Post Options on the first array level
         * the ``box`` container accepts additional parameters
         */
        'context' => 'side',
        //'priority' => 'default|high|core|low',
    ),

);