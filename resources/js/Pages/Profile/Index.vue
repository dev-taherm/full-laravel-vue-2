<template>
    <AuthenticatedLayout>
        <div
            class="relative flex flex-col w-full min-w-0 mb-6 break-words border bg-clip-border rounded-2xl border-stone-200 bg-light/30 draggable"
        >
            <!-- card body -->
            <div class="px-9 pt-9 flex-auto min-h-[70px] pb-0 bg-transparent">
                <div class="flex flex-wrap mb-6 xl:flex-nowrap">
                    <div class="mb-5 mr-5">
                        <div class="relative inline-block shrink-0 rounded-2xl">
                            <img
                                class="inline-block shrink-0 rounded-2xl w-[80px] h-[80px] lg:w-[160px] lg:h-[160px]"
                                src="/avater.jpg"
                                alt="image"
                            />
                            <!-- <div class="group/tooltip relative">
                                <span
                                    class="w-[15px] h-[15px] absolute bg-success rounded-full bottom-0 end-0 -mb-1 -mr-2 border border-white"
                                ></span>
                                <span
                                    class="text-xs absolute z-10 transition-opacity duration-300 ease-in-out px-3 py-2 whitespace-nowrap text-center transform bg-white rounded-2xl shadow-sm bottom-0 -mb-2 start-full ml-4 font-medium text-secondary-inverse group-hover/tooltip:opacity-100 opacity-0 block"
                                >
                                    Status: Active
                                </span>
                            </div> -->
                        </div>
                    </div>
                    <div class="grow">
                        <div
                            class="flex flex-wrap items-start justify-between mb-2"
                        >
                            <div class="flex flex-col">
                                <div class="flex items-center mb-2">
                                    <a
                                        class="text-secondary-inverse dark:text-gray-100 hover:text-primary transition-colors duration-200 ease-in-out font-semibold text-[1.5rem] mr-1"
                                        href="javascript:void(0)"
                                    >
                                        {{ $page.props.auth.user.name }}
                                    </a>
                                </div>
                                <div
                                    class="flex flex-wrap pr-2 mb-4 font-medium"
                                >
                                    <a
                                        class="flex items-center mb-2 mr-5 text-secondary-dark dark:text-gray-100 hover:text-primary"
                                        href="javascript:void(0)"
                                    >
                                        <span class="mr-1">
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 24 24"
                                                fill="currentColor"
                                                class="w-5 h-5"
                                            >
                                                <path
                                                    fill-rule="evenodd"
                                                    d="M11.54 22.351l.07.04.028.016a.76.76 0 00.723 0l.028-.015.071-.041a16.975 16.975 0 001.144-.742 19.58 19.58 0 002.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 00-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 002.682 2.282 16.975 16.975 0 001.145.742zM12 13.5a3 3 0 100-6 3 3 0 000 6z"
                                                    clip-rule="evenodd"
                                                />
                                            </svg>
                                        </span>
                                        New York, NY
                                    </a>
                                    <a
                                        class="flex items-center mb-2 mr-5 dark:text-gray-100 text-secondary-dark hover:text-primary"
                                        href="javascript:void(0)"
                                    >
                                        <span class="mr-1">
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 24 24"
                                                fill="currentColor"
                                                class="w-5 h-5"
                                            >
                                                <path
                                                    d="M1.5 8.67v8.58a3 3 0 003 3h15a3 3 0 003-3V8.67l-8.928 5.493a3 3 0 01-3.144 0L1.5 8.67z"
                                                />
                                                <path
                                                    d="M22.5 6.908V6.75a3 3 0 00-3-3h-15a3 3 0 00-3 3v.158l9.714 5.978a1.5 1.5 0 001.572 0L22.5 6.908z"
                                                />
                                            </svg>
                                        </span>
                                        {{ $page.props.auth.user.email }}
                                    </a>
                                </div>
                            </div>
                            <div class="flex flex-wrap my-auto">
                                <button
                                    type="button"
                                    class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                >
                                    Follow
                                </button>
                                <button
                                    type="button"
                                    class="text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800"
                                >
                                    Message
                                </button>
                                <button
                                    type="button"
                                    class="text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800"
                                >
                                    Hire
                                </button>
                            </div>
                        </div>
                        <div class="flex flex-wrap justify-between">
                            <div class="flex flex-wrap items-center">
                                <a
                                    href="javascript:void(0)"
                                    class="mr-3 mb-2 inline-flex items-center justify-center text-secondary-inverse rounded-full bg-neutral-100 hover:bg-neutral-200 transition-all duration-200 ease-in-out px-3 py-1 text-sm font-medium leading-normal"
                                >
                                    320 Following
                                </a>
                                <a
                                    href="javascript:void(0)"
                                    class="mr-3 mb-2 inline-flex items-center justify-center text-secondary-inverse rounded-full bg-neutral-100 hover:bg-neutral-200 transition-all duration-200 ease-in-out px-3 py-1 text-sm font-medium leading-normal"
                                >
                                    2.5k Followers
                                </a>
                                <a
                                    href="javascript:void(0)"
                                    class="mr-3 mb-2 inline-flex items-center justify-center text-secondary-inverse rounded-full bg-neutral-100 hover:bg-neutral-200 transition-all duration-200 ease-in-out px-3 py-1 text-sm font-medium leading-normal"
                                >
                                    48 Deals
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="w-full h-px border-neutral-200" />
                <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
                    <ul
                        class="flex flex-wrap -mb-px text-sm font-medium text-center text-gray-500 dark:text-gray-400"
                        id="tabs-example"
                        role="tablist"
                    >
                        <li class="me-2" role="presentation">
                            <button
                                class="inline-block rounded-t-lg border-b-2 border-transparent p-4 hover:border-gray-300 hover:text-gray-600 dark:hover:text-gray-300"
                                id="profile-tab-example"
                                type="button"
                                role="tab"
                                aria-controls="profile-example"
                                aria-selected="false"
                            >
                                Post
                            </button>
                        </li>
                        <li class="me-2" role="presentation">
                            <button
                                class="inline-block rounded-t-lg border-b-2 border-transparent p-4 hover:border-gray-300 hover:text-gray-600 dark:hover:text-gray-300"
                                id="dashboard-tab-example"
                                type="button"
                                role="tab"
                                aria-controls="dashboard-example"
                                aria-selected="false"
                            >
                                Services
                            </button>
                        </li>
                        <li class="me-2" role="presentation">
                            <button
                                class="inline-block rounded-t-lg border-b-2 border-transparent p-4 hover:border-gray-300 hover:text-gray-600 dark:hover:text-gray-300"
                                id="settings-tab-example"
                                type="button"
                                role="tab"
                                aria-controls="settings-example"
                                aria-selected="false"
                            >
                                Requests
                            </button>
                        </li>
                        <li role="presentation">
                            <button
                                class="inline-block rounded-t-lg border-b-2 border-transparent p-4 hover:border-gray-300 hover:text-gray-600 dark:hover:text-gray-300"
                                id="contacts-tab-example"
                                type="button"
                                role="tab"
                                aria-controls="contacts-example"
                                aria-selected="false"
                            >
                                Contacts
                            </button>
                        </li>
                    </ul>
                </div>
                <div id="tabContentExample">
                    <div
                        class="hidden rounded-lg bg-gray-50 p-4 dark:bg-gray-800"
                        id="profile-example"
                        role="tabpanel"
                        aria-labelledby="profile-tab-example"
                    >
                        <p class="text-sm text-gray-500 dark:text-gray-400">
                            This is some placeholder content the
                            <strong
                                class="font-medium text-gray-800 dark:text-white"
                                >Post tab's associated content</strong
                            >. Clicking another tab will toggle the visibility
                            of this one for the next. The tab JavaScript swaps
                            classes to control the content visibility and
                            styling.
                        </p>
                    </div>
                    <div
                        class="hidden rounded-lg bg-gray-50 p-4 dark:bg-gray-800"
                        id="dashboard-example"
                        role="tabpanel"
                        aria-labelledby="dashboard-tab-example"
                    >
                        <p class="text-sm text-gray-500 dark:text-gray-400">
                            This is some placeholder content the
                            <strong
                                class="font-medium text-gray-800 dark:text-white"
                                >Services tab's associated content</strong
                            >. Clicking another tab will toggle the visibility
                            of this one for the next. The tab JavaScript swaps
                            classes to control the content visibility and
                            styling.
                        </p>
                    </div>
                    <div
                        class="hidden rounded-lg bg-gray-50 p-4 dark:bg-gray-800"
                        id="settings-example"
                        role="tabpanel"
                        aria-labelledby="settings-tab-example"
                    >
                        <p class="text-sm text-gray-500 dark:text-gray-400">
                            This is some placeholder content the
                            <strong
                                class="font-medium text-gray-800 dark:text-white"
                                >Requests tab's associated content</strong
                            >. Clicking another tab will toggle the visibility
                            of this one for the next. The tab JavaScript swaps
                            classes to control the content visibility and
                            styling.
                        </p>
                    </div>
                    <div
                        class="hidden rounded-lg bg-gray-50 p-4 dark:bg-gray-800"
                        id="contacts-example"
                        role="tabpanel"
                        aria-labelledby="contacts-tab-example"
                    >
                        <p class="text-sm text-gray-500 dark:text-gray-400">
                            This is some placeholder content the
                            <strong
                                class="font-medium text-gray-800 dark:text-white"
                                >Contacts tab's associated content</strong
                            >. Clicking another tab will toggle the visibility
                            of this one for the next. The tab JavaScript swaps
                            classes to control the content visibility and
                            styling.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

<script setup lang="ts">
import { onMounted } from "vue";
import { Tabs } from "flowbite";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import type { TabsOptions, TabsInterface, TabItem } from "flowbite";
import type { InstanceOptions } from "flowbite";

onMounted(() => {
    const tabsElement: HTMLElement | null =
        document.getElementById("tabs-example");

    if (tabsElement) {
        // create an array of objects with the id, trigger element (eg. button), and the content element
        const tabElements: TabItem[] = [
            {
                id: "profile",
                triggerEl: document.querySelector("#profile-tab-example"),
                targetEl: document.querySelector("#profile-example"),
            },
            {
                id: "dashboard",
                triggerEl: document.querySelector("#dashboard-tab-example"),
                targetEl: document.querySelector("#dashboard-example"),
            },
            {
                id: "settings",
                triggerEl: document.querySelector("#settings-tab-example"),
                targetEl: document.querySelector("#settings-example"),
            },
            {
                id: "contacts",
                triggerEl: document.querySelector("#contacts-tab-example"),
                targetEl: document.querySelector("#contacts-example"),
            },
        ];

        // options with default values
        const options: TabsOptions = {
            defaultTabId: "settings",
            activeClasses:
                "text-blue-600 hover:text-blue-600 dark:text-blue-500 dark:hover:text-blue-400 border-blue-600 dark:border-blue-500",
            inactiveClasses:
                "text-gray-500 hover:text-gray-600 dark:text-gray-400 border-gray-100 hover:border-gray-300 dark:border-gray-700 dark:hover:text-gray-300",
            onShow: () => {
                console.log("tab is shown");
            },
        };

        // instance options with default values
        const instanceOptions: InstanceOptions = {
            id: "tabs-example",
            override: true,
        };

        /*
         * tabElements: array of tab objects
         * options: optional
         */
        const tabs: TabsInterface = new Tabs(
            tabsElement,
            tabElements,
            options,
            instanceOptions
        );

        // open tab item based on id
        tabs.show("contacts");
    }
});
</script>
