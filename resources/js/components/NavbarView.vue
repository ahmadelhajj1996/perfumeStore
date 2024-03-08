<script setup>
import { ref, computed, onUnmounted } from "vue";
import { Dialog, DialogPanel } from "@headlessui/vue";
import { useI18n } from "vue-i18n";
import { useGeneralStore } from "../stores/GeneralStore";
import { useProductStore } from '../stores/ProductStore'
const productStore = useProductStore()
const myDiv = ref(null);
const langDiv = ref(null);


const handleClickOutside = (event) => {
    if (myDiv.value && !myDiv.value.contains(event.target)) {
        isOpen.value = false
    }
};
const handleClickOutsideLang = (event) => {
    if (langDiv.value && !langDiv.value.contains(event.target)) {
        openLang.value = false
    }
};
const closeOnEsc = (event) => {
      if (isOpen.value && event.key === 'Escape') {
        isOpen.value = false;
      }
};
window.addEventListener('click', handleClickOutside);
window.addEventListener('click', handleClickOutsideLang);

onUnmounted(() => {
window.removeEventListener('click', handleClickOutside);
window.removeEventListener('click', handleClickOutsideLan);

})
const store = useGeneralStore();
const { t } = useI18n();
const dir = computed(() => {
    document.querySelector("#body").getAttribute("dir");
});
const isOpen = ref(false);
const openLang = ref(false);
const handleSelect = (value)=>{
    store.setLanguage(value)
    openLang.value = false
}

const navigationSvg = [
    {
        path: "M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z",
        to: "/login",
    },
    {
        path: "M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z",
        to: "/favorites",
    },
];

const navigations = computed(() => {
    return [
        { name: t("general.home"), to: "/" },
        { name: t("general.contact"), to: "/contact" },
    ];
});
</script>

<template>
    <header
        class="fixed inset-x-0 top-0 z-50 border-b border-gray-200 pb-2  bg-white"
    >
        <nav
            class="flex items-center justify-between pt-2 lg:px-4"
        >
            <div class="flex items-center justify-start gap-x-3 ms-2   lg:flex-1">
                <router-link to="/">
                    <img class="h-8 w-8 " src="../assets/logo.svg" alt="" />
                </router-link>
                <div ref="langDiv" @click="handleClickOutsideLang" class="w-6" >

                <div @click="openLang = !openLang" class="cursor-pointer relative  ">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"  class="w-6 h-6   stroke-black stroke-[1px]">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 0 0 8.716-6.747M12 21a9.004 9.004 0 0 1-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 0 1 7.843 4.582M12 3a8.997 8.997 0 0 0-7.843 4.582m15.686 0A11.953 11.953 0 0 1 12 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0 1 21 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0 1 12 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 0 1 3 12c0-1.605.42-3.113 1.157-4.418" />
                        </svg>
                        <div v-if="openLang" class="absolute -start-5 flex flex-col gap-y-0 border-[1px] mt-3 bg-yellow-50 ">

                        <div v-for="lang in store.supportedLangs" :key="lang.key"  @click="handleSelect(lang.key)" class="cursor-pointer p-2 border-t-[1px] hover:bg-yellow-100 text-[14px]">
                            {{lang.value}}
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <div ref="myDiv" @click="handleClickOutside" >
            <div class="flex lg:hidden">
                <svg

                    @click="isOpen = !isOpen"
                    class="h-7 w-7 mb-1 pe-2 cursor-pointer"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                    aria-hidden="true"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M3.75 5.25h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5"
                    />
                </svg>
            </div>
            <div v-if="isOpen == true" class="lg:hidden z-50 fixed inset-y-0 start-0   w-[55%] sm:w-[45%] overflow-y-auto bg-gray-50 p-3 sm:max-w-xs sm:ring-1 sm:ring-gray-900/10">


                        <div class="flex justify-end  "><p @click="isOpen = false" class="p-[2px] flex justify-center cursor-pointer text-[16px]">X</p></div>
                                <ul class=" list-disc ms-5 gap-y-2">
                                    <li
                                    v-for="item in navigations"
                                    :key="item.name"
                            >
                                    <router-link :to="item.to"
                                    @click="isOpen = false"
                                    class=" text-start   leading-1 text-gray-800  focus:underline focus:decoration-gray-600 focus:underline-offset-8">
                                         {{ item.name }} </router-link>
                                    </li>
                                </ul>

                            <div class="p-6 flex gap-x-[25%] justify-center">
                                <router-link
                                to="/shopping-cart"
                                class="text-sm font-semibold leading-6 text-gray-900"
                                >
                                <div class="flex items-center">

                                <svg
                                    @click="isOpen = false"
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    class="fill-white-500 "
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z"
                                    />
                                </svg>
                                (<span class=" text-sm font-normal px-0.5 text-red-600  ">{{ productStore.cartItemsCount }}</span>)
                                </div>
                                </router-link>
                            <router-link  v-for="link in navigationSvg" :key="link.to"
                                :to="link.to"
                                class="text-sm font-semibold leading-6 text-gray-900"
                            >
                                <svg
                                    @click="isOpen = false"
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    class=" fill-white-500 "
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        :d="link.path"
                                    />
                                </svg>
                            </router-link>
                            </div>
                    </div>
            </div>

            <div class="hidden lg:flex lg:gap-x-4">
                <router-link

                    v-for="item in navigations"
                    :key="item.name"
                    :to="item.to"
                    class="block text-start   leading-1 text-gray-800  focus:underline focus:decoration-gray-400 focus:underline-offset-8"
                >
                    {{ item.name }}</router-link
                >
            </div>

            <div class="hidden lg:flex lg:flex-1 lg:justify-end lg:gap-x-3">
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z"
                />
                <router-link

                    to="/shopping-cart"
                    class="text-sm font-semibold leading-6 text-gray-900"
                >
                    <div class="flex items-center">


                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        class="fill-white-500 "
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z"
                        />
                    </svg>

                  (<span class=" text-sm font-normal px-0.5 text-red-600  ">{{ productStore.cartItemsCount }}</span>)
                </div>
                </router-link>
                <router-link
                    v-for="link in navigationSvg"
                    :key="link.to"
                    :to="link.to"
                    class="text-sm font-semibold leading-6 text-gray-900"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        class="fill-white-500"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            :d="link.path"
                        />
                    </svg>
                </router-link>
            </div>
        </nav>


    </header>
</template>
