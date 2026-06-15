<?php

return [
    'navigation' => [
        'title' => 'Regras',
        'group' => 'Armazém Management',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title'  => 'Geral',

                'fields' => [
                    'name'                        => 'Nome',
                    'action'                      => 'Ação',
                    'operation-type'              => 'Operação Tipo',
                    'source-location'             => 'Origem Localização',
                    'destination-location'        => 'Destino Localização',
                    'supply-method'               => 'Supply Method',
                    'supply-method-hint-tooltip'  => 'Take De Estoque: Produtos are sourced directly de the disponível estoque in the origem localização.<br/>Trigger Outro Regra: The sistema ignores disponível estoque e searches para a estoque regra para replenish the origem localização.<br/>Take De Estoque, if Indisponível, Trigger Outro Regra: Produtos are primeiro taken de disponível estoque. If nenhum is disponível, the sistema applies a estoque regra para bring produtos into the origem localização.',
                    'automatic-move'              => 'Movimento automático',
                    'automatic-move-hint-tooltip' => 'Manual Operação: Creates a separate estoque movimento depois the atual one.<br/>Automático sem etapa adicionada: Directly replaces the localização in the original movimento sem adding an extra step.',

                    'action-information' => [
                        'pull'        => 'When produtos are obrigatório in <b>:sourceLocation</b>, :operação is generated de <b>:destinationLocation</b> para meet the demand.',
                        'push'        => 'When produtos reach <b>:sourceLocation</b>,</br><b>:operação</b> is generated para transferência them para <b>:destinationLocation</b>.',
                        'buy'         => 'When produtos are needed in <b>:destinationLocation</b>, a request para cotação is created para fulfill the need.',
                        'manufacture' => 'When produtos are needed in <b>:destinationLocation</b>, a manufatura pedido is created para fulfill the need.',
                    ],
                ],
            ],

            'settings' => [
                'title'  => 'Configurações',

                'fields' => [
                    'partner-address'              => 'Parceiro Endereço',
                    'partner-address-hint-tooltip' => 'Endereço onde as mercadorias devem ser entregues. opcional.',
                    'lead-time'                    => 'Lead Hora (Dias)',
                    'lead-time-hint-tooltip'       => 'The expected transferência data will be calculated using este lead hora.',
                ],

                'fieldsets' => [
                    'applicability' => [
                        'title'  => 'Aplicabilidade',

                        'fields' => [
                            'route'   => 'Rota',
                            'company' => 'Empresa',
                        ],
                    ],

                    'propagation' => [
                        'title'  => 'Propagation',

                        'fields' => [
                            'propagation-procurement-group'              => 'Propagation de Procurement Grupo',
                            'propagation-procurement-group-hint-tooltip' => 'If selected, canceling the movimento criado por este regra will also cancelar the subsequent movimento.',
                            'cancel-next-move'                           => 'Cancelar Próximo Movimento',
                            'warehouse-to-propagate'                     => 'Armazém para Propagate',
                            'warehouse-to-propagate-hint-tooltip'        => 'The armazém atribuído a the created movimento ou procurement, which maio differ de the armazém este regra applies para (e.g., para resupply regras de outro armazém).',
                        ],
                    ],
                ],

            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'                 => 'Nome',
            'action'               => 'Ação',
            'source-location'      => 'Origem Localização',
            'destination-location' => 'Destino Localização',
            'route'                => 'Rota',
            'deleted-at'           => 'Excluído em',
            'created-at'           => 'Criado em',
            'updated-at'           => 'Atualizado em',
        ],

        'groups' => [
            'action'               => 'Ação',
            'source-location'      => 'Origem Localização',
            'destination-location' => 'Destino Localização',
            'route'                => 'Rota',
            'created-at'           => 'Criado em',
            'updated-at'           => 'Atualizado em',
        ],

        'filters' => [
            'action'               => 'Ação',
            'source-location'      => 'Origem Localização',
            'destination-location' => 'Destino Localização',
            'route'                => 'Rota',
            'company'              => 'Empresa',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Regra atualizado',
                    'body'  => 'A Regra foi atualizada com sucesso.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => 'Regra restaurado',
                    'body'  => 'A Regra foi restaurada com sucesso.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Regra excluído',
                    'body'  => 'A Regra foi excluído com sucesso.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Regra excluído definitivamente',
                        'body'  => 'A Regra foi excluído definitivamente com sucesso.',
                    ],

                    'error' => [
                        'title' => 'Regra could não be excluído',
                        'body'  => 'The regra cannot be deleted because it is currently in use.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Regras restaurado',
                    'body'  => 'O Regras foi restaurado com sucesso.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Regras excluído',
                    'body'  => 'O Regras foi excluído com sucesso.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Regras excluído definitivamente',
                        'body'  => 'O Regras foi excluído definitivamente com sucesso.',
                    ],

                    'error' => [
                        'title' => 'Regras could não be excluído',
                        'body'  => 'The regras cannot be deleted because they are currently in use.',
                    ],
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title' => 'Regra Detalhes',

                'description' => [
                    'pull' => 'When produtos are obrigatório in <b>:sourceLocation</b>, <b>:operação</b> is generated de <b>:destinationLocation</b> para meet the demand.',
                    'push' => 'When produtos reach in <b>:sourceLocation</b>, <b>:operação</b> is generated para transferência them para <b>:destinationLocation</b>.',
                ],

                'entries' => [
                    'name'                 => 'Regra Nome',
                    'action'               => 'Ação',
                    'operation-type'       => 'Operação Tipo',
                    'source-location'      => 'Origem Localização',
                    'destination-location' => 'Destino Localização',
                    'route'                => 'Rota',
                    'company'              => 'Empresa',
                    'partner-address'      => 'Parceiro Endereço',
                    'lead-time'            => 'Lead Hora',
                    'action-information'   => 'Informação da ação',
                ],
            ],

            'record-information' => [
                'title' => 'Record Information',

                'entries' => [
                    'created-by'   => 'Criado por',
                    'created-at'   => 'Criado em',
                    'last-updated' => 'Último atualizado',
                ],
            ],
        ],
    ],
];
