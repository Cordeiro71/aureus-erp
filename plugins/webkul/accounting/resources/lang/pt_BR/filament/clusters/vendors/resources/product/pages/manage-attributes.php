<?php

return [
    'title' => 'Atributos',

    'form' => [
        'attribute' => 'Atributo',
        'values'    => 'Valores',
    ],

    'table' => [
        'description' => 'Aviso: adding ou deleting atributos will excluir e recreate existing variantes e lead para the loss de their possible customizations.',

        'header-actions' => [
            'create' => [
                'label' => 'Adicionar atributo',

                'notification' => [
                    'title' => 'Atributo criado',
                    'body'  => 'O Atributo foi criado com sucesso.',
                ],
            ],
        ],

        'columns' => [
            'attribute' => 'Atributo',
            'values'    => 'Valores',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Atributo atualizado',
                    'body'  => 'O Atributo foi atualizado com sucesso.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Atributo excluído',
                    'body'  => 'O Atributo foi excluído com sucesso.',
                ],
            ],
        ],
    ],
];
