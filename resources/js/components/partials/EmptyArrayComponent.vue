<script setup>
import { useRouter } from 'vue-router'
const  router = useRouter()
const props = defineProps({
  text: String
})
</script>

<template>
    <div>


    <p class="text-center text-[13px]  mt-4  " >{{ text }}</p>
        <div class="my-6 w-full px-4 md:w-[50%] md:px-0 mx-auto  ">
            <button @click="router.push('/')" class="">
            {{ $t('general.start_shopping') }}
           </button>
        </div >

    </div>

</template>
