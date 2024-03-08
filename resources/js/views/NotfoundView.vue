<script setup>
import BackComponent from '../components/partials/BackComponent.vue'
import { onMounted } from 'vue';
import { useRouter } from 'vue-router'
import { useI18n } from 'vue-i18n';
const {t} = useI18n()
const router = useRouter()
onMounted(()=>{
    document.title = t('general.contact')
})

</script>
<template>
   <div class=" mx-8 sm:max-w-sm md:max-w-lg sm:mx-auto   rounded-lg rounded-br-none rounded-tl-none border-[0.5px] border-x-0 border-green-700 bg-white ">
    <BackComponent />

                <div class="flex justify-center" >
                    <img src="https://th.bing.com/th?id=OIP.OzCZVhFLJqhl-Yf_u50xmgAAAA&w=181&h=181&c=8&rs=1&qlt=90&o=6&pid=3.1&rm=2">
                </div>

                <span class="  font-semibold   text-base md:text-lg  lg:text-3xl text-gray-700 flex justify-center">404</span>

                <div @click="router.push('/')" class="p-3 my-3 sm:w-[60%] sm:mx-auto">
                    <button >
                    {{ $t('general.go_to_home') }}
                    </button>
                </div>


</div>
</template>

