    <?php

    return [
        'setup' => [
            'title'               => 'Seguidores',
            'submit-action-title' => 'Adicionar seguidor',
            'tooltip'             => 'Adicionar seguidor',

            'form' => [
                'fields' => [
                    'recipients'  => 'Recipients',
                    'notify-user' => 'Notify Usuário',
                    'add-a-note'  => 'Adicionar uma nota',
                ],
            ],

            'actions' => [
                'notification' => [
                    'success' => [
                        'title' => 'Seguidor Added',
                        'body'  => 'O Seguidor foi added com sucesso.',
                    ],

                    'partial_message' => [
                        'title'    => 'Mensagem enviado com a aviso',
                        'single'   => ':contagem seguidor was não notified due para missing e-mail: :names',
                        'multiple' => ':contagem seguidores were não notified due para missing emails: :names',
                    ],

                    'error' => [
                        'title' => 'Seguidor added erro',
                        'body'  => 'Falhou para ":parceiro" as seguidor',
                    ],
                ],

                'mail' => [
                    'subject' => 'Invitation para follow :model: :departamento',
                ],
            ],
        ],
    ];
