<script setup>
import { computed, onMounted } from 'vue';
import { useProductStore } from '../stores/ProductStore';
import { useGeneralStore } from '../stores/GeneralStore';
const store = useProductStore()
const gStore = useGeneralStore()
onMounted(async()=>{
  await   gStore.getCategories()
  await   store.getProduct(1)
})

const product = computed(()=>store.product)


</script>
<template>
    <div>

        {{ product.category.title }}

    </div>
</template>

