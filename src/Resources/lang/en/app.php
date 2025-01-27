<?php

return [
    'admin' => [
        'catalog' => [
            'products' => [
                'edit'  => [
                    'booking' => [
                        'appointment' => [
                            'break-duration'         => 'Break Time b/w Slots (Mins)',
                            'slot-duration'          => 'Slot Duration (Mins)',

                            'same-slot-for-all-days' => [
                                'no'    => 'No',
                                'title' => 'Same Slot For All days',
                                'yes'   => 'Yes',
                            ],
                        ],

                        'default'     => [
                            'add'              => 'Add',
                            'break-duration'   => 'Break Time b/w Slots (Mins)',
                            'close'            => 'Close',
                            'description'      => 'Booking Information',
                            'description-info' => 'According to slots the time duration will be created and visible.',
                            'edit'             => 'Edit',
                            'many'             => 'Many Bookings For One Days',

                            'modal'            => [
                                'slot' => [
                                    'add-title'  => 'Add Slots',
                                    'close'      => 'Close',
                                    'day'        => 'Day',
                                    'edit-title' => 'Edit Slots',
                                    'friday'     => 'Friday',
                                    'from'       => 'From',
                                    'from-day'   => 'From Day',
                                    'from-time'  => 'From Time',
                                    'monday'     => 'Monday',
                                    'open'       => 'Open',
                                    'saturday'   => 'Saturday',
                                    'save'       => 'Save',
                                    'select'     => 'Select',
                                    'status'     => 'Status',
                                    'sunday'     => 'Sunday',
                                    'thursday'   => 'Thursday',
                                    'to'         => 'To',
                                    'to-day'     => 'To Day',
                                    'to-time'    => 'To Time',
                                    'tuesday'    => 'Tuesday',
                                    'wednesday'  => 'Wednesday',
                                    'week'       => ':day',
                                ],
                            ],

                            'one'              => 'One Booking For Many Days',
                            'open'             => 'Open',
                            'slot-add'         => 'Add Slots',
                            'slot-title'       => 'Slots Time Duration',
                            'slot-duration'    => 'Slot Duration (Mins)',
                            'title'            => 'Default',
                            'unavailable'      => 'Unavailable',
                        ],

                        'event'       => [
                            'add'                => 'Add Tickets',
                            'delete'             => 'Delete',
                            'description-info'   => 'There is no tickets available.',
                            'description'        => 'Description',
                            'edit'               => 'Edit',

                            'modal'              => [
                                'save' => 'Save',
                            ],

                            'name'               => 'Name',
                            'price'              => 'Price',
                            'qty'                => 'Quantity',
                            'special-price-from' => 'Special Price From',
                            'special-price-to'   => 'Special Price To',
                            'special-price'      => 'Special Price',
                            'title'              => 'Tickets',
                            'valid-from'         => 'Valid From',
                            'valid-until'        => 'Valid Until',
                        ],

                        'empty-info'  => [
                            'tickets' => [
                                'add' => 'Add Tickets',
                            ],

                            'slots'   => [
                                'add'         => 'Add Slots',
                                'description' => 'Available Slots with time Duration.',
                            ],
                        ],

                        'rental'      => [
                            'daily-hourly'           => 'Both (Daily and Hourly Basis)',
                            'daily-price'            => 'Daily Price',
                            'daily'                  => 'Daily Basis',
                            'hourly-price'           => 'Hourly Price',
                            'hourly'                 => 'Hourly Basis',

                            'same-slot-for-all-days' => [
                                'no'    => 'No',
                                'title' => 'Same Slot For All days',
                                'yes'   => 'Yes',
                            ],

                            'title'                  => 'Renting Type',
                        ],

                        'slots'       => [
                            'add'              => 'Add Slots',

                            'action'           => [
                                'add' => 'Add',
                            ],

                            'description-info' => 'According to slots the time duration will be created and visible.',

                            'modal'            => [
                                'slot' => [
                                    'friday'     => 'Friday',
                                    'from'       => 'From',
                                    'monday'     => 'Monday',
                                    'saturday'   => 'Saturday',
                                    'sunday'     => 'Sunday',
                                    'thursday'   => 'Thursday',
                                    'to'         => 'To',
                                    'tuesday'    => 'Tuesday',
                                    'wednesday'  => 'Wednesday',
                                ],
                            ],

                            'save'             => 'Save',
                            'title'            => 'Slots Time Duration',
                            'unavailable'      => 'Unavailable',
                        ],

                        'table'       => [
                            'break-duration'            => 'Break Time b/w Slots (Mins)',

                            'charged-per'               => [
                                'guest'  => 'Guest',
                                'table'  => 'Table',
                                'title'  => 'Charged Per',
                            ],

                            'guest-capacity'            => 'Guest Capacity',
                            'guest-limit'               => 'Guest Limit Per Table',
                            'prevent-scheduling-before' => 'Prevent Scheduling Before',
                            'slot-duration'             => 'Slot Duration (Mins)',

                            'same-slot-for-all-days'    => [
                                'no'    => 'No',
                                'title' => 'Same Slot For All days',
                                'yes'   => 'Yes',
                            ],
                        ],
                    ],

                    'types'   => [
                        'booking' => [
                            'available-from'       => 'Available From',
                            'available-to'         => 'Available To',

                            'available-every-week' => [
                                'no'    => 'No',
                                'title' => 'Available Every Week',
                                'yes'   => 'Yes',
                            ],

                            'location'             => 'Location',
                            'qty'                  => 'Qty',

                            'type'                 => [
                                'appointment' => 'Appointment',
                                'default'     => 'Default',
                                'event'       => 'Event',
                                'many'        => 'Many',
                                'one'         => 'One',
                                'rental'      => 'Rental',
                                'table'       => 'Table',
                                'title'       => 'Type',
                            ],

                            'title'                => 'Booking Type',
                        ],
                    ],
                ],

                'index' => [
                    'booking' => 'Booking',
                ],

                'type' => [
                    'booking' => 'Booking',
                ],
            ],
        ],

        'sales'   => [
            'bookings' => [
                'index' => [
                    'datagrid' => [
                        'created-date' => 'Created Date',
                        'from'         => 'From',
                        'id'           => 'ID',
                        'order-id'     => 'Order ID',
                        'qty'          => 'QTY',
                        'to'           => 'To',
                    ],

                    'title'    => 'Bookings Product',
                ],

                'calendar' => [
                    'booking-date'     => 'Booking Date',
                    'booking-detailes' => 'Booking Details',
                    'canceled'         => 'Canceled',
                    'closed'           => 'Closed',
                    'done'             => 'Done',
                    'order-id'         => 'Order Id',
                    'pending'          => 'Pending',
                    'price'            => 'Price',
                    'status'           => 'Status',
                    'time-slot'        => 'Time Slot:',
                    'view-details'     => 'View Details',
                ],

                'title' => 'Bookings Product',
            ],
        ],
    ],

    'shop'  => [
        'products' => [
            'booking' => [
                'closed'           => 'Closed',

                'cart'             => [
                    'booking-from' => 'Booking From',
                    'booking-till' => 'Booking Till',
                    'daily'        => 'Daily',
                    'event-from'   => 'Event From',
                    'event-ticket' => 'Event Ticket',
                    'event-till'   => 'Event Till',

                    'integrity'    => [
                        'missing_options'        => 'Options are missing for this product.',
                        'select_hourly_duration' => 'Select a slot duration of one hour.',
                    ],

                    'rent-from'    => 'Rent From',
                    'rent-till'    => 'Rent Till',
                    'rent-type'    => 'Rent Type',
                    'renting_type' => 'Rent Type',
                    'special-note' => 'Special Request/Notes',
                ],

                'per-ticket-price' => ':price Per Ticket',
            ],

            'view'    => [
                'types'   => [
                    'booking' => [
                        'event-on'                 => 'Event On',
                        'location'                 => 'Location',
                        'slot-duration-in-minutes' => ':minutes Minutes',
                        'slot-duration'            => 'Slot Duration',
                        'view-on-map'              => 'View on Map',
                    ],
                ],

                'booking' => [
                    'appointment' => [
                        'closed'             => 'Closed',
                        'today-availability' => 'Today Availability',
                    ],

                    'event'       => [
                        'book-your-ticket' => 'Book Your Ticket',
                    ],

                    'rental'      => [
                        'choose-rent-option'       => 'Choose Rent Option',
                        'daily-basis'              => 'Daily Basis',
                        'from'                     => 'From',
                        'hourly-basis'             => 'Hourly Basis',
                        'rent-an-item'             => 'Rent an Item',
                        'select-date'              => 'Select date',
                        'select-rent-time'         => 'Select Rent Time',
                        'select-slot'              => 'Select Slot',
                        'slot'                     => 'Slot',
                        'to'                       => 'To',
                    ],

                    'slots'       => [
                        'book-an-appointment'       => 'Book an Appointment',
                        'date'                      => 'Date',
                        'no-slots-available'        => 'No slots available',
                        'title'                     => 'Slot',
                    ],

                    'table'       => [
                        'book-a-table'             => 'Book a Table',
                        'closed'                   => 'Closed',
                        'slots-for-all-days'       => 'Show for all days',
                        'special-notes'            => 'Special Request/Notes',
                        'today-availability'       => 'Today Availability',
                    ],
                ],
            ],
        ],
    ],
];
