<script setup>
import NavbarView from './components/NavbarView.vue';
import FooterView from './components/FooterView.vue';
import ScrollToTopComponent from './components/partials/ScrollToTopComponent.vue'
const dir = localStorage.getItem('dir') ? localStorage.getItem('dir') : 'ltr'
const lang = localStorage.getItem('lang') ? localStorage.getItem('lang') : 'en'

</script>


<template>
    <div  id="body" :dir="dir" :lang="lang" class="pt-24 bg-gray-50">
        <NavbarView />
        <router-view></router-view>
        <ScrollToTopComponent />
        <FooterView />
    </div>
</template>





