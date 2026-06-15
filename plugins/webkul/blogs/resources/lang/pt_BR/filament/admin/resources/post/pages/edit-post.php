<?php

return [
    'notification' => [
        'title' => 'Postagem atualizado',
        'body'  => 'A Postagem foi atualizada com sucesso.',
    ],

    'header-actions' => [
        'draft' => [
            'label' => 'Set as Rascunho',

            'notification' => [
                'title' => 'Postagem set as rascunho',
                'body'  => 'A Postagem foi set as draft com sucesso.',
            ],
        ],

        'publish' => [
            'label' => 'Publicar',

            'notification' => [
                'title' => 'Postagem published',
                'body'  => 'A Postagem foi publicada com sucesso.',
            ],
        ],

        'delete' => [
            'notification' => [
                'title' => 'Postagem excluído',
                'body'  => 'A Postagem foi excluído com sucesso.',
            ],
        ],
    ],
];
