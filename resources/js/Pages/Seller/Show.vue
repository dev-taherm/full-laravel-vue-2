<script setup lang="ts">
import { defineProps } from "vue";

const props = defineProps({
    seller: {
        type: Object,
        required: true,
    },
});
</script>

<template>
    <div>
        <p>{{ props.seller.o_name }}</p>
        <p>{{ props.seller.o_address }}</p>
        <!-- Add more seller properties as needed -->
    </div>
</template>
