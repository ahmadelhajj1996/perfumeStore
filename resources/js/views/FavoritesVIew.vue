<script setup>
import BackComponent from '../components/partials/BackComponent.vue'
import EmptyArrayComponent from '../components/partials/EmptyArrayComponent.vue';
import { useI18n } from 'vue-i18n'
import { ref ,onMounted, computed } from "vue";
import {useRoute , useRouter } from 'vue-router'
import { useProductStore } from '../stores/ProductStore';
const store = useProductStore()
const { locale , t  } = useI18n()
const router = useRouter()
const route = useRoute()
document.title = t('general.shopping_cart')

</script>

<template>
<div>

<div class=" mx-8 sm:max-w-xl sm:mx-auto   rounded-sm border-[0.5px] border-x-0 border-green-700 bg-white  ">
<BackComponent />

        <div class="my-2">
            <p class="mb-2 text-center text-[14px]"> {{ $t('general.favorites_cart') }} </p>
            <div v-if="store.favoriteItemsCount > 0"  class="divide-y-[1px] divide-gray-200 mt-4 border-t-[1px] " >
            <div v-for="product in store.favoriteItems" :key="product.id" class="flex divide-x-[1px] divide-gray-50 py-2  ">
                <div class=" w-[20%] m-1   flex justify-center items-center">
                    <router-link :to="{name:'product' , params : {id : product.id , title : product.title }}"><img :src="product.image"  class="h-16 w-16  object-cover object-center" /></router-link>
                </div>

                <div class=" w-[80%] p-1 flex   ">
                    <div class="w-[90%]">
                        <div class="flex gap-x-1 sm:gap-x-2">
                            <p class="text-[12px] sm:text-[14px]">{{ product.title[locale] }}  </p>
                            <p class="text-[12px] sm:text-[14px] text-green-600"> ({{ product.price }} $)</p>
                        </div>

                        <div class="mt-4 w-[100px] sm:w-[25%]">
                            <button>{{ $t('product.buy_now') }}</button>
                        </div>


                    </div>



                    <div class="w-[10%] flex flex-col justify-between pe-1 ">
                        <svg @click="store.addToCart(product)" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" class="w-5 h-5 sm:w-6 sm:h-6 cursor-pointer ">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                        </svg>

                        <p class="text-red-500 cursor-pointer ps-2 text-[20px]    " @click="store.removeFromFavorites(product)">x</p>
                    </div>

                </div>
            </div>


            <div class="my-4 w-full md:w-[60%] mx-auto ">
                <button @click="router.push('/')" class=""> {{$t('general.continue_shopping') }} </button>
            </div>
        </div>

        <div v-else class="mt-4">
            <EmptyArrayComponent :text=" $t('general.no_in_cart') " />
        </div>
        </div>



    </div>
</div>

    <!-- <div  class="hidden sm:max-md:flex">aftet small</div> -->
    <!-- <div  class="hidden md:max-lg:flex">aftet medium</div>
    <div  class="hidden lg:flex">aftet lg</div> -->
<!-- underline underline-offset-8 -->
</template>

