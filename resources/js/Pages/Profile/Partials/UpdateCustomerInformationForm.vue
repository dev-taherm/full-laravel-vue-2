<script setup lang="ts">
import { defineProps } from "vue";
import InputError from "@/Components/InputError.vue";
import InputLabel from "@/Components/InputLabel.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import TextInput from "@/Components/TextInput.vue";
import { Link, useForm, usePage, router } from "@inertiajs/vue3";
import { onBeforeMount, onMounted } from "vue";
import { initFlowbite } from "flowbite";

const props = defineProps<{
    customer: {
        type: Object;
        required: true;
    };
}>();

onMounted(() => {
    initFlowbite();
});

onBeforeMount(() => {
    if (!props.customer) {
        // Redirect the user to the create customer route
        router.visit(route("customer.create"));
    }
});

const form = useForm({
    name: props.customer?.name ?? "",
    address: props.customer?.address ?? "",
    city: props.customer?.city ?? "",
    phone: props.customer?.phone ?? "",
    bio: props.customer?.bio ?? "",
});
</script>

<template>
    <section>
        <header>
            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                Customer Information
            </h2>

            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                Update your information.
            </p>
        </header>

        <form
            @submit.prevent="
                form.patch(route('customer.update'), { preserveScroll: true })
            "
            class="mt-6 space-y-6"
        >
            <div>
                <InputLabel for="name" value="Full Name" />

                <TextInput
                    id="name"
                    type="text"
                    class="mt-1 block w-full"
                    v-model="form.name"
                    required
                    autofocus
                    autocomplete="name"
                />

                <InputError class="mt-2" :message="form.errors.name" />
            </div>

            <div>
                <InputLabel for="address" value="Your Address" />

                <TextInput
                    id="address"
                    type="address"
                    class="mt-1 block w-full"
                    v-model="form.address"
                    required
                    autocomplete="address"
                />

                <InputError class="mt-2" :message="form.errors.address" />
            </div>
            <label
                for="city"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                >Select an option</label
            >
            <select
                id="city"
                required
                v-model="form.city"
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
            <InputError class="mt-2" :message="form.errors.city" />

            <div>
                <InputLabel for="phone" value="Your Phone Number" />

                <TextInput
                    id="phone"
                    type="phone"
                    class="mt-1 block w-full"
                    v-model="form.phone"
                    required
                    autocomplete="phone"
                />

                <InputError class="mt-2" :message="form.errors.phone" />
            </div>
            <label
                for="message"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                >Your bio</label
            >
            <textarea
                id="message"
                rows="4"
                v-model="form.bio"
                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Write your thoughts here..."
            ></textarea>
            <InputError class="mt-2" :message="form.errors.bio" />

            <div class="flex items-center gap-4">
                <PrimaryButton :disabled="form.processing">Save</PrimaryButton>

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
</template>
