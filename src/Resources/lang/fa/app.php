<?php

return [
    'admin' => [
        'catalog' => [
            'products' => [
                'edit'  => [
                    'booking' => [
                        'appointment' => [
                            'break-duration'         => 'زمان استراحت بین اسلات‌ها (دقیقه)',
                            'slot-duration'          => 'مدت زمان اسلات (دقیقه)',

                            'same-slot-for-all-days' => [
                                'no'    => 'خیر',
                                'title' => 'همان اسلات برای تمام روزها',
                                'yes'   => 'بله',
                            ],
                        ],

                        'default'     => [
                            'add'              => 'افزودن',
                            'break-duration'   => 'زمان استراحت بین اسلات‌ها (دقیقه)',
                            'close'            => 'بستن',
                            'description'      => 'اطلاعات رزرو',
                            'description-info' => 'بر اساس اسلات‌ها، مدت زمان ساخته شده و قابل مشاهده خواهد بود.',
                            'edit'             => 'ویرایش',
                            'many'             => 'رزروهای زیاد برای یک روز',

                            'modal'            => [
                                'slot' => [
                                    'add-title'  => 'افزودن اسلات',
                                    'close'      => 'بستن',
                                    'day'        => 'روز',
                                    'edit-title' => 'ویرایش اسلات‌ها',
                                    'friday'     => 'جمعه',
                                    'from'       => 'از',
                                    'from-day'   => 'از روز',
                                    'from-time'  => 'از زمان',
                                    'monday'     => 'دوشنبه',
                                    'open'       => 'باز کردن',
                                    'saturday'   => 'شنبه',
                                    'save'       => 'ذخیره',
                                    'select'     => 'انتخاب',
                                    'status'     => 'وضعیت',
                                    'sunday'     => 'یک‌شنبه',
                                    'thursday'   => 'پنج‌شنبه',
                                    'to'         => 'تا',
                                    'to-day'     => 'تا روز',
                                    'to-time'    => 'تا زمان',
                                    'tuesday'    => 'سه‌شنبه',
                                    'wednesday'  => 'چهارشنبه',
                                    'week'       => ':day',
                                ],
                            ],

                            'one'              => 'یک رزرو برای چند روز',
                            'open'             => 'باز',
                            'slot-add'         => 'افزودن اسلات‌ها',
                            'slot-title'       => 'مدت زمان اسلات',
                            'slot-duration'    => 'مدت زمان اسلات (دقیقه)',
                            'title'            => 'پیش‌فرض',
                            'unavailable'      => 'غیر قابل دسترسی',
                        ],

                        'event'       => [
                            'add'                => 'افزودن بلیت',
                            'delete'             => 'حذف',
                            'description-info'   => 'هیچ بلیتی در دسترس نیست.',
                            'description'        => 'توضیحات',
                            'edit'               => 'ویرایش',

                            'modal'              => [
                                'save' => 'ذخیره',
                            ],

                            'name'               => 'نام',
                            'price'              => 'قیمت',
                            'qty'                => 'تعداد',
                            'special-price-from' => 'قیمت ویژه از',
                            'special-price-to'   => 'قیمت ویژه تا',
                            'special-price'      => 'قیمت ویژه',
                            'title'              => 'بلیت‌ها',
                            'valid-from'         => 'معتبر از',
                            'valid-until'        => 'معتبر تا',
                        ],

                        'empty-info'  => [
                            'tickets' => [
                                'add' => 'افزودن بلیت',
                            ],

                            'slots'   => [
                                'add'         => 'افزودن اسلات‌ها',
                                'description' => 'اسلات‌های موجود با مدت زمان.',
                            ],
                        ],

                        'rental'      => [
                            'daily-hourly'           => 'هر دو (روزانه و ساعتی)',
                            'daily-price'            => 'قیمت روزانه',
                            'daily'                  => 'بر اساس روز',
                            'hourly-price'           => 'قیمت ساعتی',
                            'hourly'                 => 'بر اساس ساعت',

                            'same-slot-for-all-days' => [
                                'no'    => 'خیر',
                                'title' => 'همان اسلات برای تمام روزها',
                                'yes'   => 'بله',
                            ],

                            'title'                  => 'نوع اجاره',
                        ],

                        'slots'       => [
                            'add'              => 'افزودن اسلات‌ها',

                            'action'           => [
                                'add' => 'افزودن',
                            ],

                            'description-info' => 'بر اساس اسلات‌ها، مدت زمان ساخته شده و قابل مشاهده خواهد بود.',

                            'modal'            => [
                                'slot' => [
                                    'friday'     => 'جمعه',
                                    'from'       => 'از',
                                    'monday'     => 'دوشنبه',
                                    'saturday'   => 'شنبه',
                                    'sunday'     => 'یک‌شنبه',
                                    'thursday'   => 'پنج‌شنبه',
                                    'to'         => 'تا',
                                    'tuesday'    => 'سه‌شنبه',
                                    'wednesday'  => 'چهارشنبه',
                                ],
                            ],

                            'save'             => 'ذخیره',
                            'title'            => 'مدت زمان اسلات',
                            'unavailable'      => 'در دسترس نیست',
                        ],

                        'table'       => [
                            'break-duration'            => 'زمان استراحت بین اسلات‌ها (دقیقه)',

                            'charged-per'               => [
                                'guest'  => 'مهمان',
                                'table'  => 'میز',
                                'title'  => 'هزینه بر اساس',
                            ],

                            'guest-capacity'            => 'ظرفیت مهمان',
                            'guest-limit'               => 'محدودیت مهمان برای هر میز',
                            'prevent-scheduling-before' => 'جلوگیری از برنامه‌ریزی قبل از',
                            'slot-duration'             => 'مدت زمان اسلات (دقیقه)',

                            'same-slot-for-all-days'    => [
                                'no'    => 'خیر',
                                'title' => 'همان اسلات برای تمام روزها',
                                'yes'   => 'بله',
                            ],
                        ],
                    ],

                    'types'   => [
                        'booking' => [
                            'available-from'       => 'موجود از',
                            'available-to'         => 'موجود تا',

                            'available-every-week' => [
                                'no'    => 'نه',
                                'title' => 'هر هفته موجود است',
                                'yes'   => 'بله',
                            ],

                            'location'             => 'موقعیت',
                            'qty'                  => 'تعداد',

                            'type'                 => [
                                'appointment' => 'قرار ملاقات',
                                'default'     => 'پیش‌فرض',
                                'event'       => 'رویداد',
                                'many'        => 'بسیاری',
                                'one'         => 'یک',
                                'rental'      => 'اجاره',
                                'table'       => 'میز',
                                'title'       => 'نوع',
                            ],

                            'title'                => 'نوع رزرو',
                        ],
                    ],
                ],

                'index' => [
                    'booking' => 'رزرو',
                ],

                'type' => [
                    'booking' => 'رزرو',
                ],
            ],
        ],

        'sales'   => [
            'bookings' => [
                'calendar' => [
                    'booking-date'     => 'تاریخ رزرو',
                    'booking-detailes' => 'جزئیات رزرو',
                    'canceled'         => 'لغو شده',
                    'closed'           => 'بسته',
                    'done'             => 'انجام شده',
                    'order-id'         => 'شناسه سفارش',
                    'pending'          => 'در انتظار',
                    'price'            => 'قیمت',
                    'status'           => 'وضعیت',
                    'time-slot'        => 'تایم‌اسلات:',
                    'view-details'     => 'مشاهده جزئیات',
                ],

                'index' => [
                    'datagrid' => [
                        'created-date' => 'تاریخ ایجاد',
                        'from'         => 'از',
                        'id'           => 'شناسه',
                        'order-id'     => 'شناسه سفارش',
                        'qty'          => 'تعداد',
                        'to'           => 'تا',
                    ],

                    'title' => 'محصول رزروها',
                ],

                'title' => 'محصول رزروها',
            ],
        ],
    ],

    'shop'  => [
        'products' => [
            'booking' => [
                'closed'           => 'بسته شده',

                'cart'             => [
                    'booking-from' => 'رزرو از',
                    'booking-till' => 'رزرو تا',
                    'daily'        => 'روزانه',
                    'event-from'   => 'رویداد از',
                    'event-ticket' => 'بلیط رویداد',
                    'event-till'   => 'رویداد تا',

                    'integrity'    => [
                        'missing_options'        => 'گزینه‌ها برای این محصول وجود ندارند.',
                        'select_hourly_duration' => 'یک مدت زمان شکاف از یک ساعت انتخاب کنید.',
                    ],

                    'rent-from'    => 'اجاره از',
                    'rent-till'    => 'اجاره تا',
                    'rent-type'    => 'نوع اجاره',
                    'renting_type' => 'نوع اجاره',
                    'special-note' => 'درخواست‌های ویژه/یادداشت‌ها',
                ],

                'per-ticket-price' => ':price در هر بلیط',
            ],

            'view' => [
                'types' => [
                    'booking' => [
                        'event-on'                 => 'رویداد در',
                        'location'                 => 'مکان',
                        'slot-duration-in-minutes' => ':minutes دقیقه',
                        'slot-duration'            => 'مدت زمان شکاف',
                        'view-on-map'              => 'نمایش در نقشه',
                    ],
                ],

                'booking' => [
                    'appointment' => [
                        'closed'             => 'بسته شده',
                        'today-availability' => 'دسترسی امروز',
                    ],

                    'event' => [
                        'book-your-ticket' => 'رزرو بلیط خود را',
                    ],

                    'rental' => [
                        'choose-rent-option' => 'انتخاب گزینه اجاره',
                        'daily-basis'        => 'بر اساس روزانه',
                        'from'               => 'از',
                        'hourly-basis'       => 'بر اساس ساعتی',
                        'rent-an-item'       => 'اجاره یک مورد',
                        'select-date'        => 'انتخاب تاریخ',
                        'select-rent-time'   => 'انتخاب زمان اجاره',
                        'select-slot'        => 'انتخاب شکاف',
                        'slot'               => 'شکاف',
                        'to'                 => 'تا',
                    ],

                    'slots' => [
                        'book-an-appointment' => 'رزرو یک جلسه',
                        'date'                => 'تاریخ',
                        'no-slots-available'  => 'هیچ شکافی در دسترس نیست',
                        'title'               => 'شکاف',
                    ],

                    'table' => [
                        'book-a-table'       => 'رزرو یک میز',
                        'closed'             => 'بسته شده',
                        'slots-for-all-days' => 'نمایش برای تمام روزها',
                        'special-notes'      => 'درخواست‌های ویژه/یادداشت‌ها',
                        'today-availability' => 'دسترسی امروز',
                    ],
                ],
            ],
        ],
    ],
];
