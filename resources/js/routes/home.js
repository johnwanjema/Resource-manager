const home = () =>import ( '../components/home/home.vue')

export default [
    {
        path: '/home/:category',
        component: home,
        name: 'home',
        props: true
    },
    {
        path: '/home',
        redirect:'/home/pdfs'
    },
]
