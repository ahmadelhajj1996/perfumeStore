import { reactive ,  watch  } from 'vue'
import { defineStore } from 'pinia'
import api from '../axios'
export const useTestStore = defineStore('test', () => {
    const data = reactive(
        {
            en : '',
            ar : ''
        })
    
    const fetch =(a , b)=>
    {

        data.en = a,
        data.ar = b
        localStorage.setItem('data' , JSON.stringify('data',data))
    }

    return {data , fetch}
})
