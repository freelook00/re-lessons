<?php

$form =
    [
        'tagName' => 'div',
        'class' => 'mydiv1',
        'elements' =>
        [
            [
                'tagName'   => 'form',
                'action'    => 'index.php',
                'method'    => 'post',
                'id'        => 'form1',
                'elements'  => [
                    [
                        'tagName'   => 'div',
                        'class'     => 'forminput',
                        'elements'  => [
                            ['tagName' => 'input', 'type' => 'text', 'name' => 'inp1', 'class' => 'inputbox' ]
                        ],
                    ],
                    [
                        'tagName'   => 'div',
                        'class'     => 'forminput',
                        'elements'  => [
                            ['tagName' => 'input', 'type' => 'text', 'name' => 'inp2', 'class' => 'inputbox' ]
                        ],
                    ],
                    [
                        'tagName'   => 'div',
                        'class'     => 'forminput',
                        'elements'  => [
                            [
                                'tagName' => 'select',
                                'name' => 'sel1',
                                'class' => 'selectbox',
                                'elements'  => [
                                    [ 'tagName' => 'option', 'value' => '1', 'innerHTML' => 'значение 1' ],
                                    [ 'tagName' => 'option', 'value' => '2', 'innerHTML' => 'значение 2' ],
                                    [ 'tagName' => 'option', 'value' => '3', 'innerHTML' => 'значение 3' ],
                                    [ 'tagName' => 'option', 'value' => '4', 'innerHTML' => 'значение 4' ],
                                ],
                            ]
                        ],
                    ],
                    [
                        'tagName'   => 'div',
                        'class'     => 'forminput',
                        'elements'  => [
                            ['tagName' => 'input', 'type' => 'text', 'name' => 'inp2', 'class' => 'inputbox' ]
                        ],
                    ],
                    [
                        'tagName'   => 'div',
                        'class'     => 'forminput',
                        'elements'  => [
                            ['tagName' => 'input', 'type' => 'submit', 'value' => 'Отправить' ]
                        ],
                    ],
                ]
            ],
        ]
    ];

echo json_encode( $form );

?>
