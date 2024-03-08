import { createRouter, createWebHistory } from 'vue-router'
import HomeView from '../views/HomeView.vue'
import CategoryProductsView from '../views/CategoryProductsView.vue'
import TestView from '../views/TestView.vue'
import ProductView from '../views/ProductView.vue'
//import i18n from '../i18n/i18n'

const routes = [
    {
      path: '/',
      name: 'home',
      component: HomeView,
      meta: {
        title:
        {
            en: 'Home',
            ar: 'الرئيسية',
            tr: 'ANA SAYFA'
        }
    }
   },
    {
        path: '/contact',
        name: 'contact',
        component: ()=> import('../views/ContactView.vue'),
        meta: {
            title:
            {
                en: 'Contact Us',
                ar: 'تواصل معنا',
                tr: 'Bize Ulaşın'
            }
        }
    },

    {
        path: '/:id/:title',
        name: 'category',
        component: CategoryProductsView,
        meta: {
            title: route =>  route.params.title + ' Group'
        }
    },

    {
        path: '/products/:id/:title',
        name: 'product',
        component: ProductView,
        meta: {
            title: route =>  route.params.title
        }
    },

    {
      path: '/test',
      name: 'test',
      component: TestView,
    },
    {
        path: '/shopping-cart',
        name: 'shoppingCart',
        component: ()=> import('@/views/shoppingCart.vue'),
        meta: {
            title:
            {
                en: 'Shopping cart',
                ar: 'سلة التسوق',
                tr: 'Alışveriş Sepeti'
            }
        }
    },
    {
        path: '/favorites',
        name: 'favorites',
        component:      () =>   import('@/views/FavoritesView.vue'),
        meta: {
            title:
            {
                en: 'Favorites cart',
                ar: 'قائمة المفضلة',
                tr: 'Sık kullanılanlar sepeti'
            }
        }
    },
    {
        path: '/login',
        name: 'login',
        component: () => import('@/views/Auth/LoginView.vue'),
        meta: {
            title:
            {
                en: 'Login',
                ar: 'تسجيل الدخول',
                tr: 'Giriş yap'
            }
        },

    },
    {
        path: '/register',
        name: 'register',
        component: () => import('@/views/Auth/RegisterView.vue'),
        meta: {
            title:
            {
                en: 'Register',
                ar: 'انشاء حساب',
                tr: 'Hesap oluştur'
            }
        },
    },
    {
        path: '/checkout',
        name: 'checkout',
        component: () => import('@/views/CheckoutView.vue'),
        meta: {
            title:
            {
                en: 'Checkout',
                ar: 'اتمام الطلب',
                tr: 'checkout'
            }
        },
        beforeEnter: (to, from, next) => {
            if (!localStorage.getItem('user')) {
              next('/login');
            } else {
              next()
            }
          }
    },
    {
        path: '/:catchAll(.*)',
        name: 'NotFound',
        component: () => import('../views/NotfoundView.vue'),
        meta: {
            title:
            {
                en: 'Not Found Page',
                ar: 'الصفحة غير  متوفرة',
                tr: 'Bulunamadı sayfası'
            }
        },
    }
]

const router = createRouter({
    history: createWebHistory(import.meta.env.BASE_URL),
    routes
})


router.beforeEach((to, from, next) => {

    if (typeof to.meta.title === 'function') {
      document.title = to.meta.title(to)
    } else {
      document.title = to.meta.title
    }

    if(!to.meta.title)
    {

    }
    localStorage.setItem('lastPath' , from.fullPath)
    next()
})




export default router
