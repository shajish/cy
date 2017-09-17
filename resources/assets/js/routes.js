import VueRouter from 'vue-router';
//admin
const routes=[
    {
        path:'/',
        component:require('./components/client/pages/home'),
        name: 'home'
    },
    {
        path:'/blog',
        component:require('./components/client/pages/blog')
    },
    {
        path:'/event',
        component:require('./components/client/pages/event')
    },

    {
        path:'/professionals',
        component:require('./components/client/pages/professionals')
    },
    {
        path:'/news',
        component:require('./components/client/pages/news')
    },
    {
        path:'/userprofile',
        component:require('./components/client/pages/userprofile'),
        meta: {
            requiresAuth: true
        }
    }
    /*{
    path:'/About',
    component:require('./components/')

    } */
];

// export const router = new VueRouter({
//     mode: 'history',
//     routes
// });
export default new VueRouter({
    routes
});

// routes.beforeEach((to, from, next) => {
//     if(to.meta.requiresAuth){
//         const authUser = JSON.parse(window.localStorage.getItem('token'));
//
//         if(authUser && authUser.token){
//             next();
//         }else{
//             next({
//                 name: 'home'
//             })
//         }
//         next()
//     }
// });