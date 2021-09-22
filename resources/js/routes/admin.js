const dashboard = () =>import ( '../components/admin/dashboard.vue')

export default [
    {
        path: '/admin/dashboard',
        component: dashboard,
        name: 'dashboard',
    },
    {
        path: '/admin',
        redirect:'/admin/dashboard'
    },
]
