import axios from 'axios/index'

const baseDomain = process.env.MIX_API_BASE_DOMAIN
const baseURL    = `${baseDomain}/api/v1`

export default axios.create({ baseURL: baseURL })
