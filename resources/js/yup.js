import { defineStore } from 'pinia'
import * as yup from 'yup'
import { computed } from 'vue'
import api from './axios.js'
import { useI18n } from 'vue-i18n'
import { useGeneralStore } from './stores/GeneralStore';

export const useValidationStore = defineStore('validation', () => {

    const {t} = useI18n()
    const store = useGeneralStore()

    const  email =yup.string().email(t('yup.email')).required(t('yup.required',{'field': t('auth.email') }))
    const password = yup.string().required(t('yup.requiredF',{'field': t('auth.password') } )).min(8 , t('yup.at_leastF',{ 'field' : t('auth.password') , 'num' : 8}))
    const name = yup.string().required(t('yup.required',{'field': t('auth.name') } )).min(8 , t('yup.at_leastF',{ 'field' : t('auth.name') , 'num' : 8}))
    const phone = yup.string().required(t('yup.required',{'field': t('user.phone') } )).matches(/^\d{9}$/, t('yup.must' , {'field': t('user.phone') , 'num' : 9}))
    const code = yup.string().required(t('yup.required',{'field': t('user.country_code') }))

    const message = yup.string().required(t('yup.requiredF',{'field': t('general.message') } )).min(20 , t('yup.at_leastF',{ 'field' : t('general.message') , 'num' : 20}))

    const password_confirmation =  yup.string().required(t('yup.required',{'field': t('auth.password_confirmation') } )).oneOf([yup.ref('password'), null], t('yup.doesnt_match'))

    const nameOnCard = yup.string().required(t('yup.required',{'field': t('order.name_on_card') } )).min(8 , t('yup.at_leastF',{ 'field' : t('order.name_on_card') , 'num' : 8}))
    const cardNumber =  yup
                        .string()
                        .required(t('yup.required',{'field': t('order.card_number') } ))
                        .matches(/^\d{12}$/, t('yup.must' , {'field': t('order.card_number') , 'num' : 12}))


    const expirationDate = yup.string().required(t('yup.required',{'field': t('order.expiration_date') } ))
        .matches(
            /^(0[1-9]|1[0-2])\/([2-9][0-9])$/,
            t('yup.expiration_date')
        ).test(
        'is-expired',
        t('yup.card_expied')  ,
        value => {
        if (!value) return false; // If value is empty, consider it expired
        const [month, year] = value.split('/');
        const expiration = new Date(parseInt('20' + year), parseInt(month) - 1, 1);
        const currentDate = new Date();
        currentDate.setHours(0, 0, 0, 0);
        return expiration >= currentDate;
        }
    )

    const cvn =  yup.string()
                        .required(t('yup.required',{'field': t('order.cvn') }))
                        .matches(/^\d{3,4}$/, t('yup.must_either' , {'field': t('order.card_number') , 'num1' : 3 , 'num2' : 4 }))


    const company = yup.string().required(t('yup.requiredF',{'field': t('user.company') } ))
    const address = yup.string().required(t('yup.required',{'field': t('user.address') } ))
    const apartment = yup.string().required(t('yup.requiredF',{'field': t('user.apartment') } ))
    const city = yup.string().required(t('yup.requiredF',{'field': t('user.city') } ))
    const state = yup.string().required(t('yup.requiredF',{'field': t('user.state') } ))
    const postalCode = yup.string()
                            .required(t('yup.required',{'field': t('user.postal_code') } ))
                            .matches(/^\d{5}(-\d{4})?$/,  t('yup.must' , {'field': t('user.postal_code') , 'num' : 5}))

                            const paymentSchema = yup.object({
                                email ,
                                phone ,
                                code ,
                                nameOnCard ,
                                cardNumber ,
                                expirationDate ,
                                cvn ,
                                company ,
                                address ,
                                apartment ,
                                city ,
                                state ,
                                postalCode
                            });

                            const messageSchema = yup.object({
                                email ,
                                name ,
                                message
                            });



    const loginSchema = yup.object({
        email ,
        password
    });

     const registerSchema = yup.object({
        name ,
        email : yup.string().email(t('yup.email')).test('unique', t('yup.taken' , {'field' : t('auth.email')}) , async (value) => {
            await  store.getUsers()
            const emails =  store.users.map(user => user.email)
            return !emails.includes(value);
        }).required(t('yup.required',{'field': t('auth.email') } )),
        password ,
        password_confirmation

    });


    return { paymentSchema ,  registerSchema , loginSchema , messageSchema  }
})

