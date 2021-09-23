const home = () =>import ( '../components/home')

export default [
    {
        path: '/home/:category',
        component: home,
        name: 'home',
        props: true
    },
    {
        path: '/home',
        redirect:'/home/pdf'
    },
]
