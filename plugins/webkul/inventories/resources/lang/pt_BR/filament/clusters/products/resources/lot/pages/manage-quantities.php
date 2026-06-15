<?php

return [
    'title' => 'Localizações',

    'table' => [
        'columns' => [
            'product'          => 'Produto',
            'location'         => 'Localização',
            'storage-category' => 'Storage Categoria',
            'quantity'         => 'Quantidade',
            'package'          => 'Pacote',
            'on-hand'          => 'Disponível Quantidade',
            'unit'             => 'Unidade',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Quantidade excluído',
                    'body'  => 'A Quantidade foi excluído com sucesso.',
                ],
            ],
        ],
    ],
];
