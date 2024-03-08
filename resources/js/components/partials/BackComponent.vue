<script setup>
import { useRouter } from 'vue-router'
const router = useRouter();
</script>
<template>
    <div>
        <div class=" ps-4 flex gap-x-0.5 items-center bg-gray-50 " >
            <svg @click="router.back()"  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1" class="  stroke-gray-900 cursor-pointer  stroke-1.5 h-5 w-5   rtl:transform rtl:rotate-180"  >
                <path stroke-linecap="round" stroke-linejoin="round" d="m11.25 9-3 3m0 0 3 3m-3-3h7.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
            </svg>
            <button @click="router.back()"
             class="  w-[20px]    pb-4    text-sm bg-inherit">
               {{ $t('general.back') }}</button>
        </div>
    </div>
</template>
