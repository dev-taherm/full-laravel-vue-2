<script setup lang="ts">
import { defineProps } from "vue";
import { Link } from "@inertiajs/vue3";

const props = defineProps<{
    id: number;
    title: string;
    description: string;
    created_at: string;
}>();

const getTimeAgo = (created_at: string) => {
    const currentTime = new Date();
    const createdAtDate = new Date(created_at);
    const timeDifference = Math.abs(
        currentTime.getTime() - createdAtDate.getTime()
    );
    const minutes = Math.floor(timeDifference / (1000 * 60));

    if (minutes < 60) {
        return `${minutes}m ago`;
    } else if (minutes < 1440) {
        const hours = Math.floor(minutes / 60);
        return `${hours}h ago`;
    } else {
        const days = Math.floor(minutes / 1440);
        return `${days}d ago`;
    }
};
</script>
<template>
    <div
        class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700"
    >
        <Link :href="route('post.show', { postId: id })">
            <a href="#">
                <img
                    class="rounded-t-lg post-image h-auto max-w-full mx-auto"
                    src="/post.png"
                    alt=""
                    style="width: 100%"
                />
            </a>

            <div class="p-5">
                <a href="#">
                    <h5
                        class="mb-2 text-lg font-bold tracking-tight text-gray-900 dark:text-white"
                    >
                        {{ $props.title }}
                    </h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                    {{ $props.description }}
                </p>
                <template v-if="$page.url !== '/profile'">
                    <div class="flex items-center">
                        <div class="flex items-center mr-4">
                            <button class="dark:text-gray-300 mr-1">
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
                                        d="M6.633 10.5c.806 0 1.533-.446 2.031-1.08a9.041 9.041 0 012.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 00.322-1.672V3a.75.75 0 01.75-.75A2.25 2.25 0 0116.5 4.5c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 01-2.649 7.521c-.388.482-.987.729-1.605.729H13.48c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 00-1.423-.23H5.904M14.25 9h2.25M5.904 18.75c.083.205.173.405.27.602.197.4-.078.898-.523.898h-.908c-.889 0-1.713-.518-1.972-1.368a12 12 0 01-.521-3.507c0-1.553.295-3.036.831-4.398C3.387 10.203 4.167 9.75 5 9.75h1.053c.472 0 .745.556.5.96a8.958 8.958 0 00-1.302 4.665c0 1.194.232 2.333.654 3.375z"
                                    />
                                </svg>
                            </button>
                        </div>
                        <div class="flex items-center">
                            <button class="dark:text-gray-300 mr-1">
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
                                        d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 01.865-.501 48.172 48.172 0 003.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z"
                                    />
                                </svg>
                            </button>
                        </div>
                        <div>
                            <i class="mr-4 dark:text-gray-100"></i>
                            <span class="dark:text-gray-300">{{
                                getTimeAgo($props.created_at)
                            }}</span>
                        </div>
                    </div>
                </template>
            </div>
        </Link>
    </div>
</template>
