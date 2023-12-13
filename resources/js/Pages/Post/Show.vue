<script setup lang="ts">
import Post from "@/Components/Post.vue";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";

const props = defineProps<{
    post: object;
    postable: object;
}>();
</script>
<template>
    <AuthenticatedLayout>
        <div class="mx-[200px] mb-[200px]">
            <div
                class="mt-20 max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700"
            >
                <div
                    class="mt-4 flex items-center space-x-4 rtl:space-x-reverse"
                >
                    <div
                        class="mb-5 ml-4 relative inline-flex items-center justify-center w-10 h-10 overflow-hidden bg-gray-100 rounded-full dark:bg-gray-600"
                    >
                        <span
                            class="font-medium text-gray-600 dark:text-gray-300"
                            >{{ postable.name.substring(0, 2) }}</span
                        >
                    </div>
                    <div class="flex-1 min-w-0">
                        <p
                            class="mb-5 text-md font-medium text-gray-900 truncate dark:text-white"
                        >
                            {{ postable.name }}
                        </p>
                    </div>
                </div>

                <Post
                    :id="post.id"
                    :title="post.title"
                    :description="post.description"
                    :created_at="post.created_at"
                ></Post>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
