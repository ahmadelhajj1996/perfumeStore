<template>
    <div>
        <div class="relative" dir="rtl "
        >
        <button
            ref="myDiv"
            @click="isOpen = !isOpen"
            class="  flex w-[120px] items-center justify-center px-0 py-1 text-sm font-medium text-gray-700 bg-inherit border-b border-gray-500 rounded-xs shadow-sm hover:bg-gray-50 "
        >
            {{ text }}

            <svg
            class=" h-5 w-5 mt-2 ps-2 "
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 20 20"
            fill="currentColor"
            aria-hidden="true"
            >
            <path
                fill-rule="evenodd"
                d="M10 3.586L4.707 8.879a1 1 0 101.414 1.414L10 6.414l4.879 4.879a1 1 0 001.414-1.414L10 3.586z"
                clip-rule="evenodd"
            />
            </svg>

        </button>

        <div
            v-if="isOpen"
            class="absolute start-0 w-[120px] bg-white border border-gray-300 rounded-md shadow-lg"
        >

            <div class="py-1 flex flex-col justify-start divide-y divide-gray-200 overflow-y-hidden "
                role="menu"  v-for="(item , i)  in items"
                            :key="i" >

                        <button
                            @click="handling(item.value)"
                            class=" py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900"
                            role="menuitem"
                        >
                            {{  item.name }}
                        </button>
                </div>
            </div>

        </div>
    </div>
  </template>

  <script setup>
  const props = defineProps({
        text: String ,
        items : Array
        })

    const emit = defineEmits(['handle'])

    const handling  = (data) =>
    {
        emit('handle' , data)
        isOpen.value = false
    }

    const setLanguage = (value)=>{
        console.log(value)
    }
      const myDiv = ref(null);
      import { ref, watchEffect } from 'vue';
      const isOpen = ref(false)

      const handleClickOutside = (event) => {
      if (myDiv.value && !myDiv.value.contains(event.target)) {
        isOpen.value = false;
      }
    };
    const closeOnEsc = (event) => {
      if (isOpen.value && event.key === 'Escape') {
        isOpen.value = false;
      }
    };

    watchEffect((onInvalidate) => {
      document.addEventListener('click', handleClickOutside);
      document.addEventListener('keydown', closeOnEsc);

      onInvalidate(() => {
        document.removeEventListener('click', handleClickOutside);
        document.addEventListener('keydown', closeOnEsc);

      });
    });
  </script>
