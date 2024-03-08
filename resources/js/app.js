import {  createApp } from 'vue'
import { createPinia } from 'pinia'
// import { computed } from 'vue'
import piniaPluginPersistedstate from 'pinia-plugin-persistedstate'
const pinia = createPinia()
pinia.use(piniaPluginPersistedstate)

import App from './App.vue'


import router from './router'
import i18n from './i18n/i18n.js'

const app = createApp(App)

app.provide('myFunction', (value) => {
    console.log('This is a global function :' , i18n.global.t(value))
})

app.use(i18n)
app.use(pinia)
app.use(router)
app.mount('#app')
