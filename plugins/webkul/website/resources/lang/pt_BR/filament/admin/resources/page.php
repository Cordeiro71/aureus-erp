<?php

return [
    'navigation' => [
        'title' => 'Páginas',
        'group' => 'Site',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title' => 'Geral',

                'fields' => [
                    'title'             => 'Título',
                    'title-placeholder' => 'Página título ...',
                    'slug'              => 'Slug',
                    'content'           => 'Conteúdo',
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
                    'is-header-visible' => 'Is Visível Header Menu',
                    'is-footer-visible' => 'Is Visível Footer Menu',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'title'             => 'Título',
            'slug'              => 'Slug',
            'creator'           => 'Criado por',
            'is-published'      => 'Is Published',
            'is-header-visible' => 'Is Visível Header Menu',
            'is-footer-visible' => 'Is Visível Footer Menu',
            'created-at'        => 'Criado em',
            'updated-at'        => 'Atualizado em',
        ],

        'groups' => [
            'created-at' => 'Criado em',
        ],

        'filters' => [
            'is-published' => 'Is Published',
            'creator'      => 'Criado por',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Página atualizado',
                    'body'  => 'A Página foi atualizada com sucesso.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => 'Página restaurado',
                    'body'  => 'A Página foi restaurada com sucesso.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Página excluído',
                    'body'  => 'A Página foi excluído com sucesso.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Página excluído definitivamente',
                    'body'  => 'A Página foi excluído definitivamente com sucesso.',
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Páginas restaurado',
                    'body'  => 'O Páginas foi restaurado com sucesso.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Páginas excluído',
                    'body'  => 'O Páginas foi excluído com sucesso.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Páginas excluído definitivamente',
                    'body'  => 'O Páginas foi excluído definitivamente com sucesso.',
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
                    'is-header-visible' => 'Is Visível Header Menu',
                    'is-footer-visible' => 'Is Visível Footer Menu',
                ],
            ],
        ],
    ],
];
