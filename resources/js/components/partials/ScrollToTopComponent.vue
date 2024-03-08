<script setup>
import { ref, onMounted, onUnmounted } from 'vue';
const showBackToTop = ref(false);
const scrollToTop = () => {
      window.scrollTo({
        top: 0,
        behavior: 'smooth'
      });
};
const handleScroll = () => {
      showBackToTop.value = window.pageYOffset > 500
};
onMounted(() => {
      window.addEventListener('scroll', handleScroll);
    });

onUnmounted(() => {
    window.removeEventListener('scroll', handleScroll);
});

</script>

<template>
    <div>
        <div class="fixed bottom-24 end-[2px] sm:end-4 cursor-pointer rounded-full border-0 p-1.5 bg-yellow-100 hover:bg-yellow-200" v-if="showBackToTop" @click="scrollToTop" >
            <svg xmlns="http://www.w3.org/2000/svg" fill="" viewBox="0 0 24 24"  class="w-4 h-4 sm:h-5 sm:w-5 stroke-1 stroke-black">
                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 6.75 12 3m0 0 3.75 3.75M12 3v18" />
            </svg>
        </div>
    </div>
</template>

