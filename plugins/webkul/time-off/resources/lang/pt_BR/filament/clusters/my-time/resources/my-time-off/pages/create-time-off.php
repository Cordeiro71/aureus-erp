<?php

return [
    'notification' => [
        'success' => [
            'title' => 'Folga criado',
            'body'  => 'A Folga foi criada com sucesso.',
        ],

        'overlap' => [
            'title' => 'Overlapping Licença Request',
            'body'  => 'The selected licença datas overlap com an existing request. Please choose different datas.',
        ],

        'warning' => [
            'title' => 'You don\'You don\'t have an funcionário conta',
            'body'  => 'You don\'You don\'t have an funcionário conta. Please contato your administrador.',
        ],

        'invalid_half_day_leave' => [
            'title' => 'Inválido Licença Request',
            'body'  => 'Half-dia licença can only be applied para a single dia.',
        ],

        'leave_request_denied_no_allocation' => [
            'title' => 'Licença Request Negado',
            'body'  => 'You do não have any allocated licença para :leaveType.',
        ],

        'leave_request_denied_insufficient_balance' => [
            'title' => 'Licença Request Negado',
            'body'  => 'Insufficient licença saldo. You have :available_balance dia(s) disponível. Requested: :requested_days dia(s).',
        ],
    ],
];
