<script setup>
import LoadingComponent from '../components/partials/LoadingComponent.vue';
import CategoryProducts from '../components/CategoryProducts.vue';
import { ref , onMounted , computed, watch } from 'vue';
import { useProductStore } from '../stores/ProductStore';
import {useRoute , useRouter} from 'vue-router'
const router = useRouter()
const route = useRoute()

const id =  ref(route.params.id)
const title = ref(route.params.title)
const store  = useProductStore()
const liked = ref(true)


onMounted(() => {
    store.getProductsByCategory(id.value)
})



</script>

<template>
<div >
<LoadingComponent v-if="store.loading" />
    <div v-if="!store.loading" class="mx-4 p-3 rounded-sm border-[0.5px] border-x-0 border-green-700 bg-white">

        <div class=" grid gap-y-3 gap-x-3 grid-cols-1 min-[320px]:grid-cols-2 min-[448px]:grid-cols-3 min-[584px]:grid-cols-4 min-[722px]:grid-cols-5">
            <CategoryProducts v-for="product in store.productsByCategory" :key="product.id"  :product="product" />
        </div>
    </div>
</div>

</template>


