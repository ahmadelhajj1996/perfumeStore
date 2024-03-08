<script setup>
import { useI18n } from 'vue-i18n'
const { locale } = useI18n()

const props = defineProps({
    category: {
        type: Object,
    }
});
</script>
<template>
     <div  class=" rounded-lg border  border-gray-200 group">
            <router-link
                :to="{ name : 'category' , params : { title : category.title[locale] , id : category.id }   }"
            >

            <div class="flex justify-center items-start py-1  ">
              <img :src="category.image" alt="category" class="h-[200px]  " />
            </div>
          </router-link>
          <router-link
            :to="{ name : 'category' , params : {id : category.id , title : category.title['en'] }  }"
            >
            <div class="mb-2 mx-1 sm:mx-4 lg:mx-4 p-1 hover:bg-gray-50  text-center border border-gray-100 rounded-sm">
                <p class="text-[12px] sm:text-[14px]">{{ category.title[locale] }}</p>
            </div>
            </router-link>
          </div>
</template>
