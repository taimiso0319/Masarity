import NazunaChannel from '@/views/fan/NazunaChannel'
import Full from '@/containers/Full'

export default [
  {
    path    : '/fan',
    redirect: '/fan/nazuna',
    name    : '非公認公式VTuber',
    component: { render (c) { return c('router-view') } },
    children: [
      {
        path     : 'nazuna',
        name     : 'なずちゃんねる',
        component: NazunaChannel,
      },
    ],
  },
]
