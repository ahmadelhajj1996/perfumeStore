<script setup>
import BackComponent from '../components/partials/BackComponent.vue'
import { ref , reactive } from 'vue'
import { Form , Field , ErrorMessage } from 'vee-validate';
import { useValidationStore } from '../yup';
import { useToastr } from '../toastr';
import { useRouter } from 'vue-router'
import { useProductStore } from '../stores/ProductStore';
import { useGeneralStore } from '../stores/GeneralStore';
import { useI18n } from 'vue-i18n';
const { locale, t } = useI18n();
const gStore = useGeneralStore()
const store = useProductStore()
const validaionStore = useValidationStore()
const router = useRouter()
const toastr = useToastr()
const user = ref(localStorage.getItem('user') ? JSON.parse(localStorage.getItem('user')) : null )
const checkoutInfo = reactive({
  email : user.value.email,
  phone : '',
  code : '971',
  nameOnCard : '',
  cardNumber : '',
  expirationDate : '',
  cvn : '',
  company : '',
  address : '',
  apartment : '',
  city : '',
  state : '',
  postalCode : '',
})

document.title = t('order.checkout')

const pay = ()=>
{
    const res =  checkoutInfo.code.toString() + checkoutInfo.phone.toString()
    console.log(res)
    toastr.success('Payment Successfully')
    router.push('/')
}
</script>

<template>
<div>

<div class=" mx-4 sm:max-w-2xl sm:mx-8  md:mx-4 lg:mx-6 md:max-w-7xl   rounded-sm border-[0.5px] border-x-0 border-green-700 bg-white ">
<BackComponent />
<div  class="sm:flex sm:divide-x-[1px] divide-gray-100">


    <div class=" w-full  sm:w-[50%]   md:w-[35%] lg:w-[20]  ">

        <div class="px-16 sm:px-2  md:px-2 lg:px-12 py-4 shadow-lg">
                  <div class="  bg-white shadow-xl">

                    <div class="text-[16px]   py-4 text-center    ">{{$t('order.order_summary')}}</div>

                    <div class=" px-4 py-2 mt-2 border-t-[0.5px] ">
                      <div class="flex gap-x-2  text-[14px] italic">
                        <p>  {{$t('order.items_count')}} : </p>{{ store.cartItemsCount }}
                      </div>
                    </div>
                    <div class=" px-4 py-2   ">
                      <div class="flex gap-x-2  text-[14px] italic">
                        <p>  {{ $t('order.sub_total') }} : </p>{{ store.subtotal }} $
                      </div>
                    </div>
                    <div class=" px-4 py-2   ">
                      <div class="flex gap-x-2  text-[14px] italic">
                        <p>  {{ $t('order.shipping') }} : </p>{{ store.shippingCost }} $
                      </div>
                    </div>
                    <div class=" px-4 py-2   ">
                      <div class="flex gap-x-2  text-[14px] italic">
                        <p>  {{$t('order.vat')}} : </p>{{ store.vat }} $
                      </div>
                    </div>

                    <div class=" px-4 py-2 mt-2 border-t-[0.5px] ">
                      <div class="flex gap-x-2  text-[14px] italic">
                        <p>  {{$t('order.total')}} : </p>{{ store.totalCost }} $
                      </div>
                    </div>
                    <div class="p-3 pt-2">

                        <button @click="router.push('/shopping-cart')"  >{{$t('order.edit_order')}}</button>
                      </div>
                  </div>
                </div>
     </div>

<div class="w-full  sm:w-[50%]   md:w-[65%]  lg:w-[80] p-4 ">
<Form @submit="pay()" v-slot="{ errors}" :validation-schema="validaionStore.paymentSchema" >
<div class="text-[16px] pb-2">{{$t('general.contact_information')}}</div>

<div class="w-full md:w-[50%]">
    <label >{{$t('auth.email')}}  </label>
    <Field class="Field" name="email" type="email" autocomplete="off"  v-model="checkoutInfo.email" validateOnInput  />
    <span class="text-red-500 text-sm mt-1 " >{{ errors.email }}</span>
</div>
<div class="w-full md:flex md:gap-x-2">
    <div class="w-full md:w-[30%]">
    <label >{{$t('user.country_code')}}  </label>
    <Field as="select"   class="Field" name="code"  autocomplete="off"  v-model="checkoutInfo.code" validateOnInput  >
    <option v-for="item in gStore.phoneCodes" :key="item.value" :value="item.value" >  {{ item.title[locale] }} </option>
    </Field>

    </div>
    <div class="w-full md:w-[70%]">
    <label >{{$t('user.phone')}}  </label>
    <Field class="Field" name="phone" type="tel" autocomplete="off"  v-model="checkoutInfo.phone"  validateOnInput  />
    <span class="text-red-500 text-sm mt-1 " >{{ errors.phone }}</span>
    </div>
</div>




<div class="text-[16px] py-2">{{$t('order.payment_details')}}</div>
<div class="w-full md:flex md:gap-x-2">
    <div class="w-full md:w-[50%]">
        <label > {{$t('order.name_on_card')}}  </label>
        <Field class="Field" name="nameOnCard" type="text" autocomplete="off"  v-model="checkoutInfo.nameOnCard"   />
        <span class="text-red-500 text-sm mt-1 " >{{ errors.nameOnCard }}</span>
    </div>

    <div class="w-full md:w-[50%]">
    <label class="" >{{$t('order.card_number')}}  </label>
    <Field class="Field" name="cardNumber" type="text" autocomplete="off"  v-model="checkoutInfo.cardNumber" validateOnInput  />
    <span class="text-red-500 text-sm mt-1 " >{{ errors.cardNumber }}</span>
    </div>
</div>

<div class="w-full md:flex md:gap-x-2">
    <div class="w-full md:w-[50%]">
        <label >{{$t('order.expiration_date')}}  </label>
        <Field class="Field" name="expirationDate" type="text" autocomplete="off"  v-model="checkoutInfo.expirationDate" validateOnInput  />
        <span class="text-red-500 text-sm mt-1 " >{{ errors.expirationDate }}</span>
    </div>

    <div class="w-full md:w-[50%]">
        <label >{{$t('order.cvn')}}  </label>
        <Field class="Field" name="cvn" type="text" autocomplete="off"  v-model="checkoutInfo.cvn" validateOnInput  />
        <span class="text-red-500 text-sm mt-1 " >{{ errors.cvn }}</span>
    </div>
</div>

<div class="text-[16px] py-2">{{$t('user.shipping_address')}}</div>
<div class="w-full md:flex md:gap-x-2">
    <div class="w-full md:w-[50%]">
        <label >{{$t('user.company')}}  </label>
        <Field class="Field" name="company" type="text" autocomplete="off"  v-model="checkoutInfo.company" validateOnInput  />
        <span class="text-red-500 text-sm mt-1 " >{{ errors.company }}</span>
    </div>

    <div class="w-full md:w-[50%]">
        <label >{{$t('user.address')}}  </label>
        <Field class="Field" name="address" type="text" autocomplete="off"  v-model="checkoutInfo.address" validateOnInput  />
        <span class="text-red-500 text-sm mt-1 " >{{ errors.address }}</span>
    </div>
</div>
<div class="w-full md:flex md:gap-x-2">
    <div class="w-full md:w-[50%]">
        <label >{{$t('user.apartment')}}  </label>
        <Field class="Field" name="apartment" type="text" autocomplete="off"  v-model="checkoutInfo.apartment" validateOnInput  />
        <span class="text-red-500 text-sm mt-1 " >{{ errors.apartment }}</span>
    </div>

    <div class="w-full md:w-[50%]">
        <label >{{$t('user.city')}}  </label>
        <Field class="Field" name="city" type="text" autocomplete="off"  v-model="checkoutInfo.city" validateOnInput  />
        <span class="text-red-500 text-sm mt-1 " >{{ errors.city }}</span>
    </div>
</div>

<div class="w-full md:flex md:gap-x-2">
    <div class="w-full md:w-[50%]">
        <label >{{$t('user.state')}}  </label>
        <Field class="Field" name="state" type="text" autocomplete="off"  v-model="checkoutInfo.state" validateOnInput  />
        <span class="text-red-500 text-sm mt-1 " >{{ errors.state }}</span>
</div>

    <div class="w-full md:w-[50%]">
        <label >{{$t('user.postal_code')}}  </label>
        <Field class="Field" name="postalCode" type="text" autocomplete="off"  v-model="checkoutInfo.postalCode" validateOnInput  />
        <span class="text-red-500 text-sm mt-1 " >{{ errors.postalCode }}</span>
</div>
</div>

    <div class="w-full md:w-[60%] mx-auto my-4">
        <button   >{{$t('order.pay')}} </button>
    </div>
</Form>
    </div>

</div>


</div>
</div>



</template>

