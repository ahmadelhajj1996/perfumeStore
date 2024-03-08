import { createI18n } from 'vue-i18n';
import { ref  , watch ,  readonly, computed   } from 'vue';
import en from './locales/en.json'
import ar from './locales/ar.json'
import tr from './locales/tr.json'


const i18n = createI18n({
  legacy: false,
  locale:  localStorage.getItem('language') ? localStorage.getItem('language') : 'en' ,
  fallbackLocale: 'en',
  formatFallbackMessages: true,
  globalInjection:true,
  messages: {
    en ,
    ar ,
    tr
  }
})


export default i18n;
