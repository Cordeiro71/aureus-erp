<?php

return [
    'notification' => [
        'title'              => 'Folga atualizado',
        'body'               => 'A Folga foi atualizada com sucesso.',
        'action_not_allowed' => [
            'title' => 'Ação não permitida',
            'body'  => 'You cannot modify este licença request as it is in a bloqueado state.',
        ],
        'overlap' => [
            'title' => 'Overlapping Licença Request',
            'body'  => 'The selected licença datas overlap com an existing request. Please choose different datas.',
        ],
    ],

    'header-actions' => [
        'delete' => [
            'notification' => [
                'title' => 'Folga excluído',
                'body'  => 'A Folga foi excluído com sucesso.',
            ],
        ],
    ],
];
