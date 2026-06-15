<?php

return [
    'navigation' => [
        'title' => 'Postagens do blog',
        'group' => 'Site',
    ],

    'global-search' => [
        'author' => 'Autor',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title' => 'Geral',

                'fields' => [
                    'title'             => 'Título',
                    'sub-title'         => 'Sub Título',
                    'title-placeholder' => 'Postagem título ...',
                    'slug'              => 'Slug',
                    'content'           => 'Conteúdo',
                    'banner'            => 'Banner',
                ],
            ],

            'seo' => [
                'title' => 'SEO',

                'fields' => [
                    'meta-title'       => 'Meta Título',
                    'meta-keywords'    => 'Meta Keywords',
                    'meta-description' => 'Meta Descrição',
                ],
            ],

            'settings' => [
                'title' => 'Configurações',

                'fields' => [
                    'category'     => 'Categoria',
                    'tags'         => 'Etiquetas',
                    'name'         => 'Nome',
                    'color'        => 'Cor',
                    'is-published' => 'Is Published',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'title'        => 'Título',
            'slug'         => 'Slug',
            'author'       => 'Autor',
            'category'     => 'Categoria',
            'creator'      => 'Criado por',
            'is-published' => 'Is Published',
            'created-at'   => 'Criado em',
            'updated-at'   => 'Atualizado em',
        ],

        'groups' => [
            'category'   => 'Categoria',
            'author'     => 'Autor',
            'created-at' => 'Criado em',
        ],

        'filters' => [
            'is-published' => 'Is Published',
            'author'       => 'Autor',
            'creator'      => 'Criado por',
            'category'     => 'Categoria',
            'tags'         => 'Etiquetas',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Postagem atualizado',
                    'body'  => 'A Postagem foi atualizada com sucesso.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => 'Postagem restaurado',
                    'body'  => 'A Postagem foi restaurada com sucesso.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Postagem excluído',
                    'body'  => 'A Postagem foi excluído com sucesso.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Postagem excluído definitivamente',
                    'body'  => 'A Postagem foi excluído definitivamente com sucesso.',
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Postagens restaurado',
                    'body'  => 'O Postagens foi restaurado com sucesso.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Postagens excluído',
                    'body'  => 'O Postagens foi excluído com sucesso.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Postagens excluído definitivamente',
                    'body'  => 'O Postagens foi excluído definitivamente com sucesso.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title' => 'Geral',

                'entries' => [
                    'title'   => 'Título',
                    'slug'    => 'Slug',
                    'content' => 'Conteúdo',
                    'banner'  => 'Banner',
                ],
            ],

            'seo' => [
                'title' => 'SEO',

                'entries' => [
                    'meta-title'       => 'Meta Título',
                    'meta-keywords'    => 'Meta Keywords',
                    'meta-description' => 'Meta Descrição',
                ],
            ],

            'record-information' => [
                'title' => 'Record Information',

                'entries' => [
                    'author'          => 'Autor',
                    'created-by'      => 'Criado por',
                    'published-at'    => 'Published At',
                    'last-updated-by' => 'Último Atualizado por',
                    'last-updated'    => 'Último Atualizado em',
                    'created-at'      => 'Criado em',
                ],
            ],

            'settings' => [
                'title' => 'Configurações',

                'entries' => [
                    'category'     => 'Categoria',
                    'tags'         => 'Etiquetas',
                    'name'         => 'Nome',
                    'color'        => 'Cor',
                    'is-published' => 'Is Published',
                ],
            ],
        ],
    ],
];
