const dashboard = () =>import ( '../components/admin/dashboard')
const pdfs = () =>import ( '../components/admin/pdf')

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
    {
        path: '/admin/pdfs',
        component: pdfs,
        name: 'pdfs',
    },
]
