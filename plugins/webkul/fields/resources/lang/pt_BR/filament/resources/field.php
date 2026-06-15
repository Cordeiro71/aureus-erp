<?php

return [
    'navigation' => [
        'title' => 'Personalizado Campos',
        'group' => 'Configurações',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'fields' => [
                    'name'              => 'Nome',
                    'code'              => 'code',
                    'code-helper-text'  => 'Code must iniciar com a letter ou underscore, e can only contain letters, numbers, e underscores.',
                ],
            ],

            'options' => [
                'title' => 'Opções',

                'fields' => [
                    'add-option' => 'Adicionar opção',
                ],
            ],

            'form-settings' => [
                'title' => 'Formulário Configurações',

                'field-sets' => [
                    'validations' => [
                        'title' => 'Validations',

                        'fields' => [
                            'validation'     => 'Validation',
                            'field'          => 'Campo',
                            'value'          => 'Valor',
                            'add-validation' => 'Adicionar validação',
                        ],
                    ],

                    'additional-settings' => [
                        'title' => 'Configurações adicionais',

                        'fields' => [
                            'setting'     => 'Configuração',
                            'value'       => 'Valor',
                            'color'       => 'Cor',
                            'add-setting' => 'Adicionar configuração',

                            'color-options' => [
                                'danger'    => 'Danger',
                                'info'      => 'Informação',
                                'primary'   => 'Primário',
                                'secondary' => 'Secundário',
                                'warning'   => 'Aviso',
                                'success'   => 'Sucesso',
                            ],

                            'grid-options' => [
                                'row'    => 'Linha',
                                'column' => 'Coluna',
                            ],

                            'input-modes' => [
                                'text'     => 'Texto',
                                'email'    => 'E-mail',
                                'numeric'  => 'Numérico',
                                'integer'  => 'Inteiro',
                                'password' => 'Senha',
                                'tel'      => 'Telephone',
                                'url'      => 'URL',
                                'color'    => 'Cor',
                                'none'     => 'Nenhum',
                                'decimal'  => 'Decimal',
                                'search'   => 'Buscar',
                                'url'      => 'URL',
                            ],
                        ],
                    ],
                ],

                'validations' => [
                    'common' => [
                        'gt'                   => 'Maior que',
                        'gte'                  => 'Maior ou igual a',
                        'lt'                   => 'Menor que',
                        'lte'                  => 'Menor ou igual a',
                        'max-size'             => 'Max Tamanho',
                        'min-size'             => 'Min Tamanho',
                        'multiple-of'          => 'Multiple De',
                        'nullable'             => 'Nullable',
                        'prohibited'           => 'Prohibited',
                        'prohibited-if'        => 'Prohibited If',
                        'prohibited-unless'    => 'Prohibited Unless',
                        'prohibits'            => 'Prohibits',
                        'required'             => 'Obrigatório',
                        'required-if'          => 'Obrigatório If',
                        'required-if-accepted' => 'Obrigatório If Aceito',
                        'required-unless'      => 'Obrigatório Unless',
                        'required-with'        => 'Obrigatório Com',
                        'required-with-all'    => 'Obrigatório Com Todos',
                        'required-without'     => 'Obrigatório Sem',
                        'required-without-all' => 'Obrigatório Sem Todos',
                        'rules'                => 'Personalizado Regras',
                        'unique'               => 'Unique',
                    ],

                    'text' => [
                        'alpha-dash'        => 'Alfa com traço',
                        'alpha-num'         => 'Alfanumérico',
                        'ascii'             => 'ASCII',
                        'doesnt-end-with'   => "Doesn't End Com",
                        'doesnt-start-with' => "Doesn't Iniciar Com",
                        'ends-with'         => 'Ends Com',
                        'filled'            => 'Filled',
                        'ip'                => 'IP',
                        'ipv4'              => 'IPv4',
                        'ipv6'              => 'IPv6',
                        'length'            => 'Length',
                        'mac-address'       => 'MAC Endereço',
                        'max-length'        => 'Max Length',
                        'min-length'        => 'Min Length',
                        'regex'             => 'Regex',
                        'starts-with'       => 'Starts Com',
                        'ulid'              => 'ULID',
                        'uuid'              => 'UUID',
                    ],

                    'textarea' => [
                        'filled'     => 'Filled',
                        'max-length' => 'Max Length',
                        'min-length' => 'Min Length',
                    ],

                    'select' => [
                        'different'  => 'Different',
                        'exists'     => 'Exists',
                        'in'         => 'In',
                        'not-in'     => 'Não In',
                        'same'       => 'Mesmo',
                    ],

                    'radio' => [],

                    'checkbox' => [
                        'accepted' => 'Aceito',
                        'declined' => 'Declined',
                    ],

                    'toggle' => [
                        'accepted' => 'Aceito',
                        'declined' => 'Declined',
                    ],

                    'checkbox-list' => [
                        'in'        => 'In',
                        'max-items' => 'Max Itens',
                        'min-items' => 'Min Itens',
                    ],

                    'datetime' => [
                        'after'           => 'Depois',
                        'after-or-equal'  => 'Posterior ou igual',
                        'before'          => 'Antes',
                        'before-or-equal' => 'Anterior ou igual',
                    ],

                    'editor' => [
                        'filled'     => 'Filled',
                        'max-length' => 'Max Length',
                        'min-length' => 'Min Length',
                    ],

                    'markdown' => [
                        'filled'     => 'Filled',
                        'max-length' => 'Max Length',
                        'min-length' => 'Min Length',
                    ],

                    'color' => [
                        'hex-color' => 'Hex Cor',
                    ],
                ],

                'settings' => [
                    'text' => [
                        'autocapitalize'    => 'Capitalização automática',
                        'autocomplete'      => 'Preenchimento automático',
                        'autofocus'         => 'Foco automático',
                        'default'           => 'Padrão Valor',
                        'disabled'          => 'Desativado',
                        'helper-text'       => 'Helper Texto',
                        'hint'              => 'Dica',
                        'hint-color'        => 'Dica Cor',
                        'hint-icon'         => 'Dica Icon',
                        'id'                => 'Id',
                        'input-mode'        => 'Entrada Modo',
                        'mask'              => 'Mask',
                        'placeholder'       => 'Espaço reservado',
                        'prefix'            => 'Prefix',
                        'prefix-icon'       => 'Prefix Icon',
                        'prefix-icon-color' => 'Prefix Icon Cor',
                        'read-only'         => 'Somente leitura',
                        'step'              => 'Step',
                        'suffix'            => 'Suffix',
                        'suffix-icon'       => 'Suffix Icon',
                        'suffix-icon-color' => 'Suffix Icon Cor',
                    ],

                    'textarea' => [
                        'autofocus'    => 'Foco automático',
                        'autosize'     => 'Redimensionamento automático',
                        'cols'         => 'Colunas',
                        'default'      => 'Padrão Valor',
                        'disabled'     => 'Desativado',
                        'helperText'   => 'Helper Texto',
                        'hint'         => 'Dica',
                        'hintColor'    => 'Dica Cor',
                        'hintIcon'     => 'Dica Icon',
                        'id'           => 'Id',
                        'placeholder'  => 'Espaço reservado',
                        'read-only'    => 'Somente leitura',
                        'rows'         => 'Linhas',
                    ],

                    'select' => [
                        'default'                   => 'Padrão Valor',
                        'disabled'                  => 'Desativado',
                        'helper-text'               => 'Helper Texto',
                        'hint'                      => 'Dica',
                        'hint-color'                => 'Dica Cor',
                        'hint-icon'                 => 'Dica Icon',
                        'id'                        => 'Id',
                        'loading-message'           => 'Carregando Mensagem',
                        'no-search-results-message' => 'Não Buscar Results Mensagem',
                        'options-limit'             => 'Opções Limite',
                        'preload'                   => 'Preload',
                        'searchable'                => 'Searchable',
                        'search-debounce'           => 'Buscar Debounce',
                        'searching-message'         => 'Searching Mensagem',
                        'search-prompt'             => 'Buscar Prompt',
                    ],

                    'radio' => [
                        'default'     => 'Padrão Valor',
                        'disabled'    => 'Desativado',
                        'helper-text' => 'Helper Texto',
                        'hint'        => 'Dica',
                        'hint-color'  => 'Dica Cor',
                        'hint-icon'   => 'Dica Icon',
                        'id'          => 'Id',
                    ],

                    'checkbox' => [
                        'default'     => 'Padrão Valor',
                        'disabled'    => 'Desativado',
                        'helper-text' => 'Helper Texto',
                        'hint'        => 'Dica',
                        'hint-color'  => 'Dica Cor',
                        'hint-icon'   => 'Dica Icon',
                        'id'          => 'Id',
                        'inline'      => 'Inline',
                    ],

                    'toggle' => [
                        'default'     => 'Padrão Valor',
                        'disabled'    => 'Desativado',
                        'helper-text' => 'Helper Texto',
                        'hint'        => 'Dica',
                        'hint-color'  => 'Dica Cor',
                        'hint-icon'   => 'Dica Icon',
                        'id'          => 'Id',
                        'off-color'   => 'Desligado Cor',
                        'off-icon'    => 'Desligado Icon',
                        'on-color'    => 'Ligado Cor',
                        'on-icon'     => 'Ligado Icon',
                    ],

                    'checkbox-list' => [
                        'bulk-toggleable'           => 'Bulk Toggleable',
                        'columns'                   => 'Colunas',
                        'default'                   => 'Padrão Valor',
                        'disabled'                  => 'Desativado',
                        'grid-direction'            => 'Grid Direction',
                        'helper-text'               => 'Helper Texto',
                        'hint'                      => 'Dica',
                        'hint-color'                => 'Dica Cor',
                        'hint-icon'                 => 'Dica Icon',
                        'id'                        => 'Id',
                        'max-items'                 => 'Max Itens',
                        'min-items'                 => 'Min Itens',
                        'no-search-results-message' => 'Não Buscar Results Mensagem',
                        'searchable'                => 'Searchable',
                    ],

                    'datetime' => [
                        'close-on-date-selection' => 'Fechar ligado Data Seleção',
                        'default'                 => 'Padrão Valor',
                        'disabled'                => 'Desativado',
                        'disabled-dates'          => 'Desativado Datas',
                        'display-format'          => 'Display Format',
                        'first-fay-of-week'       => 'Primeiro Dia de Semana',
                        'format'                  => 'Format',
                        'helper-text'             => 'Helper Texto',
                        'hint'                    => 'Dica',
                        'hint-color'              => 'Dica Cor',
                        'hint-icon'               => 'Dica Icon',
                        'hours-step'              => 'Horas Step',
                        'id'                      => 'Id',
                        'locale'                  => 'Locale',
                        'minutes-step'            => 'Minutos Step',
                        'seconds'                 => 'Segundos',
                        'seconds-step'            => 'Segundos Step',
                        'timezone'                => 'Fuso horário',
                        'week-starts-on-monday'   => 'Semana Starts ligado Segunda-feira',
                        'week-starts-on-sunday'   => 'Semana Starts ligado Domingo',
                    ],

                    'editor' => [
                        'default'      => 'Padrão Valor',
                        'disabled'     => 'Desativado',
                        'helper-text'  => 'Helper Texto',
                        'hint'         => 'Dica',
                        'hint-color'   => 'Dica Cor',
                        'hint-icon'    => 'Dica Icon',
                        'id'           => 'Id',
                        'placeholder'  => 'Espaço reservado',
                        'read-only'    => 'Somente leitura',
                    ],

                    'markdown' => [
                        'default'      => 'Padrão Valor',
                        'disabled'     => 'Desativado',
                        'helper-text'  => 'Helper Texto',
                        'hint'         => 'Dica',
                        'hint-color'   => 'Dica Cor',
                        'hint-icon'    => 'Dica Icon',
                        'id'           => 'Id',
                        'placeholder'  => 'Espaço reservado',
                        'read-only'    => 'Somente leitura',
                    ],

                    'color' => [
                        'default'     => 'Padrão Valor',
                        'disabled'    => 'Desativado',
                        'helper-text' => 'Helper Texto',
                        'hint'        => 'Dica',
                        'hint-color'  => 'Dica Cor',
                        'hint-icon'   => 'Dica Icon',
                        'hsl'         => 'HSL',
                        'id'          => 'Id',
                        'rgb'         => 'RGB',
                        'rgba'        => 'RGBA',
                    ],

                    'file' => [
                        'accepted-file-types'                   => 'Tipos de arquivo aceitos',
                        'append-files'                          => 'Anexar arquivos',
                        'deletable'                             => 'Deletable',
                        'directory'                             => 'Directory',
                        'downloadable'                          => 'Downloadable',
                        'fetch-file-information'                => 'Fetch Arquivo Information',
                        'file-attachments-directory'            => 'Arquivo Anexos Directory',
                        'file-attachments-visibility'           => 'Arquivo Anexos Visibility',
                        'image'                                 => 'Imagem',
                        'image-crop-aspect-ratio'               => 'Imagem Crop Aspect Proporção',
                        'image-editor'                          => 'Imagem Editor',
                        'image-editor-aspect-ratios'            => 'Imagem Editor Aspect Ratios',
                        'image-editor-empty-fill-color'         => 'Imagem Editor Empty Fill Cor',
                        'image-editor-mode'                     => 'Imagem Editor Modo',
                        'image-preview-height'                  => 'Imagem Preview Altura',
                        'image-resize-mode'                     => 'Imagem Resize Modo',
                        'image-resize-target-height'            => 'Imagem Resize Target Altura',
                        'image-resize-target-width'             => 'Imagem Resize Target Largura',
                        'loading-indicator-position'            => 'Carregando Indicator Cargo',
                        'move-files'                            => 'Movimento Arquivos',
                        'openable'                              => 'Openable',
                        'orient-images-from-exif'               => 'Orient Images de EXIF',
                        'panel-aspect-ratio'                    => 'Panel Aspect Proporção',
                        'panel-layout'                          => 'Panel Layout',
                        'previewable'                           => 'Previewable',
                        'remove-uploaded-file-button-position'  => 'Remover Uploaded Arquivo Botão Cargo',
                        'reorderable'                           => 'Reorderable',
                        'store-files'                           => 'Store Arquivos',
                        'upload-button-position'                => 'Envio Botão Cargo',
                        'uploading-message'                     => 'Uploading Mensagem',
                        'upload-progress-indicator-position'    => 'Envio Progresso Indicator Cargo',
                        'visibility'                            => 'Visibility',
                    ],
                ],
            ],

            'table-settings' => [
                'title' => 'Tabela Configurações',

                'fields' => [
                    'use-in-table'  => 'Use in Tabela',
                    'setting'       => 'Configuração',
                    'value'         => 'Valor',
                    'color'         => 'Cor',
                    'alignment'     => 'Alinhamento',
                    'font-weight'   => 'Fonte Peso',
                    'icon-position' => 'Icon Cargo',
                    'size'          => 'Tamanho',
                    'add-setting'   => 'Adicionar configuração',

                    'color-options' => [
                        'danger'    => 'Danger',
                        'info'      => 'Informação',
                        'primary'   => 'Primário',
                        'secondary' => 'Secundário',
                        'warning'   => 'Aviso',
                        'success'   => 'Sucesso',
                    ],

                    'alignment-options' => [
                        'start'   => 'Iniciar',
                        'left'    => 'Esquerda',
                        'center'  => 'Centro',
                        'end'     => 'End',
                        'right'   => 'Direita',
                        'justify' => 'Justify',
                        'between' => 'Entre',
                    ],

                    'font-weight-options' => [
                        'extra-light' => 'Extra Light',
                        'light'       => 'Light',
                        'normal'      => 'Normal',
                        'medium'      => 'Médio',
                        'semi-bold'   => 'Semi Negrito',
                        'bold'        => 'Negrito',
                        'extra-bold'  => 'Extra Negrito',
                    ],

                    'icon-position-options' => [
                        'before'  => 'Antes',
                        'after'   => 'Depois',
                    ],

                    'size-options' => [
                        'extra-small' => 'Extra Pequeno',
                        'small'       => 'Pequeno',
                        'medium'      => 'Médio',
                        'large'       => 'Grande',
                    ],
                ],

                'settings' => [
                    'common' => [
                        'align-end'              => 'Align End',
                        'alignment'              => 'Alinhamento',
                        'align-start'            => 'Align Iniciar',
                        'badge'                  => 'Distintivo',
                        'boolean'                => 'Booleano',
                        'color'                  => 'Cor',
                        'copyable'               => 'Copyable',
                        'copy-message'           => 'Copiar Mensagem',
                        'copy-message-duration'  => 'Copiar Mensagem Duration',
                        'default'                => 'Padrão',
                        'filterable'             => 'Filterable',
                        'groupable'              => 'Groupable',
                        'grow'                   => 'Grow',
                        'icon'                   => 'Icon',
                        'icon-color'             => 'Icon Cor',
                        'icon-position'          => 'Icon Cargo',
                        'label'                  => 'Rótulo',
                        'limit'                  => 'Limite',
                        'line-clamp'             => 'Linha Clamp',
                        'money'                  => 'Money',
                        'placeholder'            => 'Espaço reservado',
                        'prefix'                 => 'Prefix',
                        'searchable'             => 'Searchable',
                        'size'                   => 'Tamanho',
                        'sortable'               => 'Sortable',
                        'suffix'                 => 'Suffix',
                        'toggleable'             => 'Toggleable',
                        'tooltip'                => 'Dica',
                        'vertical-alignment'     => 'Vertical Alinhamento',
                        'vertically-align-start' => 'Vertically Align Iniciar',
                        'weight'                 => 'Peso',
                        'width'                  => 'Largura',
                        'words'                  => 'Words',
                        'wrap-header'            => 'Wrap Header',
                        'column-span'            => 'Coluna Span',
                        'helper-text'            => 'Helper Texto',
                        'hint'                   => 'Dica',
                        'hint-color'             => 'Dica Cor',
                        'hint-icon'              => 'Dica Icon',
                    ],

                    'datetime' => [
                        'date'              => 'Data',
                        'date-time'         => 'Data Hora',
                        'date-time-tooltip' => 'Data Hora Dica',
                        'since'             => 'Since',
                    ],
                ],
            ],

            'infolist-settings' => [
                'title' => 'Infolist Configurações',

                'fields' => [
                    'setting'       => 'Configuração',
                    'value'         => 'Valor',
                    'color'         => 'Cor',
                    'font-weight'   => 'Fonte Peso',
                    'icon-position' => 'Icon Cargo',
                    'size'          => 'Tamanho',
                    'add-setting'   => 'Adicionar configuração',

                    'color-options' => [
                        'danger'    => 'Danger',
                        'info'      => 'Informação',
                        'primary'   => 'Primário',
                        'secondary' => 'Secundário',
                        'warning'   => 'Aviso',
                        'success'   => 'Sucesso',
                    ],

                    'font-weight-options' => [
                        'extra-light' => 'Extra Light',
                        'light'       => 'Light',
                        'normal'      => 'Normal',
                        'medium'      => 'Médio',
                        'semi-bold'   => 'Semi Negrito',
                        'bold'        => 'Negrito',
                        'extra-bold'  => 'Extra Negrito',
                    ],

                    'icon-position-options' => [
                        'before'  => 'Antes',
                        'after'   => 'Depois',
                    ],

                    'size-options' => [
                        'extra-small' => 'Extra Pequeno',
                        'small'       => 'Pequeno',
                        'medium'      => 'Médio',
                        'large'       => 'Grande',
                    ],
                ],

                'settings' => [
                    'common' => [
                        'align-end'              => 'Align End',
                        'alignment'              => 'Alinhamento',
                        'align-start'            => 'Align Iniciar',
                        'badge'                  => 'Distintivo',
                        'boolean'                => 'Booleano',
                        'color'                  => 'Cor',
                        'copyable'               => 'Copyable',
                        'copy-message'           => 'Copiar Mensagem',
                        'copy-message-duration'  => 'Copiar Mensagem Duration',
                        'default'                => 'Padrão',
                        'filterable'             => 'Filterable',
                        'groupable'              => 'Groupable',
                        'grow'                   => 'Grow',
                        'icon'                   => 'Icon',
                        'icon-color'             => 'Icon Cor',
                        'icon-position'          => 'Icon Cargo',
                        'label'                  => 'Rótulo',
                        'limit'                  => 'Limite',
                        'line-clamp'             => 'Linha Clamp',
                        'money'                  => 'Money',
                        'placeholder'            => 'Espaço reservado',
                        'prefix'                 => 'Prefix',
                        'searchable'             => 'Searchable',
                        'size'                   => 'Tamanho',
                        'sortable'               => 'Sortable',
                        'suffix'                 => 'Suffix',
                        'toggleable'             => 'Toggleable',
                        'tooltip'                => 'Dica',
                        'vertical-alignment'     => 'Vertical Alinhamento',
                        'vertically-align-start' => 'Vertically Align Iniciar',
                        'weight'                 => 'Peso',
                        'width'                  => 'Largura',
                        'words'                  => 'Words',
                        'wrap-header'            => 'Wrap Header',
                        'column-span'            => 'Coluna Span',
                        'helper-text'            => 'Helper Texto',
                        'hint'                   => 'Dica',
                        'hint-color'             => 'Dica Cor',
                        'hint-icon'              => 'Dica Icon',
                    ],

                    'datetime' => [
                        'date'              => 'Data',
                        'date-time'         => 'Data Hora',
                        'date-time-tooltip' => 'Data Hora Dica',
                        'since'             => 'Since',
                    ],

                    'checkbox-list' => [
                        'separator'                => 'Separator',
                        'list-with-line-breaks'    => 'List com Linha Breaks',
                        'bulleted'                 => 'Com marcadores',
                        'limit-list'               => 'Limite List',
                        'expandable-limited-list'  => 'Expandable Limited List',
                    ],

                    'select' => [
                        'separator'                => 'Separator',
                        'list-with-line-breaks'    => 'List com Linha Breaks',
                        'bulleted'                 => 'Com marcadores',
                        'limit-list'               => 'Limite List',
                        'expandable-limited-list'  => 'Expandable Limited List',
                    ],

                    'checkbox' => [
                        'boolean'     => 'Booleano',
                        'false-icon'  => 'Falso Icon',
                        'true-icon'   => 'Verdadeiro Icon',
                        'true-color'  => 'Verdadeiro Cor',
                        'false-color' => 'Falso Cor',
                    ],

                    'toggle' => [
                        'boolean'     => 'Booleano',
                        'false-icon'  => 'Falso Icon',
                        'true-icon'   => 'Verdadeiro Icon',
                        'true-color'  => 'Verdadeiro Cor',
                        'false-color' => 'Falso Cor',
                    ],
                ],
            ],

            'settings' => [
                'title' => 'Configurações',

                'fields' => [
                    'type'           => 'Tipo',
                    'input-type'     => 'Entrada Tipo',
                    'is-multiselect' => 'Is Multiselect',
                    'sort-order'     => 'Ordenar Pedido',

                    'type-options' => [
                        'text'          => 'Texto Entrada',
                        'textarea'      => 'Área de texto',
                        'select'        => 'Selecionar',
                        'checkbox'      => 'Caixa de seleção',
                        'radio'         => 'Opção',
                        'toggle'        => 'Toggle',
                        'checkbox-list' => 'Caixa de seleção List',
                        'datetime'      => 'Data Hora Picker',
                        'editor'        => 'Rich Texto Editor',
                        'markdown'      => 'Markdown Editor',
                        'color'         => 'Cor Picker',
                    ],

                    'input-type-options' => [
                        'text'     => 'Texto',
                        'email'    => 'E-mail',
                        'numeric'  => 'Numérico',
                        'integer'  => 'Inteiro',
                        'password' => 'Senha',
                        'tel'      => 'Telephone',
                        'url'      => 'URL',
                        'color'    => 'Cor',
                    ],
                ],
            ],

            'resource' => [
                'title' => 'Recurso',

                'fields' => [
                    'resource' => 'Recurso',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'code'       => 'Code',
            'name'       => 'Nome',
            'type'       => 'Tipo',
            'resource'   => 'Recurso',
            'created-at' => 'Criado em',
        ],

        'groups' => [
        ],

        'filters' => [
            'type'     => 'Tipo',
            'resource' => 'Recurso',

            'type-options' => [
                'text'          => 'Texto Entrada',
                'textarea'      => 'Área de texto',
                'select'        => 'Selecionar',
                'checkbox'      => 'Caixa de seleção',
                'radio'         => 'Opção',
                'toggle'        => 'Toggle',
                'checkbox-list' => 'Caixa de seleção List',
                'datetime'      => 'Data Hora Picker',
                'editor'        => 'Rich Texto Editor',
                'markdown'      => 'Markdown Editor',
                'color'         => 'Cor Picker',
            ],
        ],

        'actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Campo restaurado',
                    'body'  => 'O Campo foi restaurado com sucesso.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Campo excluído',
                    'body'  => 'O Campo foi excluído com sucesso.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Campo excluído definitivamente',
                    'body'  => 'O Campo foi excluído definitivamente com sucesso.',
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Campos restaurado',
                    'body'  => 'O Campos foi restaurado com sucesso.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Campos excluído',
                    'body'  => 'O Campos foi excluído com sucesso.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Campos excluído definitivamente',
                    'body'  => 'O Campos foi excluído definitivamente com sucesso.',
                ],
            ],
        ],
    ],
];
