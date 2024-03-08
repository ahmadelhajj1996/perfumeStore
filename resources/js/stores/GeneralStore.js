import { ref,  watch  } from 'vue'
import { defineStore } from 'pinia'
import api from '../axios.js'
import { useI18n } from 'vue-i18n';
import { useToastr } from '../toastr.js';
import { useRoute } from 'vue-router';

export const useGeneralStore = defineStore('grneral', () => {
    const loading = ref(false)
    const categories = ref([])
    const users = ref([])

    const route = useRoute()

    const toastr = useToastr()
    const { locale } = useI18n();
    const selectedLang = ref(locale.value);
    const supportedLangs = [
        {key : 'en' , value : 'English'},
        {key : 'ar' , value : 'العربية'},
        {key : 'tr' , value : 'Türkiye'},
    ];
    const setLanguage = (value)=>{
        selectedLang.value = value
    }
    const getCategories = async() =>
    {
        try {
            loading.value = true
            setTimeout(() => {
                loading.value = false
            }, 500);

            const result  =  await api.get('categories')
            categories.value = result.data
        } catch (ex) {

            console.error('Error fetching data:');
        }
    }
    const getUsers = async() =>
    {
        try {
            const result  =  await api.get('users')
            users.value = result.data
        } catch (ex) {
            console.error('Error fetching data:');
        }
    }
    watch(selectedLang, (newVal) => {
    locale.value = newVal;
    const dir =  newVal === "ar" ? "rtl": "ltr"
    localStorage.setItem("language",newVal)
    localStorage.setItem('dir',dir)
    document.querySelector( "#body").setAttribute("dir",dir)
    document.querySelector( "#body").setAttribute("lang",newVal)
    toastr.options.rtl = false
    if(newVal === 'ar' || localStorage.getItem('language') == 'ar' ){toastr.options.rtl = true};
    // if(route.name !='category' && route.name != 'product')
    // {
    //     document.title = route.meta.title[newVal]
    // }
    });
    const phoneCodes = [
        {
            value : '971',
            title :  {
                en :  '+971 - UAE',
                ar : '971 + ',
                tr :  '+971'

            }
        },
        {
            value : '974',
            title :  {
                en :  '+974 - Qatar',
                ar : '974 +',
                tr :  '+974'

            }
//            title :  ' 974 '   //Qatar
        },
        {
            value : '966',
            title :  {
                en :  '+966 - KSA',
                ar : '966 +',
                tr : '+966 '
            }   //KٍٍِSA
        },
        {
            value : '965',
            title :  {
                en :  '+965 - Kuw',
                ar : '965 +',
                tr :  '+965 '

            }   //Kuwait
        },
        {
            value : '973',
            title : {
                en :  '+973 - KSA',
                ar : '973 +',
                tr :  '+973 '

            }   //Bahrain
        },
        {
            value : '968',
            title :  {
                en :  '+968 - OM',
                ar : '968 +',
                tr :  '+968 ',

            }   //Oman
        }
    ]
    return { loading,  categories  ,  getCategories , users , getUsers ,  selectedLang,setLanguage, supportedLangs , phoneCodes  }
})
