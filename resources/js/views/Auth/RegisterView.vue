<script setup>
import BackComponent from '../../components/partials/BackComponent.vue'
import { Form ,Field ,ErrorMessage } from 'vee-validate';
import { reactive } from 'vue'
import { useValidationStore } from '../../yup';
import { useI18n } from 'vue-i18n'
import { useRouter } from 'vue-router'
import { useAuthStore } from '../../stores/AuthStore';
const store = useAuthStore()
const validaionStore = useValidationStore()
const router = useRouter()
const user = reactive({
    name : '',
    email : '',
    password : '',
    password_confirmation : ''
})

const {t} = useI18n()
document.title = t('auth.register')
</script>
<template>

<div>

<div class=" mx-8 sm:max-w-sm md:max-w-lg sm:mx-auto  rounded-sm border-[0.5px] border-x-0 border-green-700 bg-white ">
<BackComponent />

            <div class="w-[90%] sm:w-[80%] lg:w-[70%] mx-auto py-8  ">
            <p class="mb-2 text-center text-[14px]"> {{ $t('auth.register') }} </p>

                <Form  @submit="store.register(user)"    v-slot="{ errors}" :validation-schema="validaionStore.registerSchema" >
                    <label >{{ $t('auth.name') }}   </label>
                        <Field class="Field" name="name" type="text" autocomplete="off"  v-model="user.name" validateOnInput  />
                        <span class="text-red-500 text-sm mt-1 " >{{ errors.name }}</span>

                        <label class="block" >{{ $t('auth.email') }}  </label>
                        <Field class="Field" name="email" type="email" autocomplete="off"  v-model="user.email" validateOnInput  />
                        <span class="text-red-500 text-sm mt-1 " >{{ errors.email }}</span>



                        <label class="block" >{{ $t('auth.password') }} </label>
                        <Field class="Field" name="password" type="password" autocomplete="off"  v-model="user.password" validateOnInput  />
                        <span class="text-red-500 text-sm mt-1 " >{{ errors.password }}</span>

                        <label class="block" >{{ $t('auth.password_confirmation') }}  </label>
                        <Field class="Field" name="password_confirmation" type="password" autocomplete="off"  v-model="user.password_confirmation" validateOnInput  />
                        <span class="text-red-500 text-sm mt-1 " >{{ errors.password_confirmation }}</span>


                    <button >{{$t('auth.register')}}</button>
                </Form>

                <div class="flex gap-x-1 justify-center mt-2 text-[12px]   ">
                    <p>{{ $t('auth.already_have_an_account') }} </p>
                   <router-link to="/login" class="text-blue-800">{{ $t('auth.login') }}</router-link>
                </div>

            </div>



</div>
</div>
</template>
