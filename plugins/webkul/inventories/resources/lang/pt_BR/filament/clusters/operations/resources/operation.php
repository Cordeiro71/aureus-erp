<?php

return [
    'navigation' => [
        'title' => 'Produtos',
        'group' => 'Estoque',
    ],

    'global-search' => [
        'partner' => 'Parceiro',
        'origin'  => 'Origem',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title' => 'Geral',

                'fields' => [
                    'receive-from'         => 'Receive De',
                    'contact'              => 'Contato',
                    'delivery-address'     => 'Entrega Endereço',
                    'operation-type'       => 'Operação Tipo',
                    'source-location'      => 'Origem Localização',
                    'destination-location' => 'Destino Localização',
                ],
            ],
        ],

        'tabs' => [
            'operations' => [
                'title' => 'Operações',

                'columns' => [
                    'product'                    => 'Produto',
                    'final-location'             => 'Final Localização',
                    'description'                => 'Descrição',
                    'scheduled-at'               => 'Scheduled At',
                    'deadline'                   => 'Prazo',
                    'packaging'                  => 'Embalagem',
                    'demand'                     => 'Demand',
                    'quantity'                   => 'Quantidade',
                    'insufficient-stock-tooltip' => 'Insufficient quantidade disponível',
                    'unit'                       => 'Unidade',
                    'picked'                     => 'Picked',
                ],

                'fields' => [
                    'product'        => 'Produto',
                    'final-location' => 'Final Localização',
                    'description'    => 'Descrição',
                    'scheduled-at'   => 'Scheduled At',
                    'deadline'       => 'Prazo',
                    'packaging'      => 'Embalagem',
                    'demand'         => 'Demand',
                    'quantity'       => 'Quantidade',
                    'unit'           => 'Unidade',
                    'picked'         => 'Picked',

                    'lines' => [
                        'modal-heading' => 'Manage Estoque Movimentos',
                        'add-line'      => 'Adicionar linha',

                        'fields' => [
                            'lot'       => 'Lote/Número de série',
                            'pick-from' => 'Pick De',
                            'location'  => 'Store Para',
                            'package'   => 'Destino Pacote',
                            'quantity'  => 'Quantidade',
                            'uom'       => 'Unidade de medida',
                        ],
                    ],
                ],
            ],

            'additional' => [
                'title' => 'Adicional',

                'fields' => [
                    'responsible'                  => 'Responsible',
                    'shipping-policy'              => 'Shipping Policy',
                    'shipping-policy-hint-tooltip' => 'It defines whether goods should be entregue partially ou todos at once.',
                    'scheduled-at'                 => 'Scheduled At',
                    'scheduled-at-hint-tooltip'    => 'The scheduled hora para processing the primeiro part de the shipment. Manually configuração a valor here will aplicar it as the expected data para todos estoque movimentos.',
                    'source-document'              => 'Origem Document',
                    'source-document-hint-tooltip' => 'Referência de the document',
                ],
            ],

            'note' => [
                'title' => 'Nota',

                'fields' => [

                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'favorite'        => 'Favorito',
            'reference'       => 'Referência',
            'from'            => 'De',
            'to'              => 'Para',
            'contact'         => 'Contato',
            'responsible'     => 'Responsible',
            'scheduled-at'    => 'Scheduled At',
            'deadline'        => 'Prazo',
            'closed-at'       => 'Fechado At',
            'source-document' => 'Origem Document',
            'operation-type'  => 'Operação Tipo',
            'company'         => 'Empresa',
            'state'           => 'State',
            'deleted-at'      => 'Excluído em',
            'created-at'      => 'Criado em',
            'updated-at'      => 'Atualizado em',
        ],

        'groups' => [
            'state'           => 'State',
            'source-document' => 'Origem Document',
            'operation-type'  => 'Operação Tipo',
            'scheduled-at'    => 'Schedule At',
            'created-at'      => 'Criado em',
        ],

        'filters' => [
            'name'                 => 'Nome',
            'state'                => 'State',
            'partner'              => 'Parceiro',
            'responsible'          => 'Responsible',
            'owner'                => 'Owner',
            'source-location'      => 'Origem Localização',
            'destination-location' => 'Destino Localização',
            'deadline'             => 'Prazo',
            'scheduled-at'         => 'Scheduled At',
            'closed-at'            => 'Fechado At',
            'created-at'           => 'Criado em',
            'updated-at'           => 'Atualizado em',
            'company'              => 'Empresa',
            'creator'              => 'Creator',
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title'   => 'Informações gerais',
                'entries' => [
                    'contact'              => 'Contato',
                    'operation-type'       => 'Operação Tipo',
                    'source-location'      => 'Origem Localização',
                    'destination-location' => 'Destino Localização',
                ],
            ],
        ],

        'tabs' => [
            'operations' => [
                'title'   => 'Operações',
                'entries' => [
                    'product'        => 'Produto',
                    'final-location' => 'Final Localização',
                    'description'    => 'Descrição',
                    'scheduled-at'   => 'Scheduled At',
                    'deadline'       => 'Prazo',
                    'packaging'      => 'Embalagem',
                    'demand'         => 'Demand',
                    'quantity'       => 'Quantidade',
                    'unit'           => 'Unidade',
                    'picked'         => 'Picked',
                ],
            ],
            'additional' => [
                'title'   => 'Informações adicionais',
                'entries' => [
                    'responsible'     => 'Responsible',
                    'shipping-policy' => 'Shipping Policy',
                    'scheduled-at'    => 'Scheduled At',
                    'source-document' => 'Origem Document',
                ],
            ],
            'note' => [
                'title' => 'Nota',
            ],
        ],
    ],

    'tabs' => [
        'todo'        => 'Para Do',
        'my'          => 'My Transferênciaências',
        'starred'     => 'Starred',
        'draft'       => 'Rascunho',
        'waiting'     => 'Waiting',
        'ready'       => 'Ready',
        'done'        => 'Concluído',
        'canceled'    => 'Cancelado',
        'back-orders' => 'Ordens pendentes',
    ],

    'notifications' => [
        'uom-precision-warning' => [
            'title' => 'Unidade de medida Precisão Aviso',
            'body'  => 'You are using a unidade de medida menor than the one used para estoque este produto. Este can lead para rounding issues ligado reservado quantidades. Consider using the smallest unidade de medida para estoque valuation, ou reduce the rounding precisão de your base unidade.',
        ],
    ],
];
