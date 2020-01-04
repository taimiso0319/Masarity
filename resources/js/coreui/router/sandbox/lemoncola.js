import LemoncolaSample from '@/views/sandbox/lemoncola/LemoncolaSample'

export default
{
  path     : 'sandbox/lemoncola',
  redirect : 'sandbox/lemoncola/sample',
  name     : 'LemoncolaSandbox',
  component: { render (c) { return c('router-view') } },
  children : [
    {
      path     : 'sample',
      name     : 'LemoncolaSample',
      component: LemoncolaSample,
    },
  ],
}
