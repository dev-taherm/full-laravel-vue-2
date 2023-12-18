<script setup lang="ts">
import { defineProps } from "vue";
import InputError from "@/Components/InputError.vue";
import InputLabel from "@/Components/InputLabel.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import TextInput from "@/Components/TextInput.vue";
import { Link, useForm, usePage } from "@inertiajs/vue3";
import { onBeforeMount, onMounted } from "vue";
import { initFlowbite } from "flowbite";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";

const props = defineProps<{}>();
onMounted(() => {
    initFlowbite();
});

const form = useForm({
    o_name: "",
    o_username: "",
    o_address: "",
    o_city: "",
    o_phone: "",
    o_bio: "",
});
</script>

<template>
    <AuthenticatedLayout>
        <div>
            <div class="max-w-2xl mx-auto sm:px-6 lg:px-8 space-y-6">
                <div
                    class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg"
                >
                    <section>
                        <header>
                            <h2
                                class="text-lg font-medium text-gray-900 dark:text-gray-100"
                            >
                                Business Information
                            </h2>

                            <p
                                class="mt-1 text-sm text-gray-600 dark:text-gray-400"
                            >
                                Add A Business
                            </p>
                        </header>

                        <form
                            @submit.prevent="form.post(route('seller.store'))"
                            class="mt-6 space-y-6"
                        >
                            <div>
                                <InputLabel
                                    for="username"
                                    value="business name"
                                />

                                <TextInput
                                    id="username"
                                    type="text"
                                    class="mt-1 block w-full"
                                    v-model="form.o_username"
                                    required
                                    autofocus
                                    autocomplete="name"
                                />

                                <InputError
                                    class="mt-2"
                                    :message="form.errors.o_username"
                                />
                            </div>
                            <div>
                                <InputLabel
                                    for="name"
                                    value="business username"
                                />

                                <TextInput
                                    id="name"
                                    type="text"
                                    class="mt-1 block w-full"
                                    v-model="form.o_name"
                                    required
                                    autofocus
                                    autocomplete="name"
                                />

                                <InputError
                                    class="mt-2"
                                    :message="form.errors.o_name"
                                />
                            </div>

                            <div>
                                <InputLabel
                                    for="address"
                                    value="business Address"
                                />

                                <TextInput
                                    id="address"
                                    type="address"
                                    class="mt-1 block w-full"
                                    v-model="form.o_address"
                                    required
                                    autocomplete="address"
                                />

                                <InputError
                                    class="mt-2"
                                    :message="form.errors.o_address"
                                />
                            </div>
                            <label
                                for="business city"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                >Select an option</label
                            >
                            <select
                                id="city"
                                required
                                v-model="form.o_city"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            >
                                <option selected>Choose a city</option>
                                <option value="sanaa">Sana'a</option>
                                <option value="aden">Aden</option>
                                <option value="hadidah">Al-Hadidah</option>
                                <option value="sada">Sada</option>
                                <option value="mokala">Al-Mokala</option>
                                <option value="hadaramot">Hadaramot</option>
                                <option value="mahrah">Al-Mahrah</option>
                            </select>
                            <InputError
                                class="mt-2"
                                :message="form.errors.o_city"
                            />

                            <div>
                                <InputLabel
                                    for="phone"
                                    value="business Phone Number"
                                />

                                <TextInput
                                    id="phone"
                                    type="phone"
                                    class="mt-1 block w-full"
                                    v-model="form.o_phone"
                                    required
                                    autocomplete="phone"
                                />

                                <InputError
                                    class="mt-2"
                                    :message="form.errors.o_phone"
                                />
                            </div>
                            <label
                                for="message"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                >business bio</label
                            >
                            <textarea
                                id="message"
                                rows="4"
                                v-model="form.o_bio"
                                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Write your thoughts here..."
                            ></textarea>
                            <InputError
                                class="mt-2"
                                :message="form.errors.o_bio"
                            />

                            <div class="flex items-center gap-4">
                                <PrimaryButton :disabled="form.processing"
                                    >Save</PrimaryButton
                                >

                                <Transition
                                    enter-active-class="transition ease-in-out"
                                    enter-from-class="opacity-0"
                                    leave-active-class="transition ease-in-out"
                                    leave-to-class="opacity-0"
                                >
                                    <p
                                        v-if="form.recentlySuccessful"
                                        class="text-sm text-gray-600 dark:text-gray-400"
                                    >
                                        Saved.
                                    </p>
                                </Transition>
                            </div>
                        </form>
                    </section>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
