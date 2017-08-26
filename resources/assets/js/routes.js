import VueRouter from 'vue-router';
//admin
let routes=[
    {
        path:'/',
        component:require('./components/client/pages/home')
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
        component:require('./components/client/pages/userprofile')
    }
    /*{
    path:'/About',
    component:require('./components/')

    } */
];
export default new VueRouter({
    routes
});

