<?php

return [
    'admin' => [
        'catalog' => [
            'products' => [
                'edit'  => [
                    'booking' => [
                        'appointment' => [
                            'break-duration'         => 'स्लॉट के बीच विराम समय (मिनट)',
                            'slot-duration'          => 'स्लॉट की अवधि (मिनट)',

                            'same-slot-for-all-days' => [
                                'no'    => 'नहीं',
                                'title' => 'सभी दिनों के लिए समान स्लॉट',
                                'yes'   => 'हाँ',
                            ],
                        ],

                        'default'     => [
                            'add'              => 'जोड़ें',
                            'break-duration'   => 'स्लॉट के बीच विराम समय (मिनट)',
                            'close'            => 'बंद करें',
                            'description'      => 'बुकिंग जानकारी',
                            'description-info' => 'स्लॉट्स के अनुसार समय अवधि बनाई जाएगी और दिखाई जाएगी।',
                            'edit'             => 'संपादित करें',
                            'many'             => 'एक दिन के लिए कई बुकिंगें',

                            'modal'            => [
                                'slot' => [
                                    'add-title'  => 'स्लॉट जोड़ें',
                                    'close'      => 'बंद करें',
                                    'day'        => 'दिन',
                                    'edit-title' => 'स्लॉट संपादित करें',
                                    'friday'     => 'शुक्रवार',
                                    'from'       => 'से',
                                    'from-day'   => 'से दिन',
                                    'from-time'  => 'से समय',
                                    'monday'     => 'सोमवार',
                                    'open'       => 'खोलें',
                                    'saturday'   => 'शनिवार',
                                    'save'       => 'सुरक्षित करें',
                                    'select'     => 'चयन करें',
                                    'status'     => 'स्थिति',
                                    'sunday'     => 'रविवार',
                                    'thursday'   => 'गुरूवार',
                                    'to'         => 'तक',
                                    'to-day'     => 'तक दिन',
                                    'to-time'    => 'तक समय',
                                    'tuesday'    => 'मंगलवार',
                                    'wednesday'  => 'बुधवार',
                                    'week'       => ':day',
                                ],
                            ],

                            'one'              => 'एक दिन के लिए एक बुकिंग',
                            'open'             => 'खोलें',
                            'slot-add'         => 'स्लॉट जोड़ें',
                            'slot-title'       => 'स्लॉट समय अवधि',
                            'slot-duration'    => 'स्लॉट की अवधि (मिनट)',
                            'title'            => 'डिफ़ॉल्ट',
                            'unavailable'      => 'अनुपलब्ध',
                        ],

                        'event'       => [
                            'add'                => 'टिकट जोड़ें',
                            'delete'             => 'हटाएं',
                            'description-info'   => 'कोई टिकट उपलब्ध नहीं है।',
                            'description'        => 'विवरण',
                            'edit'               => 'संपादित करें',

                            'modal'              => [
                                'save' => 'सुरक्षित करें',
                            ],

                            'name'               => 'नाम',
                            'price'              => 'मूल्य',
                            'qty'                => 'मात्रा',
                            'special-price-from' => 'विशेष मूल्य से',
                            'special-price-to'   => 'विशेष मूल्य तक',
                            'special-price'      => 'विशेष मूल्य',
                            'title'              => 'टिकट्स',
                            'valid-from'         => 'मान्यता प्राप्त होने की तिथि',
                            'valid-until'        => 'मान्यता रखने की तिथि',
                        ],

                        'empty-info'  => [
                            'tickets' => [
                                'add' => 'टिकट जोड़ें',
                            ],

                            'slots'   => [
                                'add'         => 'स्लॉट जोड़ें',
                                'description' => 'उपलब्ध स्लॉट्स समय अवधि के साथ।',
                            ],
                        ],

                        'rental'      => [
                            'daily-hourly'           => 'दोनों (दैनिक और प्रति घंटा)',
                            'daily-price'            => 'दैनिक मूल्य',
                            'daily'                  => 'दैनिक आधार पर',
                            'hourly-price'           => 'प्रति घंटा मूल्य',
                            'hourly'                 => 'प्रति घंटा आधार पर',

                            'same-slot-for-all-days' => [
                                'no'    => 'नहीं',
                                'title' => 'सभी दिनों के लिए समान स्लॉट',
                                'yes'   => 'हाँ',
                            ],

                            'title'                  => 'किराया प्रकार',
                        ],

                        'slots'       => [
                            'add'              => 'स्लॉट जोड़ें',

                            'action'           => [
                                'add' => 'जोड़ें',
                            ],

                            'description-info' => 'स्लॉट्स के अनुसार समय अवधि बनाई जाएगी और दिखाई जाएगी।',

                            'modal'            => [
                                'slot' => [
                                    'friday'     => 'शुक्रवार',
                                    'from'       => 'से',
                                    'monday'     => 'सोमवार',
                                    'saturday'   => 'शनिवार',
                                    'sunday'     => 'रविवार',
                                    'thursday'   => 'गुरुवार',
                                    'to'         => 'तक',
                                    'tuesday'    => 'मंगलवार',
                                    'wednesday'  => 'बुधवार',
                                ],
                            ],

                            'save'             => 'सहेजें',
                            'title'            => 'स्लॉट समय अवधि',
                            'unavailable'      => 'अनुपलब्ध',
                        ],

                        'table'       => [
                            'break-duration'            => 'स्लॉट के बीच विराम समय (मिनट)',

                            'charged-per'               => [
                                'guest'  => 'अतिथि',
                                'table'  => 'मेज़',
                                'title'  => 'प्रति चार्ज',
                            ],

                            'guest-capacity'            => 'अतिथि क्षमता',
                            'guest-limit'               => 'प्रति मेज़ अतिथि सीमा',
                            'prevent-scheduling-before' => 'पहले निर्धारित करने से रोकें',
                            'slot-duration'             => 'स्लॉट की अवधि (मिनट)',

                            'same-slot-for-all-days'    => [
                                'no'    => 'नहीं',
                                'title' => 'सभी दिनों के लिए समान स्लॉट',
                                'yes'   => 'हाँ',
                            ],
                        ],
                    ],

                    'types'   => [
                        'booking' => [
                            'available-from' => 'यहाँ से उपलब्ध',
                            'available-to'   => 'यहाँ तक उपलब्ध',

                            'available-every-week'      => [
                                'no'    => 'नहीं',
                                'title' => 'हर हफ्ते उपलब्ध',
                                'yes'   => 'हाँ',
                            ],

                            'location' => 'स्थान',
                            'qty'      => 'मात्रा',

                            'type' => [
                                'appointment' => 'अपॉइंटमेंट',
                                'default'     => 'डिफ़ॉल्ट',
                                'event'       => 'इवेंट',
                                'many'        => 'बहुत',
                                'one'         => 'एक',
                                'rental'      => 'किराया',
                                'table'       => 'तालिका',
                                'title'       => 'प्रकार',
                            ],

                            'title' => 'बुकिंग प्रकार',
                        ],
                    ],
                ],

                'index' => [
                    'booking' => 'बुकिंग',
                ],

                'type' => [
                    'booking' => 'बुकिंग',
                ],
            ],
        ],

        'sales'   => [
            'bookings' => [
                'calendar' => [
                    'booking-date'     => 'बुकिंग दिनांक',
                    'booking-detailes' => 'बुकिंग विवरण',
                    'canceled'         => 'रद्द',
                    'closed'           => 'बंद',
                    'done'             => 'संपन्न',
                    'order-id'         => 'आदेश आईडी',
                    'pending'          => 'अपूर्ण',
                    'price'            => 'मूल्य',
                    'status'           => 'स्थिति',
                    'time-slot'        => 'समय स्लॉट:',
                    'view-details'     => 'विवरण देखें',
                ],

                'index' => [
                    'datagrid' => [
                        'created-date' => 'बनाया गया तिथि',
                        'from'         => 'से',
                        'id'           => 'आईडी',
                        'order-id'     => 'आदेश आईडी',
                        'qty'          => 'मात्रा',
                        'to'           => 'तक',
                    ],

                    'title'    => 'बुकिंग्स प्रोडक्ट',
                ],

                'title' => 'बुकिंग्स प्रोडक्ट',
            ],
        ],
    ],

    'shop'  => [
        'products' => [
            'booking' => [
                'closed'           => 'बंद',

                'cart'             => [
                    'booking-from' => 'बुकिंग से',
                    'booking-till' => 'बुकिंग तक',
                    'daily'        => 'दैनिक',
                    'event-from'   => 'इवेंट से',
                    'event-ticket' => 'इवेंट टिकट',
                    'event-till'   => 'इवेंट तक',

                    'integrity'    => [
                        'missing_options'        => 'इस प्रोडक्ट के लिए विकल्प गायब हैं।',
                        'select_hourly_duration' => 'एक घंटे की स्लॉट अवधि का चयन करें।',
                    ],

                    'rent-from'    => 'किराया से',
                    'rent-till'    => 'किराया तक',
                    'rent-type'    => 'किराया प्रकार',
                    'renting_type' => 'किराया प्रकार',
                    'special-note' => 'विशेष अनुरोध/नोट्स',
                ],

                'per-ticket-price' => ':price प्रति टिकट',
            ],

            'view'    => [
                'types'   => [
                    'booking' => [
                        'event-on'                 => 'इवेंट पर',
                        'location'                 => 'स्थान',
                        'slot-duration-in-minutes' => ':minutes मिनट',
                        'slot-duration'            => 'स्लॉट अवधि',
                        'view-on-map'              => 'नक्शे पर देखें',
                    ],
                ],

                'booking' => [
                    'appointment' => [
                        'closed'             => 'बंद',
                        'today-availability' => 'आज की उपलब्धता',
                    ],

                    'event'       => [
                        'book-your-ticket' => 'अपना टिकट बुक करें',
                    ],

                    'rental'      => [
                        'choose-rent-option' => 'किराया विकल्प चुनें',
                        'daily-basis'        => 'दैनिक आधार',
                        'from'               => 'से',
                        'hourly-basis'       => 'प्रति घंटा आधार',
                        'rent-an-item'       => 'वस्त्र किराए पर लें',
                        'select-date'        => 'तारीख चुनें',
                        'select-rent-time'   => 'किराया समय चुनें',
                        'select-slot'        => 'स्लॉट चुनें',
                        'slot'               => 'स्लॉट',
                        'to'                 => 'तक',
                    ],

                    'slots'       => [
                        'book-an-appointment' => 'अपॉइंटमेंट बुक करें',
                        'date'                => 'तारीख',
                        'no-slots-available'  => 'कोई स्लॉट उपलब्ध नहीं है',
                        'title'               => 'स्लॉट',
                    ],

                    'table'       => [
                        'book-a-table'       => 'तालिका बुक करें',
                        'closed'             => 'बंद',
                        'slots-for-all-days' => 'सभी दिनों के लिए दिखाएं',
                        'special-notes'      => 'विशेष अनुरोध/नोट्स',
                        'today-availability' => 'आज की उपलब्धता',
                    ],
                ],
            ],
        ],
    ],
];
