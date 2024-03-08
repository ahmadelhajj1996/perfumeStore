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
            <p class="mb-2 text-center text-[14px]"> {{ $t('general.shopping_cart') }} </p>

            <div v-if="store.cartItemsCount > 0" class="w-[50%] min-[400px]:w-[25%] ps-4">
                <button class="bg-red-400 hover:bg-red-500 text-white" @click="store.clearCart()">{{ $t('product.clear_cart') }}</button>
            </div>

            <div v-if="store.cartItemsCount > 0"  class="divide-y-[1px] divide-gray-200 mt-4 border-t-[1px] " >
            <div v-for="product in store.cartItems" :key="product.id" class="flex  py-2  ">
                <div class=" w-[20%] m-1   flex justify-center items-center">
                    <router-link :to="{name:'product' , params : {id : product.id , title : product.title }}"><img :src="product.image"  class="h-16 w-16  object-cover object-center" /></router-link>
                </div>

                <div class=" w-[80%] p-1 flex   ">

                    <div class="w-[90%]">
                        <div class="flex gap-x-1 sm:gap-x-2">
                            <p class="text-[12px] sm:text-[14px]">{{ product.title[locale] }}  </p>
                            <p class="text-[12px] sm:text-[14px] text-green-600"> ({{ product.price }} $)</p>
                        </div>

                        <div class="flex divide-x-[1px] text-center mt-1 border-[1px] w-[100px] sm:w-[25%]   border-gray-200 rounded-md ">
                            <p @click="store.decrementQty(product)" class="w-1/3 font-semibold cursor-pointer" >-</p>
                            <p class="w-1/3  ">{{ product.qty }}</p>
                            <p @click="store.incrementQty(product)" class="w-1/3 font-semibold cursor-pointer">+</p>
                        </div>

                        <p class="mt-2 text-[10px] sm:text-[12px]">{{$t('order.sub_total') }} : {{ store.getTotal(product) }} $ </p>

                    </div>



                    <div class="w-[10%] flex flex-col justify-between pe-1 ">
                        <svg @click="store.addToFavorites(product)" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" class="w-5 h-5 sm:w-6 sm:h-6 cursor-pointer ">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                        </svg>

                        <p class="text-red-500 cursor-pointer ps-2 text-[20px]    " @click="store.removeFromCart(product)">x</p>
                    </div>

                </div>
            </div>

            <div class="ps-8">
            <div class="flex gap-x-1   text-[13px] font-normal">
            {{$t('order.total') }} :
            <p class="underline underline-offset-2">{{ store.subtotal }} $</p>
            </div>
            <p class="text-[10px] sm:text-[12px]  ">{{$t('order.Shipping_and_taxes_place') }}</p>

            <div class="my-4 w-full md:w-[60%] mx-auto ">
                <button @click="router.push('/checkout')" class=""> {{$t('order.checkout') }} </button>

            </div>

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

