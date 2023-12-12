<script setup lang="ts">
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Link, usePage } from "@inertiajs/vue3";

const { sellers } = usePage().props;
</script>
<template>
    <AuthenticatedLayout>
        <section class="bg-gray-50 dark:bg-gray-900 h-screen flex items-center">
            <div class="max-w-screen-xl px-4 mx-auto lg:px-12 w-full">
                <!-- Start coding here -->
                <div
                    class="relative bg-white shadow-md dark:bg-gray-800 sm:rounded-lg"
                >
                    <div
                        class="flex flex-col items-center justify-between p-4 space-y-3 md:flex-row md:space-y-0 md:space-x-4"
                    >
                        <div class="w-full md:w-1/2"></div>
                        <div
                            class="flex flex-col items-stretch justify-end flex-shrink-0 w-full space-y-2 md:w-auto md:flex-row md:space-y-0 md:items-center md:space-x-3"
                        >
                            <Link
                                :href="route('seller.create')"
                                class="flex items-center justify-center font-medium text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"
                            >
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke-width="1.5"
                                    stroke="currentColor"
                                    class="w-6 h-6"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M12 6v12m6-6H6"
                                    />
                                </svg>

                                Add business
                            </Link>
                        </div>
                    </div>
                    <div
                        class="relative overflow-x-auto shadow-md sm:rounded-lg"
                    >
                        <table
                            class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400"
                        >
                            <thead
                                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400"
                            >
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Business username
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Business name
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Address
                                    </th>
                                    <th scope="col" class="px-6 py-3">City</th>
                                    <th scope="col" class="px-6 py-3">Phone</th>
                                    <th scope="col" class="px-6 py-3">
                                        <span class="sr-only">Edit</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr
                                    v-for="seller in sellers"
                                    :key="seller.id"
                                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700"
                                >
                                    <th
                                        scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white"
                                    >
                                        <Link
                                            :href="
                                                route('seller.show', {
                                                    sellerId: seller.id,
                                                })
                                            "
                                        >
                                            {{ seller.o_username }}
                                        </Link>
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ seller.o_name }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ seller.o_address }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ seller.o_city }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ seller.o_phone }}
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <Link
                                            :href="
                                                route('seller.edit', {
                                                    sellerId: seller.id,
                                                })
                                            "
                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline"
                                            >Edit</Link
                                        >
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </AuthenticatedLayout>
</template>
