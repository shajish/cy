import VueRouter from 'vue-router';
import CyHome from './components/client/pages/home.vue'
import CyLogin from './components/client/pages/auth/login.vue'
import CyRegister from './components/client/pages/auth/register.vue'


//admin
const routes=[
    {
      path: '/',
      component: CyHome
    },
    {
        path:'/login',
        component: CyLogin
    },
    {
        path:'/register',
        component: CyRegister
    }
    // {
    //     path:'/blog',
    //     component:require('./components/client/pages-bak/blog')
    // },
    // {
    //     path:'/event',
    //     component:require('./components/client/pages-bak/event')
    // },
    //
    // {
    //     path:'/professionals',
    //     component:require('./components/client/pages-bak/professionals')
    // },
    // {
    //     path:'/news',
    //     component:require('./components/client/pages-bak/news')
    // },
    // {
    //     path:'/userprofile',
    //     component:require('./components/client/pages-bak/userprofile'),
    //     meta: {
    //         requiresAuth: true
    //     }
    // }
];

export default new VueRouter({
    routes
});

