{!! view_render_event('bagisto.admin.catalog.product.edit.booking.event.before', ['product' => $product]) !!}

<v-event-booking />

{!! view_render_event('bagisto.admin.catalog.product.edit.booking.event.after', ['product' => $product]) !!}

@pushOnce('scripts')
    <script
        type="text/x-template"
        id="v-event-booking-template"
    >
        <!-- Tickets Component -->
        <div class="flex gap-5 justify-between items-center py-2">
            <div class="flex flex-col gap-2">
                <p class="text-base text-gray-800 dark:text-white font-semibold">
                    @lang('booking::app.admin.catalog.products.edit.booking.event.title')
                </p>
            </div>

            <!-- Add Ticket Button -->
            <div class="flex gap-x-1 items-center">
                <div
                    class="secondary-button"
                    @click="$refs.drawerform.toggle()"
                >
                    @lang('booking::app.admin.catalog.products.edit.booking.event.add')
                </div>
            </div>
        </div>

         <!-- Table Information -->
         <div class="overflow-x-auto">
            <template
                v-if="tickets?.length" 
                v-for="(element, index) in tickets"
            >
                <div class="border-b border-slate-300 dark:border-gray-800 last:border-b-0 ">
                    <div class="flex gap-2.5 my-2.5 justify-between">
                        <div class="grid gap-1 place-content-start">
                            <!-- Hidden Inputs -->
                            <input
                                type="hidden"
                                :name="'booking[tickets][ticket_' + index + '][' + currentLocaleCode + '][name]'"
                                :value="element.name"
                            />

                            <input
                                type="hidden"
                                :name="'booking[tickets][ticket_' + index + '][qty]'"
                                :value="element.qty"
                            />

                            <input
                                type="hidden"
                                :name="'booking[tickets][ticket_' + index + '][price]'"
                                :value="element.price"
                            />

                            <input
                                type="hidden"
                                :name="'booking[tickets][ticket_' + index + '][special_price]'"
                                :value="element.special_price"
                            />

                            <input
                                type="hidden"
                                :name="'booking[tickets][ticket_' + index + '][special_price_from]'"
                                :value="element.special_price_from"
                            />

                            <input
                                type="hidden"
                                :name="'booking[tickets][ticket_' + index + '][special_price_to]'"
                                :value="element.special_price_to"
                            />

                            <input
                                type="hidden"
                                :name="'booking[tickets][ticket_' + index + '][' + currentLocaleCode + '][description]'"
                                :value="element.description"
                            />

                            <!-- Name-->
                            <p
                                class="text-base dark:text-gray-300"
                                v-text="element.name"
                            >
                            </p>

                            <p class="flex gap-2">
                                <!-- Price -->
                                <span
                                    class="text-sm font-normal dark:text-gray-300"
                                    v-if="element.price"
                                >
                                    @lang('booking::app.admin.catalog.products.edit.booking.event.price') - @{{ element.price }},
                                </span>

                                <!-- Special Price -->
                                <span
                                    class="text-sm font-normal dark:text-gray-300"
                                    v-if="element.special_price"
                                >
                                    @lang('booking::app.admin.catalog.products.edit.booking.event.special-price') - @{{ element.special_price }},
                                </span>
    
                                 <!-- Qty -->
                                <span class="text-sm font-normal dark:text-gray-300">
                                    @lang('booking::app.admin.catalog.products.edit.booking.event.qty') - @{{ element.qty }}
                                </span>
                            </p>

                            <p class="text-gray-600 dark:text-gray-300">
                                <!-- Valid From -->
                                <span
                                    class="text-sm text-gray-600 dark:text-gray-300"
                                    v-if="element.special_price_from"
                                >
                                    @lang('booking::app.admin.catalog.products.edit.booking.event.special-price-from') - @{{ element.special_price_from }},
                                </span>

                                <!-- Valid Until -->
                                <span
                                    class="text-sm text-gray-600 dark:text-gray-300"
                                    v-if="element.special_price_to"
                                >
                                    @lang('booking::app.admin.catalog.products.edit.booking.event.special-price-to') - @{{ element.special_price_to }}
                                </span>
                            </p>

                            <!-- Description -->
                            <p class="text-gray-600 dark:text-gray-300">
                                @lang('booking::app.admin.catalog.products.edit.booking.event.description') - @{{ element.description }}
                            </p>
                        </div>
                        
                        <!-- Actions -->
                        <div class="flex gap-x-5 place-content-start text-right">
                            <p
                                class="text-blue-600 cursor-pointer transition-all hover:underline"
                                @click="edit(element)"
                            >
                                @lang('booking::app.admin.catalog.products.edit.booking.event.edit')
                            </p>
                            
                            <p
                                class="text-red-600 cursor-pointer transition-all hover:underline"
                                @click="remove(element.id)"
                            >
                                @lang('booking::app.admin.catalog.products.edit.booking.event.delete')
                            </p>
                        </div>
                    </div>
                </div>
            </template>

            <!-- For Empty Illustration -->
            <div v-else>
                <v-empty-info ::type="event" />
            </div>
        </div>

        <!-- Add Drawe Form -->
        <x-admin::form
            v-slot="{ meta, errors, handleSubmit }"
            as="div"
            ref="modelForm"
        >
            <form @submit.prevent="handleSubmit($event, store)">
                <x-admin::drawer ref="drawerform">
                    <x-slot:header>
                        <div class="flex justify-between items-center">
                            <p class="my-2.5 text-xl font-medium dark:text-white">
                                @lang('booking::app.admin.catalog.products.edit.booking.event.add')
                            </p>
        
                            <div class="ltr:mr-11 rtl:ml-11">
                                <button
                                    type="submit"
                                    class="primary-button"
                                >
                                    @lang('booking::app.admin.catalog.products.edit.booking.event.modal.save')
                                </button>
                            </div>
                        </div>
                    </x-slot:header>
        
                    <x-slot:content class="px-4">
                        <div class="grid grid-cols-2 gap-4">
                            <!-- ID -->
                            <x-admin::form.control-group.control
                                type="hidden"
                                name="id"
                            />

                            <!-- Name -->
                            <x-admin::form.control-group>
                                <x-admin::form.control-group.label class="required">
                                    @lang('booking::app.admin.catalog.products.edit.booking.event.name')
                                </x-admin::form.control-group.label>
            
                                <x-admin::form.control-group.control
                                    type="text"
                                    name="name"
                                    rules="required"
                                    :label="trans('booking::app.admin.catalog.products.edit.booking.event.name')"
                                    :placeholder="trans('booking::app.admin.catalog.products.edit.booking.event.name')"
                                />

                                <x-admin::form.control-group.error control-name="name" />
                            </x-admin::form.control-group>

                            <!-- Quantity -->
                            <x-admin::form.control-group>
                                <x-admin::form.control-group.label class="required">
                                    @lang('booking::app.admin.catalog.products.edit.booking.event.qty')
                                </x-admin::form.control-group.label>
            
                                <x-admin::form.control-group.control
                                    type="text"
                                    name="qty"
                                    rules="required|min_value:0"
                                    :label="trans('booking::app.admin.catalog.products.edit.booking.event.qty')"
                                    :placeholder="trans('booking::app.admin.catalog.products.edit.booking.event.qty')"
                                />
            
                                <x-admin::form.control-group.error control-name="qty" />
                            </x-admin::form.control-group>
                        </div>

                        <div class="grid grid-cols-2 gap-4">
                            <!-- Price -->
                            <x-admin::form.control-group>
                                <x-admin::form.control-group.label class="required">
                                    @lang('booking::app.admin.catalog.products.edit.booking.event.price')
                                </x-admin::form.control-group.label>
            
                                <x-admin::form.control-group.control
                                    type="text"
                                    name="price"
                                    rules="required"
                                    v-model="price"
                                    :label="trans('booking::app.admin.catalog.products.edit.booking.event.price')"
                                    :placeholder="trans('booking::app.admin.catalog.products.edit.booking.event.price')"
                                />

                                <x-admin::form.control-group.error control-name="price" />
                            </x-admin::form.control-group>

                            <!-- Special Price -->
                            <x-admin::form.control-group>
                                <x-admin::form.control-group.label>
                                    @lang('booking::app.admin.catalog.products.edit.booking.event.special-price')
                                </x-admin::form.control-group.label>

                                <x-admin::form.control-group.control
                                    type="number"
                                    name="special_price"
                                    ::rules="'min_value:0|max_value:' + price"
                                    v-model="special_price"
                                    :label="trans('booking::app.admin.catalog.products.edit.booking.event.special-price')"
                                    :placeholder="trans('booking::app.admin.catalog.products.edit.booking.event.special-price')"
                                    ::disabled="! price"
                                />

                                <x-admin::form.control-group.error control-name="special_price" />
                            </x-admin::form.control-group>
                        </div>

                        <div class="grid grid-cols-2 gap-4">
                            <!-- Special Price From -->
                            <x-booking::form.control-group>
                                <x-booking::form.control-group.label>
                                    @lang('booking::app.admin.catalog.products.edit.booking.event.valid-from')
                                </x-booking::form.control-group.label>

                                <x-booking::form.control-group.control
                                    type="datetime"
                                    name="special_price_from"
                                    ::rules="special_price" 
                                    v-model="special_price_from"
                                    ::disabled="!special_price"
                                    :label="trans('booking::app.admin.catalog.products.edit.booking.event.valid-from')"
                                    :placeholder="trans('booking::app.admin.catalog.products.edit.booking.event.valid-from')"
                                />

                                <x-booking::form.control-group.error control-name="special_price_from" />
                            </x-booking::form.control-group>

                            <!-- Special Price To -->
                            <x-admin::form.control-group>
                                <x-admin::form.control-group.label>
                                    @lang('booking::app.admin.catalog.products.edit.booking.event.valid-until')
                                </x-admin::form.control-group.label>

                                <x-admin::form.control-group.control
                                    type="datetime"
                                    name="special_price_to"
                                    ::rules="special_price_from ? 'after:' + special_price_from : ''"
                                    :label="trans('booking::app.admin.catalog.products.edit.booking.event.valid-until')"
                                    :placeholder="trans('booking::app.admin.catalog.products.edit.booking.event.valid-until')"
                                    ::disabled="! special_price"
                                />
            
                                <x-admin::form.control-group.error control-name="special_price_to" />
                            </x-admin::form.control-group>
                        </div>

                        <!-- Description -->
                        <x-admin::form.control-group class="!mb-0">
                            <x-admin::form.control-group.label class="required">
                                @lang('booking::app.admin.catalog.products.edit.booking.event.description')
                            </x-admin::form.control-group.label>
        
                            <x-admin::form.control-group.control
                                type="textarea"
                                name="[description]"
                                rules="required"
                                :label="trans('booking::app.admin.catalog.products.edit.booking.event.description')"
                                :placeholder="trans('booking::app.admin.catalog.products.edit.booking.event.description')"
                                rows="9"
                            />

                            <x-admin::form.control-group.error control-name="[description]" />
                        </x-admin::form.control-group>
                    </x-slot:content>
                </x-admin::drawer>
            </form>
        </x-admin::form>
    </script>

    <script type="module">
        app.component('v-event-booking', {
            template: '#v-event-booking-template',

            data() {
                return {
                    tickets: @json($bookingProduct ? $bookingProduct->event_tickets()->get() : []),

                    optionRowCount: 0,

                    currentLocaleCode: @json(core()->getCurrentLocale()->code),

                    special_price: '', 

                    yesterday: '{{ \Carbon\Carbon::yesterday()->format('Y-m-d 23:59:59') }}'
                }
            },

            computed: {
                special_price() {
                    return this.special_price ? `after:${this.yesterday}` : '';
                }
            },

            methods: {
                store(params) {
                    if (! params.id) {
                            this.optionRowCount++;
                            params.id = 'option_' + this.optionRowCount;
                        }

                        let foundIndex = this.tickets.findIndex(item => item.id === params.id);

                        if (foundIndex !== -1) {
                            this.tickets[foundIndex] = { 
                                ...this.tickets[foundIndex].params, 
                                ...params
                            };
                        } else {
                            this.tickets.push(params);
                        }

                    this.$refs.drawerform.toggle();
                },

                edit(values) {
                    this.$refs.modelForm.setValues(values);

                    this.$refs.drawerform.toggle();
                },

                remove(id) {
                    this.$emitter.emit('open-confirm-modal', {
                        agree: () => {
                            this.tickets = this.tickets.filter(option => option.id !== id);
                        },
                    });
                },
            }
        });
    </script>
@endpushOnce
