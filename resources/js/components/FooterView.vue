<script setup>
import { ref, onMounted , onUnmounted, computed } from 'vue';
const screenHeight = ref(window.innerHeight);
const documentHeight = ref(0);
const difference = computed(()=>screenHeight.value < documentHeight.value)
</script>
<template>
        <div class=" mt-48 bottom-0 inset-x-0 border-t border-gray-200 py-4   bg-white  " :class="{' static mt-12 bottom-0 inset-x-0 border-t border-gray-200 py-2  bg-white' : !difference}">
        <div class=" text-center  text-[12px] sm:text-[14px]   text-gray-900 ">
            {{$t('general.footer')}}
        </div>
        </div>
</template>
