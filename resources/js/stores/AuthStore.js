import { ref, computed, reactive } from 'vue'
import { defineStore } from 'pinia'
import api from '../axios.js'
import { useRouter , useRoute } from 'vue-router'
import { useToastr } from '../toastr'
import { useGeneralStore } from './GeneralStore.js'
import { useI18n } from 'vue-i18n'
export const useAuthStore = defineStore('auth', () => {

    const user = ref({})
    const token = ref(null)
    const router = useRouter()
    const toastr = useToastr()
    const store = useGeneralStore()
    const { t } = useI18n()
    const login = async(user) =>
    {
        try {
            const result = await api.post('login' , user)
            user.value = result.data.user
            token.value = result.data.token
            localStorage.setItem("user", JSON.stringify(user.value))
            router.push(localStorage.getItem('lastPath'))
        } catch (error) {
             toastr.error(t('states.not_logged_in'))
             console.error('An error occurred:', error);
        }
    }
    const register = async(user) =>
    {
        try {

            const result = await api.post('register' , user)
            user.value = result.data.user
            localStorage.setItem("user", JSON.stringify(user.value))

            toastr.success(t('states.registered'))

            router.push('/')
        } catch (error) {
 //            toastr.error('email or password incorrect !')
             console.error('An error occurred:' ,error);
        }
    }


    return {  user , token ,   login , register  }

})
