<script setup lang="ts">
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { useForm } from "@inertiajs/vue3";
const props = defineProps<{
    post: object;
}>();
const form = useForm({
    title: props.post.title,
    description: props.post.description,
});
</script>
<template>
    <AuthenticatedLayout>
        <div
            class="max-w-lg mx-auto sm:px-6 space-y-6 bg-white dark:bg-gray-800 shadow sm:rounded-lg sm:p-8"
        >
            <form
                @submit.prevent="
                    form.patch(route('post.update', { postId: props.post.id }))
                "
                class="max-w-sm mx-auto"
            >
                <div class="mb-5">
                    <label
                        for="title"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                        >Post Title</label
                    >
                    <input
                        type="title"
                        id="titel"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Title"
                        v-model="form.title"
                        required
                    />
                </div>
                <div class="mb-5">
                    <label
                        for="description"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                        >Post Description</label
                    >
                    <textarea
                        id="description"
                        rows="4"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Leave a description..."
                        v-model="form.description"
                        required
                    ></textarea>
                </div>

                <button
                    type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                >
                    Update Post
                </button>
            </form>
        </div>
    </AuthenticatedLayout>
</template>
