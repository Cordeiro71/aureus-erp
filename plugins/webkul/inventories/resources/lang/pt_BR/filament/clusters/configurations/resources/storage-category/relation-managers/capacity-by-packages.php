<?php

return [
    'title' => 'Capacidade Por Pacotes',

    'form' => [
        'package-type' => 'Tipo de pacote',
        'qty'          => 'Quantidade',
    ],

    'table' => [
        'header-actions' => [
            'create' => [
                'label' => 'Adicionar capacidade de tipo de pacote',

                'notification' => [
                    'title' => 'Tipo de pacote Capacidade criado',
                    'body'  => 'The tipo de pacote capacidade been added successfully.',
                ],
            ],
        ],

        'columns' => [
            'package-type' => 'Tipo de pacote',
            'qty'          => 'Quantidade',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Tipo de pacote Capacidade atualizado',
                    'body'  => 'A Tipo de pacote capacidade foi atualizada com sucesso.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Tipo de pacote Capacidade excluído',
                    'body'  => 'A Tipo de pacote capacidade foi excluído com sucesso.',
                ],
            ],
        ],
    ],
];
