import members from './members'

const repositories = {
  members: members,
}

export const RepositoryFactory = { get: (name) => repositories[name] }
