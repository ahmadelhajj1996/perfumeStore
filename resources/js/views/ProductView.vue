<script setup>
import LoadingComponent from '../components/partials/LoadingComponent.vue';
import BackComponent from '../components/partials/BackComponent.vue'

import { watch, onMounted ,onBeforeMount , ref } from 'vue';
import { useProductStore } from '../stores/ProductStore';
import { useRoute, useRouter } from 'vue-router';
import { useI18n } from 'vue-i18n'
const { locale } = useI18n()
const  router = useRouter();
const route = useRoute()
const id =  route.params.id
const store = useProductStore()

const product = ref(store.product)

onMounted(async()=>{
     await  store.getProduct(id)
})


watch(() => store.product, (newValue) => {
        if(newValue != undefined && newValue != null   )
        {
                localStorage.setItem('product' ,JSON.stringify(newValue));
        }
        // store.product = newValue
        document.title = newValue.title['en']
        router.push({name:'product' , params : { title : newValue.title['en'] } })
        console.log(store.product)
}, { deep: true });
</script>

<template>


<div class="mx-8  md:max-w-[768px] md:mx-auto    rounded-sm border-[0.5px] border-x-0 border-green-700 bg-white   ">
<BackComponent />

<div class=" sm:flex">
    <div class=" sm:w-[350px] mx-auto  flex justify-center items-start  ">
         <img :src="store.product.image" alt="alt" class=" h-64 w-72" />
    </div>

    <div class="w-full p-4 ">
        <div class="flex justify-end pe-8">
            <svg
                                    @click="store.addToFavorites(product)"
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    class="fill-white-500 "
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z"
                                    />
                                </svg>


        </div>

        <h2 class="-mt-2 sm:mt-4 text-[16px] sm:text-[20px]  tracking-wide"> {{ store.product.title[locale] }} </h2>

        <div  class="mt-2 ps-2 flex gap-x-1">
                <p  >{{$t('product.price') }} : </p> {{store.product.price}} $
        </div>
        <div  class="mt-6 ps-2 border-t-[1px] pt-4 ">
                <p class="text-[14px] sm:text-[18px]" >{{ $t('product.about') }}   </p>

                <p class="mt-2 text-[12px] sm:text-[16px]">{{store.product.description[locale] }}</p>
        </div>



        <div class="mt-6 w-full flex gap-x-2 sm:w-[60%] sm:gap-x-4 mx-auto   ">
            <button @click="store.addToCart(store.product)"> {{ $t('product.add_to_cart') }} </button>
            <button @click="router.push('/shopping-cart')" class="bg-green-400 hover:bg-green-500 "> {{ $t('product.buy_now') }} </button>
        </div>


    </div>

</div>
    </div>
</template>

