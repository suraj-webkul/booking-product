<?php

return [
    'admin' => [
        'catalog' => [
            'products' => [
                'edit'  => [
                    'booking' => [
                        'appointment' => [
                            'break-duration'         => 'Tiempo de descanso entre slots (minutos)',
                            'slot-duration'          => 'Duración del slot (minutos)',

                            'same-slot-for-all-days' => [
                                'no'    => 'No',
                                'title' => 'Mismo slot para todos los días',
                                'yes'   => 'Sí',
                            ],
                        ],

                        'default'     => [
                            'add'              => 'Agregar',
                            'break-duration'   => 'Tiempo de descanso entre slots (minutos)',
                            'close'            => 'Cerrar',
                            'description'      => 'Información de la reserva',
                            'description-info' => 'Según los slots, se creará y será visible la duración del tiempo.',
                            'edit'             => 'Editar',
                            'many'             => 'Muchas reservas para un día',

                            'modal'            => [
                                'slot' => [
                                    'add-title'  => 'Agregar intervalos',
                                    'close'      => 'Cerrar',
                                    'day'        => 'Día',
                                    'edit-title' => 'Editar intervalos',
                                    'friday'     => 'Viernes',
                                    'from'       => 'Desde',
                                    'from-day'   => 'Desde el día',
                                    'from-time'  => 'Desde la hora',
                                    'monday'     => 'Lunes',
                                    'open'       => 'Abrir',
                                    'saturday'   => 'Sábado',
                                    'save'       => 'Guardar',
                                    'select'     => 'Seleccionar',
                                    'status'     => 'Estado',
                                    'sunday'     => 'Domingo',
                                    'thursday'   => 'Jueves',
                                    'to'         => 'Hasta',
                                    'to-day'     => 'Hasta el día',
                                    'to-time'    => 'Hasta la hora',
                                    'tuesday'    => 'Martes',
                                    'wednesday'  => 'Miércoles',
                                    'week'       => ':day',
                                ],
                            ],

                            'one'              => 'Una reserva para muchos días',
                            'open'             => 'Abrir',
                            'slot-add'         => 'Agregar slots',
                            'slot-title'       => 'Duración del tiempo del slot',
                            'slot-duration'    => 'Duración del slot (minutos)',
                            'title'            => 'Predeterminado',
                            'unavailable'      => 'indisponible',
                        ],

                        'event'       => [
                            'add'                => 'Agregar tickets',
                            'delete'             => 'Eliminar',
                            'description-info'   => 'No hay tickets disponibles.',
                            'description'        => 'Descripción',
                            'edit'               => 'Editar',

                            'modal'              => [
                                'save' => 'Guardar',
                            ],

                            'name'               => 'Nombre',
                            'price'              => 'Precio',
                            'qty'                => 'Cantidad',
                            'special-price-from' => 'Precio especial desde',
                            'special-price-to'   => 'Precio especial hasta',
                            'special-price'      => 'Precio especial',
                            'title'              => 'Tickets',
                            'valid-from'         => 'Válido desde',
                            'valid-until'        => 'Válido hasta',
                        ],

                        'empty-info'  => [
                            'tickets' => [
                                'add' => 'Agregar tickets',
                            ],

                            'slots'   => [
                                'add'         => 'Agregar slots',
                                'description' => 'Slots disponibles con duración del tiempo.',
                            ],
                        ],

                        'rental'      => [
                            'daily-hourly'           => 'Ambos (Diario y por hora)',
                            'daily-price'            => 'Precio diario',
                            'daily'                  => 'Diario',
                            'hourly-price'           => 'Precio por hora',
                            'hourly'                 => 'Por hora',

                            'same-slot-for-all-days' => [
                                'no'    => 'No',
                                'title' => 'Mismo slot para todos los días',
                                'yes'   => 'Sí',
                            ],

                            'title'                  => 'Tipo de alquiler',
                        ],

                        'slots'       => [
                            'add'              => 'Agregar slots',

                            'action'           => [
                                'add' => 'Agregar',
                            ],

                            'description-info' => 'Según los slots, se creará y será visible la duración del tiempo.',

                            'modal'            => [
                                'slot' => [
                                    'friday'     => 'Viernes',
                                    'from'       => 'Desde',
                                    'monday'     => 'Lunes',
                                    'saturday'   => 'Sábado',
                                    'sunday'     => 'Domingo',
                                    'thursday'   => 'Jueves',
                                    'to'         => 'Hasta',
                                    'tuesday'    => 'Martes',
                                    'wednesday'  => 'Miércoles',
                                ],
                            ],

                            'save'             => 'Guardar',
                            'title'            => 'Duración del tiempo del slot',
                            'unavailable'      => 'No disponible',
                        ],

                        'table'       => [
                            'break-duration'            => 'Tiempo de descanso entre slots (minutos)',

                            'charged-per'               => [
                                'guest'  => 'Invitado',
                                'table'  => 'Mesa',
                                'title'  => 'Cargado por',
                            ],

                            'guest-capacity'            => 'Capacidad de invitados',
                            'guest-limit'               => 'Límite de invitados por mesa',
                            'prevent-scheduling-before' => 'Evitar programación antes de',
                            'slot-duration'             => 'Duración del slot (minutos)',

                            'same-slot-for-all-days'    => [
                                'no'    => 'No',
                                'title' => 'Mismo slot para todos los días',
                                'yes'   => 'Sí',
                            ],
                        ],
                    ],

                    'types'   => [
                        'booking' => [
                            'available-from' => 'Disponible Desde',
                            'available-to'   => 'Disponible Hasta',

                            'available-every-week'      => [
                                'no'    => 'No',
                                'title' => 'Disponible Todos los Días',
                                'yes'   => 'Sí',
                            ],

                            'location' => 'Ubicación',
                            'qty'      => 'Cantidad',

                            'type' => [
                                'appointment' => 'Cita',
                                'default'     => 'Predeterminado',
                                'event'       => 'Evento',
                                'many'        => 'Muchos',
                                'one'         => 'Uno',
                                'rental'      => 'Alquiler',
                                'table'       => 'Mesa',
                                'title'       => 'Tipo',
                            ],

                            'title' => 'Tipo de Reserva',
                        ],
                    ],
                ],

                'index' => [
                    'booking' => 'Reserva',
                ],

                'type' => [
                    'booking' => 'Reserva',
                ],
            ],
        ],

        'sales'   => [
            'bookings' => [
                'calendar' => [
                    'booking-date'     => 'Fecha de Reserva',
                    'booking-detailes' => 'Detalles de la Reserva',
                    'canceled'         => 'Cancelado',
                    'closed'           => 'Cerrado',
                    'done'             => 'Realizado',
                    'order-id'         => 'ID de Pedido',
                    'pending'          => 'Pendiente',
                    'price'            => 'Precio',
                    'status'           => 'Estado',
                    'time-slot'        => 'Franja horaria:',
                    'view-details'     => 'Ver Detalles',
                ],

                'index' => [
                    'datagrid' => [
                        'created-date' => 'Fecha de creación',
                        'from'         => 'Desde',
                        'id'           => 'ID',
                        'order-id'     => 'ID de orden',
                        'qty'          => 'Cant.',
                        'to'           => 'Hasta',
                    ],

                    'title'    => 'Producto de Reservas',
                ],

                'title' => 'Producto de Reservas',
            ],
        ],
    ],

    'shop'  => [
        'products' => [
            'booking' => [
                'closed'           => 'Cerrado',

                'cart'             => [
                    'booking-from' => 'Desde la reserva',
                    'booking-till' => 'Hasta la reserva',
                    'daily'        => 'Diario',
                    'event-from'   => 'Desde el evento',
                    'event-ticket' => 'Boleto de evento',
                    'event-till'   => 'Hasta el evento',

                    'integrity'    => [
                        'missing_options'        => 'Faltan opciones para este producto.',
                        'select_hourly_duration' => 'Seleccione una duración de ranura de una hora.',
                    ],

                    'rent-from'    => 'Alquiler desde',
                    'rent-till'    => 'Alquiler hasta',
                    'rent-type'    => 'Tipo de alquiler',
                    'renting_type' => 'Tipo de alquiler',
                    'special-note' => 'Solicitud especial/Notas',
                ],

                'per-ticket-price' => ':price Por Ticket',
            ],

            'view'    => [
                'types'   => [
                    'booking' => [
                        'event-on'                 => 'Evento En',
                        'location'                 => 'Ubicación',
                        'slot-duration-in-minutes' => ':minutes Minutos',
                        'slot-duration'            => 'Duración de la Ranura',
                        'view-on-map'              => 'Ver en el Mapa',
                    ],
                ],

                'booking' => [
                    'appointment' => [
                        'closed'             => 'Cerrado',
                        'today-availability' => 'Disponibilidad de Hoy',
                    ],

                    'event'       => [
                        'book-your-ticket' => 'Reserve su Boleto',
                    ],

                    'rental'      => [
                        'choose-rent-option' => 'Elegir Opción de Renta',
                        'daily-basis'        => 'Base Diaria',
                        'from'               => 'Desde',
                        'hourly-basis'       => 'Base por Hora',
                        'rent-an-item'       => 'Rentar un Artículo',
                        'select-date'        => 'Seleccionar Fecha',
                        'select-rent-time'   => 'Seleccionar Hora de Renta',
                        'select-slot'        => 'Seleccionar Ranura',
                        'slot'               => 'Ranura',
                        'to'                 => 'Hasta',
                    ],

                    'slots'       => [
                        'book-an-appointment' => 'Reservar una Cita',
                        'date'                => 'Fecha',
                        'no-slots-available'  => 'No hay ranuras disponibles',
                        'title'               => 'Ranura',
                    ],

                    'table'       => [
                        'book-a-table'       => 'Reservar una Mesa',
                        'closed'             => 'Cerrado',
                        'slots-for-all-days' => 'Mostrar para todos los días',
                        'special-notes'      => 'Solicitudes Especiales/Notas',
                        'today-availability' => 'Disponibilidad de Hoy',
                    ],
                ],
            ],
        ],
    ],
];
