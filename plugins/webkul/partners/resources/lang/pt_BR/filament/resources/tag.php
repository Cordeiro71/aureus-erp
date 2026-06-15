<?php

return [
    'form' => [
        'name'  => 'Nome',
        'color' => 'Cor',
    ],

    'table' => [
        'columns' => [
            'name'       => 'Nome',
            'color'      => 'Cor',
            'created-at' => 'Criado em',
            'updated-at' => 'Atualizado em',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Etiqueta atualizado',
                    'body'  => 'A Etiqueta foi atualizada com sucesso.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => 'Etiqueta restaurado',
                    'body'  => 'A Etiqueta foi restaurada com sucesso.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Etiqueta excluído',
                    'body'  => 'A Etiqueta foi excluído com sucesso.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Etiqueta excluído definitivamente',
                    'body'  => 'A Etiqueta foi excluído definitivamente com sucesso.',
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Etiquetas restaurado',
                    'body'  => 'O Etiquetas foi restaurado com sucesso.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Etiquetas excluído',
                    'body'  => 'O Etiquetas foi excluído com sucesso.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Etiquetas excluído definitivamente',
                    'body'  => 'O Etiquetas foi excluído definitivamente com sucesso.',
                ],
            ],
        ],
    ],
];
