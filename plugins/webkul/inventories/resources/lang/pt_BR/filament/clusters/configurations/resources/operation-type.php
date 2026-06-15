<?php

return [
    'navigation' => [
        'title' => 'Operação Tipos',
        'group' => 'Armazém Management',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'fields' => [
                    'operator-type'             => 'Operação Tipo',
                    'operator-type-placeholder' => 'eg. Receptions',
                ],
            ],

            'applicable-on' => [
                'title'       => 'Aplicável em',
                'description' => 'Selecionar the places where este rota can be selected.',

                'fields' => [
                ],
            ],
        ],

        'tabs' => [
            'general' => [
                'title'  => 'Geral',

                'fields' => [
                    'operator-type'                      => 'Operação Tipo',
                    'sequence-prefix'                    => 'Sequence Prefix',
                    'generate-shipping-labels'           => 'Gerar Shipping Labels',
                    'warehouse'                          => 'Armazém',
                    'show-reception-report'              => 'Mostrar Reception Relatório at Validation',
                    'show-reception-report-hint-tooltip' => 'If selected, the sistema will automatically display the reception relatório upon validation, provided there are movimentos para allocate.',
                    'company'                            => 'Empresa',
                    'return-type'                        => 'Return Tipo',
                    'create-backorder'                   => 'Criar Backorder',
                    'move-type'                          => 'Movimento Tipo',
                    'move-type-hint-tooltip'             => 'Unless defined por the origem document, este will serve as the padrão separação policy para este operação tipo.',
                ],

                'fieldsets' => [
                    'lots' => [
                        'title'  => 'Lotes/Números de série',

                        'fields' => [
                            'create-new'                => 'Criar Novo',
                            'create-new-hint-tooltip'   => 'If selected, the sistema will assume you intend para criar novo Lotes/Números de série, allowing you para enter them in a texto campo.',
                            'use-existing'              => 'Use Existing',
                            'use-existing-hint-tooltip' => 'If selected, you can choose the Lotes/Números de série ou opt não para atribuir any. Este allows estoque para be created sem a lote ou sem restrictions ligado the lote used.',
                        ],
                    ],

                    'locations' => [
                        'title'  => 'Localizações',

                        'fields' => [
                            'source-location'                   => 'Origem Localização',
                            'source-location-hint-tooltip'      => 'Este serves as the padrão origem localização when manually creating este operação. However, it can be changed depois, e rotas maio atribuir a different padrão localização.',
                            'destination-location'              => 'Destino Localização',
                            'destination-location-hint-tooltip' => 'Este is the padrão destino localização para manually created operações. However, it can be modified depois, e rotas maio atribuir a different padrão localização.',
                        ],
                    ],

                    'packages' => [
                        'title'  => 'Pacotes',

                        'fields' => [
                            'show-entire-package'              => 'Movimento Entire Pacote',
                            'show-entire-package-hint-tooltip' => 'If selected, you can movimento entire pacotes.',
                        ],
                    ],
                ],
            ],

            'hardware' => [
                'title'  => 'Hardware',

                'fieldsets' => [
                    'print-on-validation' => [
                        'title'  => 'Imprimir ligado Validation',

                        'fields' => [
                            'delivery-slip'              => 'Entrega Slip',
                            'delivery-slip-hint-tooltip' => 'If selected, the sistema will automatically imprimir the entrega slip when the separação is validated.',

                            'return-slip'              => 'Return Slip',
                            'return-slip-hint-tooltip' => 'If selected, the sistema will automatically imprimir the return slip when the separação is validated.',

                            'product-labels'              => 'Produto Labels',
                            'product-labels-hint-tooltip' => 'If selected, the sistema will automatically imprimir the produto labels when the separação is validated.',

                            'lots-labels'              => 'Lote/SN Labels',
                            'lots-labels-hint-tooltip' => 'If selected, the sistema will automatically imprimir the lote/número de série labels when the separação is validated.',

                            'reception-report'              => 'Reception Relatório',
                            'reception-report-hint-tooltip' => 'If selected, the sistema will automatically imprimir the reception relatório when the separação is validated e contém atribuído movimentos.',

                            'reception-report-labels'              => 'Reception Relatório Labels',
                            'reception-report-labels-hint-tooltip' => 'If selected, the sistema will automatically imprimir the reception relatório labels when the separação is validated.',

                            'package-content'              => 'Pacote Conteúdo',
                            'package-content-hint-tooltip' => 'If selected, the sistema will automatically imprimir the pacote detalhes e their contents when the separação is validated.',
                        ],
                    ],

                    'print-on-pack' => [
                        'title'  => 'Imprimir ligado "Put in Pack"',

                        'fields' => [
                            'package-label'              => 'Pacote Rótulo',
                            'package-label-hint-tooltip' => 'If selected, the sistema will automatically imprimir the pacote rótulo when the "Put in Pack" botão is used.',
                        ],
                    ],
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'       => 'Nome',
            'warehouse'  => 'Armazém',
            'company'    => 'Empresa',
            'deleted-at' => 'Excluído em',
            'created-at' => 'Criado em',
            'updated-at' => 'Atualizado em',
        ],

        'groups' => [
            'type'       => 'Tipo',
            'warehouse'  => 'Armazém',
            'created-at' => 'Criado em',
            'updated-at' => 'Atualizado em',
        ],

        'filters' => [
            'type'      => 'Tipo',
            'warehouse' => 'Armazém',
            'company'   => 'Empresa',
        ],

        'actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Operação Tipo restaurado',
                    'body'  => 'O Operação tipo foi restaurado com sucesso.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Operação Tipo excluído',
                    'body'  => 'O Operação tipo foi excluído com sucesso.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Operação Tipo excluído definitivamente',
                        'body'  => 'O Operação tipo foi excluído definitivamente com sucesso.',
                    ],

                    'error' => [
                        'title' => 'Operação Tipo could não be excluído',
                        'body'  => 'The operação tipo cannot be deleted because it is currently in use.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Operação Tipos restaurado',
                    'body'  => 'O Operação tipos foi restaurado com sucesso.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Operação Tipos excluído',
                    'body'  => 'O Operação tipos foi excluído com sucesso.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Operações Tipos excluído definitivamente',
                        'body'  => 'O Operação tipos foi excluído definitivamente com sucesso.',
                    ],

                    'error' => [
                        'title' => 'Operações Tipos could não be excluído',
                        'body'  => 'The operação tipos cannot be deleted because they are currently in use.',
                    ],
                ],
            ],
        ],

        'empty-actions' => [
            'create' => [
                'label' => 'Criar Operação Tipo',
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title' => 'Informações gerais',

                'entries' => [
                    'name' => 'Nome',
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

        'tabs' => [
            'general' => [
                'title' => 'Geral',

                'entries' => [
                    'type'                       => 'Operação Tipo',
                    'sequence_code'              => 'Sequence Code',
                    'print_label'                => 'Imprimir Rótulo',
                    'warehouse'                  => 'Armazém',
                    'reservation_method'         => 'Reservation Method',
                    'auto_show_reception_report' => 'Mostrar automaticamente relatório de recebimento',
                    'company'                    => 'Empresa',
                    'return_operation_type'      => 'Return Operação Tipo',
                    'create_backorder'           => 'Criar Backorder',
                    'move_type'                  => 'Movimento Tipo',
                ],

                'fieldsets' => [
                    'lots' => [
                        'title' => 'Lotes',

                        'entries' => [
                            'use_create_lots'   => 'Use Criar Lotes',
                            'use_existing_lots' => 'Use Existing Lotes',
                        ],
                    ],

                    'locations' => [
                        'title' => 'Localizações',

                        'entries' => [
                            'source_location'      => 'Origem Localização',
                            'destination_location' => 'Destino Localização',
                        ],
                    ],
                ],
            ],
            'hardware' => [
                'title' => 'Hardware',

                'fieldsets' => [
                    'print_on_validation' => [
                        'title' => 'Imprimir ligado Validation',

                        'entries' => [
                            'auto_print_delivery_slip'           => 'Imprimir automaticamente recibo de entrega',
                            'auto_print_return_slip'             => 'Imprimir automaticamente recibo de devolução',
                            'auto_print_product_labels'          => 'Imprimir automaticamente etiquetas do produto',
                            'auto_print_lot_labels'              => 'Imprimir automaticamente etiquetas de lote',
                            'auto_print_reception_report'        => 'Imprimir automaticamente relatório de recebimento',
                            'auto_print_reception_report_labels' => 'Imprimir automaticamente etiquetas do relatório de recebimento',
                            'auto_print_packages'                => 'Imprimir automaticamente pacotes',
                        ],
                    ],

                    'print_on_pack' => [
                        'title' => 'Imprimir ligado Pack',

                        'entries' => [
                            'auto_print_package_label' => 'Imprimir automaticamente etiqueta do pacote',
                        ],
                    ],
                ],
            ],
        ],
    ],
];
