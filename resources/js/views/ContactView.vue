<script setup>
import BackComponent from '../components/partials/BackComponent.vue'
import { ref , reactive, onMounted } from 'vue'
import { Form , Field , ErrorMessage } from 'vee-validate';
import { useValidationStore } from '../yup'
import { useToastr } from '../toastr';
import { useRouter } from 'vue-router'
import { useProductStore } from '../stores/ProductStore';
import { useI18n } from 'vue-i18n';
const { t }  = useI18n()
const store = useProductStore()
const validaionStore = useValidationStore()

const router = useRouter()
const toastr = useToastr()
const user = ref(localStorage.getItem('user') ? JSON.parse(localStorage.getItem('user')) : {
    name : '',
    email :  ''
})
const Info = reactive({
  name : user.value.name,
  email :  user.value.email,
  message : '',
})

const sendMessage = ()=>
{
    console.log(Info)
    toastr.success('Payment Successfully')
    router.push('/')
}

onMounted(()=>{
    document.title = t('general.contact')
})
</script>

<template>
<div>

<div class=" mx-4 sm:max-w-2xl sm:mx-8  md:mx-4 lg:mx-6 md:max-w-7xl   rounded-sm border-[0.5px] border-x-0 border-green-700 bg-white ">
<BackComponent />
<div  class="sm:flex sm:divide-x-[1px] divide-gray-100">


    <div class=" w-full  sm:w-[50%]   md:w-[45%] lg:w-[20] shadow-lg bg-white ">

        <div class="  ">

                    <div class="text-[16px] ps-3  py-4">{{$t('general.contact')}} </div>



                    <div class=" px-4 py-2 mt-2 border-t-[0.5px] ">
                      <div class="flex gap-x-2  text-[14px] italic">
                        <span >{{$t('user.phone')}} : </span><p dir="ltr"> +971 502 948 819  </p>
                      </div>
                    </div>
                    <div class=" px-4 py-2   ">
                      <div class="flex gap-x-2  text-[14px] italic">
                        <span >{{$t('general.customer_service')}} :  </span>
                        <p dir="ltr"> +971 502 948 819  </p>
                      </div>
                    </div>
                    <div class=" px-4 py-2   ">
                      <div class="flex gap-x-2  text-[14px] italic">
                        <span >{{$t('general.whatsapp')}} :   </span>
                        <p dir="ltr"> +971 502 948 819  </p>
                      </div>
                    </div>
                    <div class=" px-4 py-2   ">
                      <div class="flex gap-x-2  text-[14px] italic">
                        <span >{{$t('auth.email')}} :  </span>
                        <p dir="ltr"> ahmad.1996.elhaj@gmail.com  </p>
                                      </div>
                    </div>
                </div>
 </div>

<div class="w-full  sm:w-[50%]   md:w-[55%]  lg:w-[80] p-4 ">

<Form @submit="sendMessage()" v-slot="{ errors}" :validation-schema="validaionStore.messageSchema" >
<div class="text-[16px] pb-2">{{$t('general.sendMessage')}}</div>

<div class="w-full md:flex md:gap-x-2">
    <div class="w-full md:w-[50%]">
    <label >{{$t('auth.name')}}  </label>
    <Field class="Field" name="name" type="text" autocomplete="off"  v-model="Info.name"  validateOnInput  />
    <span class="text-red-500 text-sm mt-1 " >{{ errors.name }}</span>
    </div>

    <div class="w-full md:w-[50%]">
        <label >{{$t('auth.email')}}  </label>
        <Field class="Field" name="email" type="text" autocomplete="off"  v-model="Info.email"  validateOnInput  />
        <span class="text-red-500 text-sm mt-1 " >{{ errors.email }}</span>
    </div>


</div>

<div>
    <label >{{$t('general.message')}}  </label>
    <Field as="textarea" class="Field" name="message" type="text"  v-model="Info.message" validateOnInput  />
    <span class="text-red-500 text-sm block " >{{ errors.message }}</span>
</div>





    <div class="w-full md:w-[60%] mx-auto">
        <button class=" mt-3"  >{{$t('general.send')}} </button>
    </div>
</Form>
    </div>

</div>


</div>
</div>
</template>

