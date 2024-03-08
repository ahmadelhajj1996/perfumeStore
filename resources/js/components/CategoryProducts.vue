<script setup>
import { useProductStore } from '../stores/ProductStore';
import { useI18n } from 'vue-i18n'
import { useRouter } from 'vue-router';
import { useToastr } from '../toastr';
const toastr = useToastr()
const router = useRouter()
const { locale } = useI18n()
const store = useProductStore()
const props = defineProps({
    product: {
        type: Object,
    }
});
const buy = (product) => {


    router.push('/shopping-cart')

    store.addToCart(product)

}

</script>
<template>
     <div  class=" rounded-lg border  border-gray-200 group">
             <router-link
                :to="{ name : 'product' , params : { id : product.id , title : product.title['en'] }  }"
            >

            <div class="flex justify-center items-start py-1  ">
              <img :src="product.image" alt="category" class="h-[200px]   " />
            </div>
          </router-link>

         <div class="pt-1 px-3 flex border-t-[1px]   justify-between ">
            <div>
                <p class="text-[12px] sm:text-[14px]">
                    {{product.title[locale]}}
                </p>
                <p class="text-[14px] sm:text-[16px] text-green-600 ">
                    {{ product.price }} $
                </p>
            </div>
            <svg
                        @click="store.addToFavorites(product)"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        class="cursor-pointer stroke-gray-800  stroke-[0.5px] h-6 w-6  "
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z"
                        />
            </svg>
          </div>
          <div class="py-1 px-2 grid grid-cols-1  gap-y-1 ">
                <button @click="store.addToCart(product)">{{ $t('product.add_to_cart') }} </button>
                <button class="mt-1 bg-green-400 hover:bg-green-500" @click="buy(product)">{{ $t('product.buy_now') }}  </button>
            </div>

     </div>

</template>
