import toastr from "toastr";
import 'toastr/build/toastr.min.css'
import { useGeneralStore } from  "./stores/GeneralStore"
import { computed, ref } from "vue";
import { useI18n } from 'vue-i18n'
export const  useToastr = () =>
{
    const store = useGeneralStore()
    const { locale } = useI18n()

    toastr.options.positionClass = 'toast-bottom-center'
    toastr.options.progressBar = true
    toastr.options.timeOut= 2500
    toastr.options.preventDuplicates = true
    toastr.options.rtl =  false
    if( locale.value == 'ar' )
    { toastr.options.rtl =  true
    }
    toastr.options.defaultClassNames =  ['animated', 'zoomInUp']
    return  toastr;
}
