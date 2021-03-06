    import Vue from 'vue'
    import VueRouter from 'vue-router'
    window.axios = require('axios');

    Vue.use(VueRouter)

    import App from './components/App'
    import Create from './components/Create'
    import AllPosts from './components/AllPosts'
    import EditPost from './components/EditPost'

    const router = new VueRouter({
        mode: 'history',
        routes: [
            {
                path: '/create',
                name: 'create',
                component: Create,
                props: {
                  title: "LaraVue SPA Create Posts"
                }
            },
            {
                path: '/allposts',
                name: 'allposts',
                component: AllPosts,
                props: {
                    title: "LaraVue SPA Posts"
                }
            },
            {
              path:'/editpost/:id',
              name: 'editpost',
              component: EditPost,
              props:{
                title: "LaraVue SPA Edit Post"
              }
            },
            {
              path:'/deletePost',
              name: 'deletepost'
            },
        ],
    })
    const app = new Vue({
        el: '#app',
        components: { App },
        router,
    });
