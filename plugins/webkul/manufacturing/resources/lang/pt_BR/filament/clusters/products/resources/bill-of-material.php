<?php

return [
    'navigation' => [
        'title' => 'Listas de materiais',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title'  => 'Geral',
                'fields' => [
                    'reference'             => 'Referência',
                    'reference-placeholder' => 'eg. LDM-001',
                    'product'               => 'Produto',
                    'product-variant'       => 'Produto Variante',
                    'quantity'              => 'Quantidade',
                    'uom'                   => 'UOM',
                    'operation-type'        => 'Operação Tipo',
                    'company'               => 'Empresa',
                    'type'                  => 'Tipo de ldm',
                ],
            ],
            'miscellaneous' => [
                'title'  => 'Miscellaneous',
                'fields' => [
                    'kit-information'                         => 'Kit Information',
                    'kit-information-content'                 => 'Uma ldm em kit é usada para agrupar componentes para transferências ou vendas, em vez de ser produzida através de uma ordem de produção.',
                    'manufacturing-lead-time'                 => 'Manufatura Lead Hora',
                    'days-to-prepare-manufacturing-order'     => 'Dias para prepare Manufatura Pedido',
                    'days-suffix'                             => 'dias',
                ],
            ],
        ],
        'tabs' => [
            'components' => [
                'title'      => 'Components',
                'add-action' => 'Adicionar uma linha',
                'columns'    => [
                    'component'              => 'Component',
                    'apply-on-variants'      => 'Aplicar nas variantes',
                    'consumed-in-operation'  => 'Consumed in Operação',
                    'highlight-consumption'  => 'Highlight Consumption',
                    'quantity'               => 'Quantidade',
                    'uom'                    => 'Produto Unidade de medida',
                ],
                'validation' => [
                    'component-different-from-product' => 'The component must be different de the produto being manufactured.',
                ],
                'create-form' => [
                    'fields' => [
                        'name'            => 'Nome',
                        'type'            => 'Tipo',
                        'category'        => 'Categoria',
                        'company'         => 'Empresa',
                        'uom'             => 'UOM',
                        'uom-placeholder' => 'UOM',
                    ],
                ],
            ],
            'operations' => [
                'title'      => 'Operações',
                'add-action' => 'Adicionar uma linha',
                'actions'    => [
                    'edit'                 => 'Editar Operação',
                    'copy-existing'        => 'Copiar Existing Operações',
                    'copy-existing-fields' => [
                        'operation' => 'Operação',
                    ],
                ],
                'columns'    => [
                    'operation'        => 'Operação',
                    'work-center'      => 'Centro de trabalho',
                    'time-mode'        => 'Duration Computation',
                    'time-mode-batch'  => 'Computed ligado último',
                    'company'          => 'Empresa',
                    'apply-on-variants'=> 'Aplicar nas variantes',
                    'duration'         => 'Duration (minutos)',
                ],
            ],
            'by-products' => [
                'title'      => 'Por-produtos',
                'add-action' => 'Adicionar uma linha',
                'columns'    => [
                    'product'   => 'Por-produto',
                    'quantity'  => 'Quantidade',
                    'uom'       => 'Unidade de medida',
                    'operation' => 'Produced in Operação',
                ],
            ],
            'miscellaneous' => [
                'title'  => 'Miscellaneous',
                'fields' => [
                    'ready-to-produce'       => 'Manufatura Readiness',
                    'routing'                => 'Routing',
                    'consumption'            => 'Flexible Consumption',
                    'operation-dependencies' => 'Operação Dependências',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'reference'  => 'Referência',
            'product'    => 'Produto',
            'quantity'   => 'Quantidade',
            'uom'        => 'UOM',
            'type'       => 'Tipo de ldm',
            'company'    => 'Empresa',
            'deleted-at' => 'Excluído em',
            'updated-at' => 'Atualizado em',
        ],
        'filters' => [
            'product' => 'Produto',
            'type'    => 'Tipo de ldm',
            'company' => 'Empresa',
        ],
        'actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Lista de materiais restaurado',
                    'body'  => 'O Lista de materiais foi restaurado com sucesso.',
                ],
            ],
            'delete' => [
                'notification' => [
                    'title' => 'Lista de materiais arquivado',
                    'body'  => 'O Lista de materiais foi arquivado com sucesso.',
                ],
            ],
            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Lista de materiais excluído',
                        'body'  => 'The lista de materiais has been permanently deleted.',
                    ],
                    'error' => [
                        'title' => 'Lista de materiais could não be excluído',
                        'body'  => 'The lista de materiais cannot be deleted because it is currently in use.',
                    ],
                ],
            ],
        ],
        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Contas a pagar de material restaurado',
                    'body'  => 'The selected contas a pagar de material have been restored successfully.',
                ],
            ],
            'delete' => [
                'notification' => [
                    'title' => 'Contas a pagar de material arquivado',
                    'body'  => 'The selected contas a pagar de material have been arquivado successfully.',
                ],
            ],
            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Contas a pagar de material excluído',
                        'body'  => 'The selected contas a pagar de material have been permanently deleted.',
                    ],
                    'error' => [
                        'title' => 'Contas a pagar de material could não be excluído',
                        'body'  => 'One ou more selected contas a pagar de material are currently in use.',
                    ],
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title'   => 'Informações gerais',
                'entries' => [
                    'reference'      => 'Referência',
                    'product'        => 'Produto',
                    'product-variant'=> 'Produto Variante',
                    'quantity'       => 'Quantidade',
                    'uom'            => 'UOM',
                    'operation-type' => 'Operação Tipo',
                    'company'        => 'Empresa',
                    'type'           => 'Tipo de ldm',
                ],
            ],
            'record-information' => [
                'title'   => 'Record Information',
                'entries' => [
                    'created-by'   => 'Criado por',
                    'created-at'   => 'Criado em',
                    'last-updated' => 'Último atualizado',
                ],
            ],
        ],
        'tabs' => [
            'components' => [
                'title'   => 'Components',
                'entries' => [
                    'component' => 'Component',
                    'operation' => 'Operação',
                    'quantity'  => 'Quantidade',
                    'uom'       => 'Produto Unidade de medida',
                ],
            ],
            'operations' => [
                'title'   => 'Operações',
                'entries' => [
                    'operation'   => 'Operação',
                    'work-center' => 'Centro de trabalho',
                    'time-mode'   => 'Duration Computation',
                    'duration'    => 'Duration (minutos)',
                ],
            ],
            'by-products' => [
                'title'   => 'Por-produtos',
                'entries' => [
                    'product'   => 'Por-produto',
                    'quantity'  => 'Quantidade',
                    'uom'       => 'Unidade de medida',
                    'operation' => 'Produced in Operação',
                ],
            ],
            'miscellaneous' => [
                'title'   => 'Miscellaneous',
                'entries' => [
                    'kit-information'                         => 'Kit Information',
                    'kit-information-content'                 => 'Uma ldm em kit é usada para agrupar componentes para transferências ou vendas, em vez de ser produzida através de uma ordem de produção.',
                    'ready-to-produce'                        => 'Manufatura Readiness',
                    'routing'                                 => 'Routing',
                    'consumption'                             => 'Flexible Consumption',
                    'operation-dependencies'                  => 'Operação Dependências',
                    'manufacturing-lead-time'                 => 'Manufatura Lead Hora',
                    'days-to-prepare-manufacturing-order'     => 'Dias para prepare Manufatura Pedido',
                    'days-suffix'                             => 'dias',
                ],
            ],
        ],
    ],
];
