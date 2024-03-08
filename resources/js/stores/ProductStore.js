import { ref, computed, watch, reactive } from 'vue'
import { defineStore } from 'pinia'
import api from '../axios.js'
import { useRoute } from 'vue-router'
import { useToastr } from '../toastr'
import { useI18n } from 'vue-i18n'

export const useProductStore = defineStore('product', () => {
    const loading = ref(false)
    const products = ref([])
    const productsByCategory = ref([])
    const toastr = useToastr()
    const product = ref(
      {
        id : '' ,
		category_id: '',
		title: {
			ar: '',
			en: '',
            tr: '',

		},
		description: {
			ar: '',
			en: '',
            tr: ''
		},
		image: '',
		slug: '',
		price: '',
		quantity: '',
        category : {}
	})
    product.qty = ref(0)
    const { t } = useI18n()

    const getTotal = (product) =>
    {
        return product.price *  product.qty
    }


    const cartItems = ref( JSON.parse(localStorage.getItem('cartItems')) ?   JSON.parse(localStorage.getItem('cartItems'))  : [])
    const favoriteItems = ref( JSON.parse(localStorage.getItem('favoriteItems')) ?   JSON.parse(localStorage.getItem('favoriteItems'))  : [])

    const cartItemsCount =  computed(()=>{
        return Object.keys(cartItems.value).length
    })
    const cartItemsQty = computed(() => {
        return cartItems.value.reduce((total, item) => {
          return total +   item.qty;
        }, 0);
    })

    const subtotal = computed(() => {
        return cartItems.value.reduce((total, item) => {
          return total + (item.price * item.qty);
        }, 0);
    })
    const vat = computed(() => {
        return subtotal.value * 0.05
    })
    const totalCost = computed(() => {
        return subtotal.value + shippingCost.value + vat.value
    })

    const shippingCost = ref(10)
    const favoriteItemsCount =  computed(()=>{
        return Object.keys(favoriteItems.value).length
    })



    const getProducts = async() =>
    {
        try {
            loading.value = true
            setTimeout(() => {
                loading.value = false

            }, 1500)
            const result  =  await api.get('products')
            products.value = result.data
        } catch (ex) {
            console.error('Error fetching data:');
        }
    }

    const getProductsByCategory = async(id) =>
    {
        loading.value = true
        setTimeout(() => {
            loading.value = false

        }, 1000)
        await   getProducts()

        productsByCategory.value =  products.value.filter(pro => pro.category_id == id )
    }

    const getProduct = async(id) =>
    {
        await   getProducts()
        product.value =  products.value.find(pro => pro.id == id )
        if(product.value != undefined && product.value != null   )
        {
                localStorage.setItem('product' , product.value)
        }
    }

    const addToCart = (product) =>
    {

        const index = cartItems.value.findIndex(item => item.id === product.id);
        if( index !== -1){
            // cartItems.value[index].qty += 1
            localStorage.setItem("cartItems", JSON.stringify(cartItems.value))
            toastr.info(t('states.already_exists', {'item': t('general.shopping_cart')}))
        }

        else{
            product.qty = 1
            cartItems.value.push(JSON.parse(JSON.stringify(product)))
            localStorage.setItem("cartItems", JSON.stringify(cartItems.value))
            toastr.success(t('states.added_to',{'item' : t('general.shopping_cart') }))
         }
    }
    const incrementQty = (product) =>{
        const index = cartItems.value.findIndex(item => item.id === product.id);
        if(index !== -1) {
            cartItems.value[index].qty += 1
            localStorage.setItem("cartItems", JSON.stringify(cartItems.value))
        }
    }
    const decrementQty = (product) =>{
        const index = cartItems.value.findIndex(item => item.id === product.id);
        if(index !== -1) {
            cartItems.value[index].qty -= 1
            if(cartItems.value[index].qty === 0){
                removeFromCart(product)
            }
        localStorage.setItem("cartItems", JSON.stringify(cartItems.value))
        }
    }
    const  removeFromCart = (product) => {
        cartItems.value = cartItems.value.filter(p => p.id !== product.id)
        localStorage.setItem("cartItems", JSON.stringify(cartItems.value));
    }
    const  clearCart = () => {
        cartItems.value = []
        localStorage.setItem("cartItems", JSON.stringify(cartItems.value))
    }

    const addToFavorites = (product) =>
    {
        const index = favoriteItems.value.findIndex(item => item.id === product.id);
        if( index === -1){
            favoriteItems.value.push(JSON.parse(JSON.stringify(product)))
            localStorage.setItem("favoriteItems", JSON.stringify(favoriteItems.value))
            toastr.success(t('states.added_to',{'item' : t('general.favorites_cart') }))

        }
        else
        {
            // favoriteItems.value.splice(JSON.parse(JSON.stringify(product)),1)
            // localStorage.setItem("favoriteItems", JSON.stringify(favoriteItems.value))
            toastr.info(t('states.already_exists' , {'item' : t('general.favorites_cart') }))

        }
    }

    const  removeFromFavorites = (product) => {
        favoriteItems.value = favoriteItems.value.filter(p => p.id !== product.id)
        localStorage.setItem("favoriteItems", JSON.stringify(favoriteItems.value));
        // toastr.info(t('states.removed_from', {'item' : t('general.favorites_cart') }))
    }


    return { loading ,   products  , product , productsByCategory , cartItems , cartItemsCount , cartItemsQty  ,  subtotal , shippingCost , vat , totalCost   , favoriteItems , favoriteItemsCount   , getProducts , getProductsByCategory , getProduct  , addToCart , incrementQty , decrementQty , removeFromCart , clearCart , getTotal , addToFavorites ,  removeFromFavorites}

})




