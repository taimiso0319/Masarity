import Cards from '@/views/sample/base/Cards'

export default {
  path     : 'members',
  redirect : '/members/list',
  name     : 'members',
  component: {
    render (c) {
      return c('router-view')
    },
  },
  children: [
    {
      path      : 'masarity',
      name      : 'Masarity',
      components: Cards,
    },
  ],
}
