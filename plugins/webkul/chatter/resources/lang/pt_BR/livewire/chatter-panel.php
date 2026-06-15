<?php

return [
    'heading' => 'Mensagens',

    'placeholders' => [
        'no-record-found' => 'Não record found.',
        'loading'         => 'Carregando Mensagens...',
    ],

    'activity-infolist' => [
        'title' => 'Atividades',
    ],

    'cancel-activity-plan-action' => [
        'title' => 'Cancelar Atividade',
    ],

    'delete-message-action' => [
        'title' => 'Excluir Mensagem',
    ],

    'edit-activity' => [
        'title' => 'Editar Atividade',

        'form' => [
            'fields' => [
                'activity-plan' => 'Plano de atividades',
                'plan-date'     => 'Plan Data',
                'plan-summary'  => 'Plan Summary',
                'activity-type' => 'Atividade Tipo',
                'due-date'      => 'Data de vencimento',
                'summary'       => 'Summary',
                'assigned-to'   => 'Atribuído a',
            ],
        ],

        'action' => [
            'notification' => [
                'success' => [
                    'title' => 'Atividade atualizado',
                    'body'  => 'A Atividade foi atualizada com sucesso.',
                ],
            ],
        ],
    ],

    'process-message' => [
        'original-note' => '<br><div><span class="fonte-negrito">Original Nota</span>: :body</div>',
        'original-note' => '<br><div><span class="fonte-negrito">Original Nota</span>: :body</div>',
        'feedback'      => '<div><span class="fonte-negrito">Feedback</span>: <p>:feedback</p></div>',
    ],

    'mark-as-done' => [
        'title' => 'Mark as concluído',
        'form'  => [
            'fields' => [
                'feedback' => 'Feedback',
            ],
        ],

        'footer-actions' => [
            'label' => 'Concluído & Schedule Próximo',

            'actions' => [
                'notification' => [
                    'mark-as-done' => [
                        'title' => 'Marcar atividade como concluída',
                        'body'  => 'The marcar atividade como concluída successfully.',
                    ],
                ],
            ],
        ],
    ],
];
