<script setup>
import BackComponent from '../../components/partials/BackComponent.vue'
import { Form ,Field ,ErrorMessage } from 'vee-validate';
import { useI18n } from 'vue-i18n'
import { useValidationStore } from '../../yup';

import { reactive } from 'vue'
import { useAuthStore } from '../../stores/AuthStore';
const store = useAuthStore()
const validaionStore = useValidationStore()

const user = reactive({
  email : '',
  password : ''
})
const {t} = useI18n()
document.title = t('auth.login')
</script>
<template>

<div class=" mx-8 sm:max-w-sm md:max-w-lg sm:mx-auto   rounded-lg rounded-br-none rounded-tl-none border-[0.5px] border-x-0 border-green-700 bg-white ">
<BackComponent />

            <div class="w-[90%] sm:w-[80%] lg:w-[70%] mx-auto py-8  ">
                <p class="mb-2 text-center text-[14px]"> {{ $t('auth.login') }} </p>
                <Form  @submit="store.login(user)"    v-slot="{ errors}" :validation-schema="validaionStore.loginSchema" >
                    <label >{{ $t('auth.email') }}  </label>
                    <Field class="Field" name="email" type="email" autocomplete="off"  v-model="user.email" validateOnInput  />
                    <span class="text-red-500 text-sm my-1 " >{{ errors.email }}</span>

                    <label class="block" >{{ $t('auth.password') }}  </label>
                    <Field class="Field" name="password" type="password" autocomplete="off"  v-model="user.password" validateOnInput  />
                    <span class="text-red-500 text-sm my-1 " >{{ errors.password }}</span>

                    <button >{{$t('auth.login')}}</button>
                </Form>

                <div class="flex gap-x-1 justify-center mt-2 text-[12px]   ">
                    <p>{{ $t('auth.dont_have_account') }} </p>
                   <router-link to="/register" class="text-blue-800">{{ $t('auth.register') }}</router-link>
                </div>

            </div>



</div>

</template>

