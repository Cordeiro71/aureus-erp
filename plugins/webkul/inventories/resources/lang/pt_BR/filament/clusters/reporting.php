<?php

return [
    'navigation' => [
        'title' => 'Reporting',
        'group' => 'Estoque',
    ],

    'moves' => [
        'navigation' => [
            'title' => 'Movimentos Histórico',
        ],

        'filters' => [
            'product-category'     => 'Produto Categoria',
            'source-location'      => 'Origem Localização',
            'destination-location' => 'Destino Localização',
            'package'              => 'Pacote',
            'lot'                  => 'Lote/Número de série',
            'package-type'         => 'Tipo de pacote',
        ],

        'groups' => [
            'product'   => 'Produto',
            'status'    => 'Status',
            'date'      => 'Data',
            'operation' => 'Operação',
            'location'  => 'Localização',
            'category'  => 'Categoria',
        ],
    ],

    'quantities' => [
        'navigation' => [
            'title' => 'Localizações',
        ],

        'filters' => [
            'warehouse'        => 'Armazém',
            'location'         => 'Localização',
            'product-category' => 'Produto Categoria',
            'storage-category' => 'Storage Categoria',
            'package'          => 'Pacote',
            'lot'              => 'Lote/Número de série',
            'package-type'     => 'Tipo de pacote',
        ],

        'groups' => [
            'product'          => 'Produto',
            'product-category' => 'Produto Categoria',
            'location'         => 'Localização',
            'storage-category' => 'Storage Categoria',
            'lot'              => 'Lote/Número de série',
            'package'          => 'Pacote',
            'company'          => 'Empresa',
        ],
    ],
];
