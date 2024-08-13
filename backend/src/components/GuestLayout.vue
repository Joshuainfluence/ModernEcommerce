<template>

    <div class="flex min-h-full flex-1 flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">

            <!-- For the company logo -->

            <!-- <img class="mx-auto h-10 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600"
                alt="Your Company" /> -->
            <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">
                {{ title }}

            </h2>
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form class="space-y-6" @submit.prevent="emit('submit')" method="POST">
                <slot></slot>
            </form> 
        </div>
    </div>
</template>
  
<script setup>
const { title } = defineProps({
    title: {
        type: String,
        required: true
    }
}) 

const emit = defineEmits(['submit'])
</script>

<style scoped></style>