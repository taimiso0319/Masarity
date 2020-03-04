import axios from 'axios/index'

const baseURL    = `/api/v1`

export default axios.create({ baseURL: baseURL })
