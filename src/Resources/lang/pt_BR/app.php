<?php

return [
    'admin' => [
        'catalog' => [
            'products' => [
                'edit' => [
                    'booking' => [
                        'appointment' => [
                            'break-duration'         => 'Tempo de Intervalo entre Slots (minutos)',
                            'slot-duration'          => 'Duração do Slot (minutos)',

                            'same-slot-for-all-days' => [
                                'no'    => 'Não',
                                'title' => 'Mesmo Slot Para Todos os Dias',
                                'yes'   => 'Sim',
                            ],
                        ],

                        'default'     => [
                            'add'              => 'Adicionar',
                            'break-duration'   => 'Tempo de Intervalo entre Slots (minutos)',
                            'close'            => 'Fechar',
                            'description'      => 'Informações de Reserva',
                            'description-info' => 'Conforme os slots, a duração do tempo será criada e visível.',
                            'edit'             => 'Editar',
                            'many'             => 'Muitas Reservas Para Um Dia',

                            'modal'            => [
                                'slot' => [
                                    'add-title'  => 'Adicionar Slots',
                                    'close'      => 'Fechar',
                                    'day'        => 'Dia',
                                    'edit-title' => 'Editar Slots',
                                    'friday'     => 'Sexta-feira',
                                    'from'       => 'De',
                                    'from-day'   => 'Do Dia',
                                    'from-time'  => 'Do Horário',
                                    'monday'     => 'Segunda-feira',
                                    'open'       => 'Abrir',
                                    'saturday'   => 'Sábado',
                                    'save'       => 'Salvar',
                                    'select'     => 'Selecionar',
                                    'status'     => 'Status',
                                    'sunday'     => 'Domingo',
                                    'thursday'   => 'Quinta-feira',
                                    'to'         => 'Até',
                                    'to-day'     => 'Até o Dia',
                                    'to-time'    => 'Até o Horário',
                                    'tuesday'    => 'Terça-feira',
                                    'wednesday'  => 'Quarta-feira',
                                    'week'       => ':day',
                                ],
                            ],

                            'one'              => 'Uma Reserva Para Muitos Dias',
                            'open'             => 'Abrir',
                            'slot-add'         => 'Adicionar Slots',
                            'slot-title'       => 'Duração do Tempo dos Slots',
                            'slot-duration'    => 'Duração do Slot (minutos)',
                            'title'            => 'Padrão',
                            'unavailable'      => 'indisponível',
                        ],

                        'event'       => [
                            'add'                => 'Adicionar Ingressos',
                            'delete'             => 'Excluir',
                            'description-info'   => 'Não há ingressos disponíveis.',
                            'description'        => 'Descrição',
                            'edit'               => 'Editar',

                            'modal'              => [
                                'save' => 'Salvar',
                            ],

                            'name'               => 'Nome',
                            'price'              => 'Preço',
                            'qty'                => 'Quantidade',
                            'special-price-from' => 'Preço Especial De',
                            'special-price-to'   => 'Preço Especial Até',
                            'special-price'      => 'Preço Especial',
                            'title'              => 'Ingressos',
                            'valid-from'         => 'Válido De',
                            'valid-until'        => 'Válido Até',
                        ],

                        'empty-info'  => [
                            'tickets' => [
                                'add' => 'Adicionar Ingressos',
                            ],

                            'slots'   => [
                                'add'         => 'Adicionar Slots',
                                'description' => 'Slots disponíveis com duração do tempo.',
                            ],
                        ],

                        'rental'      => [
                            'daily-hourly'           => 'Ambos (Diário e Por Hora)',
                            'daily-price'            => 'Preço Diário',
                            'daily'                  => 'Com Base Diária',
                            'hourly-price'           => 'Preço Por Hora',
                            'hourly'                 => 'Com Base Horária',

                            'same-slot-for-all-days' => [
                                'no'    => 'Não',
                                'title' => 'Mesmo Slot Para Todos os Dias',
                                'yes'   => 'Sim',
                            ],

                            'title'                  => 'Tipo de Aluguel',
                        ],

                        'slots'       => [
                            'add'              => 'Adicionar Slots',

                            'action'           => [
                                'add' => 'Adicionar',
                            ],

                            'description-info' => 'Conforme os slots, a duração do tempo será criada e visível.',

                            'modal'            => [
                                'slot' => [
                                    'friday'     => 'Sexta-feira',
                                    'from'       => 'De',
                                    'monday'     => 'Segunda-feira',
                                    'saturday'   => 'Sábado',
                                    'sunday'     => 'Domingo',
                                    'thursday'   => 'Quinta-feira',
                                    'to'         => 'Até',
                                    'tuesday'    => 'Terça-feira',
                                    'wednesday'  => 'Quarta-feira',
                                ],
                            ],

                            'save'             => 'Salvar',
                            'title'            => 'Duração do Tempo dos Slots',
                            'unavailable'      => 'Indisponível',
                        ],

                        'table'       => [
                            'break-duration'            => 'Tempo de Intervalo entre Slots (minutos)',

                            'charged-per'               => [
                                'guest'  => 'Convidado',
                                'table'  => 'Mesa',
                                'title'  => 'Cobrado Por',
                            ],

                            'guest-capacity'            => 'Capacidade de Convidados',
                            'guest-limit'               => 'Limite de Convidados por Mesa',
                            'prevent-scheduling-before' => 'Impedir Agendamento Antes de',
                            'slot-duration'             => 'Duração do Slot (minutos)',

                            'same-slot-for-all-days'    => [
                                'no'    => 'Não',
                                'title' => 'Mesmo Slot Para Todos os Dias',
                                'yes'   => 'Sim',
                            ],
                        ],
                    ],

                    'types'   => [
                        'booking' => [
                            'available-from'       => 'Disponível De',
                            'available-to'         => 'Disponível Até',

                            'available-every-week' => [
                                'no'    => 'Não',
                                'title' => 'Disponível Todas as Semanas',
                                'yes'   => 'Sim',
                            ],

                            'location'             => 'Localização',
                            'qty'                  => 'Quantidade',

                            'type'                 => [
                                'appointment' => 'Agendamento',
                                'default'     => 'Padrão',
                                'event'       => 'Evento',
                                'many'        => 'Vários',
                                'one'         => 'Um',
                                'rental'      => 'Aluguel',
                                'table'       => 'Mesa',
                                'title'       => 'Tipo',
                            ],

                            'title' => 'Tipo de Reserva',
                        ],
                    ],
                ],

                'index'   => [
                    'booking' => 'Reserva',
                ],

                'type'   => [
                    'booking' => 'Reserva',
                ],
            ],
        ],

        'component' => [
            'modal' => [
                'close' => 'Fechar',
            ],
        ],

        'sales'   => [
            'bookings' => [
                'calendar' => [
                    'booking-date'     => 'Data da Reserva',
                    'booking-detailes' => 'Detalhes da Reserva',
                    'canceled'         => 'Cancelado',
                    'closed'           => 'Fechado',
                    'done'             => 'Concluído',
                    'order-id'         => 'ID do Pedido',
                    'pending'          => 'Pendente',
                    'price'            => 'Preço',
                    'status'           => 'Status',
                    'time-slot'        => 'Intervalo de Tempo:',
                    'view-details'     => 'Ver Detalhes',
                ],

                'index' => [
                    'datagrid' => [
                        'created-date' => 'Data de Criação',
                        'from'         => 'De',
                        'id'           => 'ID',
                        'order-id'     => 'ID do Pedido',
                        'qty'          => 'Quantidade',
                        'to'           => 'Para',
                    ],

                    'title' => 'Produto de Reservas',
                ],

                'title' => 'Produto de Reservas',
            ],
        ],
    ],

    'shop'  => [
        'products' => [
            'booking' => [
                'closed'           => 'Fechado',

                'cart'             => [
                    'booking-from' => 'Reserva De',
                    'booking-till' => 'Reserva Até',
                    'daily'        => 'Diário',
                    'event-from'   => 'Evento De',
                    'event-ticket' => 'Bilhete de Evento',
                    'event-till'   => 'Evento Até',

                    'integrity'    => [
                        'missing_options'        => 'Opções em falta para este produto.',
                        'select_hourly_duration' => 'Selecione uma duração do slot de uma hora.',
                    ],

                    'rent-from'    => 'Aluguer De',
                    'rent-till'    => 'Aluguer Até',
                    'rent-type'    => 'Tipo de Aluguer',
                    'renting_type' => 'Tipo de Aluguer',
                    'special-note' => 'Pedido Especial/Notas',
                ],

                'per-ticket-price' => ':price Por Bilhete',
            ],

            'view'    => [
                'types'   => [
                    'booking' => [
                        'event-on'                 => 'Evento Em',
                        'location'                 => 'Localização',
                        'slot-duration-in-minutes' => ':minutes Minutos',
                        'slot-duration'            => 'Duração do Slot',
                        'view-on-map'              => 'Ver no Mapa',
                    ],
                ],

                'booking' => [
                    'appointment' => [
                        'closed'             => 'Fechado',
                        'today-availability' => 'Disponibilidade Hoje',
                    ],

                    'event'       => [
                        'book-your-ticket' => 'Reserve o Seu Bilhete',
                    ],

                    'rental'      => [
                        'choose-rent-option' => 'Escolha a Opção de Aluguer',
                        'daily-basis'        => 'Base Diária',
                        'from'               => 'De',
                        'hourly-basis'       => 'Base Horária',
                        'rent-an-item'       => 'Alugar um Item',
                        'select-date'        => 'Selecionar Data',
                        'select-rent-time'   => 'Selecionar Tempo de Aluguer',
                        'select-slot'        => 'Selecionar Slot',
                        'slot'               => 'Slot',
                        'to'                 => 'Até',
                    ],

                    'slots'       => [
                        'book-an-appointment' => 'Marcar uma Consulta',
                        'date'                => 'Data',
                        'no-slots-available'  => 'Sem slots disponíveis',
                        'title'               => 'Slots',
                    ],

                    'table'     => [
                        'book-a-table'       => 'Reservar uma Mesa',
                        'closed'             => 'Fechado',
                        'slots-for-all-days' => 'Mostrar para todos os dias',
                        'special-notes'      => 'Pedido Especial/Notas',
                        'today-availability' => 'Disponibilidade Hoje',
                    ],
                ],
            ],
        ],
    ],
];
