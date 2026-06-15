<?php

return [
    'navigation' => [
        'title' => 'Reporting',
        'group' => 'Contabilidade',
    ],
    'pages' => [
        'balance-sheet' => [
            'navigation' => [
                'title' => 'Balanço patrimonial',
                'group' => 'Statement Relatórios',
            ],
            'actions' => [
                'export-excel' => 'Exportar para Excel',
                'export-pdf'   => 'Exportar para PDF',
            ],
            'filters' => [
                'date-range' => 'Data Range',
                'journals'   => 'Diários',
            ],
            'content' => [
                'sections' => [
                    'assets' => [
                        'title'       => 'ATIVOS',
                        'total-label' => 'Total ATIVOS',
                        'subsections' => [
                            'current-assets' => [
                                'title'       => 'Atual Ativos',
                                'total-label' => 'Total Atual Ativos',
                            ],
                            'fixed-assets' => [
                                'title'       => 'Fixed Ativos',
                                'total-label' => 'Total Fixed Ativos',
                            ],
                            'non-current-assets' => [
                                'title'       => 'Non-atual Ativos',
                                'total-label' => 'Total Non-atual Ativos',
                            ],
                        ],
                    ],
                    'liabilities' => [
                        'title'       => 'PASSIVOS',
                        'total-label' => 'Total PASSIVOS',
                        'subsections' => [
                            'current-liabilities' => [
                                'title'       => 'Atual Passivos',
                                'total-label' => 'Total Atual Passivos',
                            ],
                            'non-current-liabilities' => [
                                'title'       => 'Non-atual Passivos',
                                'total-label' => 'Total Non-atual Passivos',
                            ],
                        ],
                    ],
                    'equity' => [
                        'title'       => 'PATRIMÔNIO LÍQUIDO',
                        'total-label' => 'Total PATRIMÔNIO LÍQUIDO',
                        'subsections' => [
                            'unallocated-earnings' => [
                                'title'          => 'Unallocated Earnings',
                                'current-year'   => 'Atual Ano Unallocated Earnings',
                                'previous-years' => 'Anterior Anos Unallocated Earnings',
                                'total-label'    => 'Total Unallocated Earnings',
                            ],
                            'retained-earnings' => [
                                'title'       => 'Retained Earnings',
                                'total-label' => 'Total Retained Earnings',
                            ],
                        ],
                    ],
                ],
                'grand-total-label' => 'PASSIVOS + PATRIMÔNIO LÍQUIDO',
            ],
        ],
        'profit-loss' => [
            'navigation' => [
                'title' => 'Profit & Loss',
                'group' => 'Statement Relatórios',
            ],
            'actions' => [
                'export-excel' => 'Exportar para Excel',
                'export-pdf'   => 'Exportar para PDF',
            ],
            'filters' => [
                'date-range' => 'Data Range',
                'journals'   => 'Diários',
            ],
            'content' => [
                'sections' => [
                    'revenue' => [
                        'title'         => 'RECEITA',
                        'total-label'   => 'Total Receita',
                        'empty-message' => 'Não receita contas com transactions in este period',
                    ],
                    'expenses' => [
                        'title'         => 'DESPESAS',
                        'total-label'   => 'Total Despesas',
                        'empty-message' => 'Não despesa contas com transactions in este period',
                    ],
                ],
            ],
        ],
        'general-ledger' => [
            'navigation' => [
                'title' => 'Geral Razão',
                'group' => 'Relatórios de auditoria',
            ],
            'actions' => [
                'export-excel' => 'Exportar para Excel',
                'export-pdf'   => 'Exportar para PDF',
            ],
            'filters' => [
                'date-range' => 'Data Range',
                'journals'   => 'Diários',
            ],
        ],
        'trial-balance' => [
            'navigation' => [
                'title' => 'Balancete',
                'group' => 'Relatórios de auditoria',
            ],
            'actions' => [
                'export-excel' => 'Exportar para Excel',
                'export-pdf'   => 'Exportar para PDF',
            ],
            'filters' => [
                'date-range' => 'Data Range',
                'journals'   => 'Diários',
            ],
        ],
        'partner-ledger' => [
            'navigation' => [
                'title' => 'Parceiro Razão',
                'group' => 'Parceiro Relatórios',
            ],
            'actions' => [
                'export-excel' => 'Exportar Excel',
                'export-pdf'   => 'Exportar PDF',
            ],
            'filters' => [
                'date-range' => 'Data Range',
                'partners'   => 'Parceiros',
                'journals'   => 'Diários',
            ],
        ],
        'aged-receivable' => [
            'navigation' => [
                'title' => 'Contas a receber por vencimento',
                'group' => 'Parceiro Relatórios',
            ],
            'actions' => [
                'export-excel' => 'Exportar Excel',
                'export-pdf'   => 'Exportar PDF',
            ],
            'filters' => [
                'as-of'         => 'A partir de',
                'based-on'      => 'Baseado em',
                'period-length' => 'Period Length (dias)',
                'journals'      => 'Diários',
                'partners'      => 'Parceiros',
                'entries'       => 'Entries',
                'options'       => [
                    'due-date'       => 'Data de vencimento',
                    'invoice-date'   => 'Fatura Data',
                    'days-30'        => '30 dias',
                    'days-60'        => '60 dias',
                    'days-90'        => '90 dias',
                    'posted-entries' => 'Lançado Entries',
                    'all-entries'    => 'Todos os registros',
                ],
            ],
        ],
        'aged-payable' => [
            'navigation' => [
                'title' => 'Contas a pagar por vencimento',
                'group' => 'Parceiro Relatórios',
            ],
            'actions' => [
                'export-excel' => 'Exportar Excel',
                'export-pdf'   => 'Exportar PDF',
            ],
            'filters' => [
                'as-of'         => 'A partir de',
                'based-on'      => 'Baseado em',
                'period-length' => 'Period Length (dias)',
                'journals'      => 'Diários',
                'partners'      => 'Parceiros',
                'entries'       => 'Entries',
                'options'       => [
                    'due-date'       => 'Data de vencimento',
                    'invoice-date'   => 'Fatura Data',
                    'days-30'        => '30 dias',
                    'days-60'        => '60 dias',
                    'days-90'        => '90 dias',
                    'posted-entries' => 'Lançado Entries',
                    'all-entries'    => 'Todos os registros',
                ],
            ],
        ],
    ],
];
