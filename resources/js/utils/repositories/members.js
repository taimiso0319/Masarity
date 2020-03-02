import Repository from './repository'

const resource = '/members'

export default {
  getMembers () {
    return Repository.get(`${resource}?part=snippet,twitter`)
  },
}
