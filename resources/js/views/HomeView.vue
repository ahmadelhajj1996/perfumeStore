<script setup>
import LoadingComponent from '../components/partials/LoadingComponent.vue';
import CategoryComponent from '../components/CategoryComponent.vue';
import { useGeneralStore } from '../stores/GeneralStore';
import { onMounted } from 'vue';
import { useRoute } from 'vue-router';
import { useI18n } from 'vue-i18n';
const { locale ,  t } = useI18n()
const route = useRoute()
const store  = useGeneralStore()
onMounted(async() => {
    document.title = t('general.home')
    store.getCategories();
})

</script>
<template>

<div >
<LoadingComponent v-if="store.loading" />
    <div v-if="!store.loading" class="mx-4 p-3 rounded-sm border-[0.5px] border-x-0 border-green-700 bg-white">

        <div class=" grid gap-y-3 gap-x-3 grid-cols-1 min-[320px]:grid-cols-2 min-[448px]:grid-cols-3 min-[584px]:grid-cols-4 min-[722px]:grid-cols-5">
            <CategoryComponent  v-for="category in store.categories" :key="category.id" :category="category" />
        </div>
    </div>
</div>

</template>
