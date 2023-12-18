<script setup lang="ts">
import Post from "@/Components/Post.vue";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Link } from "@inertiajs/vue3";

const props = defineProps<{
  post: object;
  postable: object;
}>();
</script>
<template>
  <AuthenticatedLayout>
    <div class="flex-auto flex-col">
      <div
        class="grow max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700"
      >
        <div class="flex items-center mt-4 space-x-4 rtl:space-x-reverse">
          <div
            class="mb-5 ml-4 relative inline-flex items-center justify-center w-10 h-10 overflow-hidden bg-gray-100 rounded-full dark:bg-gray-600"
          >
            <span class="font-medium text-gray-600 dark:text-gray-300">{{
              postable.name.substring(0, 2)
            }}</span>
          </div>

          <div class="flex-1 min-w-0">
            <p class="mb-5 text-md font-medium text-gray-900 truncate dark:text-white">
              {{ postable.name }}
            </p>
          </div>
          <div class="flex items-center mb-5">
            <Link
              :href="route('post.edit', { postId: post.id })"
              class="dark:text-gray-300 mr-1"
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
                  d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10"
                />
              </svg>
            </Link>
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
