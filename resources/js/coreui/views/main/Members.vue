<template>
  <div class="animated fadeIn text-center">
    <div class="card-columns d-inline">
      <member-profile-card
        v-for="profile in profiles"
        :key="profile.twitter.name"
        :name="profile.twitter.name"
        :banner-url="profile.twitter.profile_banner_url | makeTwitterBannerUrl()"
        :twitter-url="profile.twitterId | makeTwitterIconUrl()"
        :steam-url="profile.steamId64 | makeSteamUrl()"
        :youtube-url="profile.youtubeChannelId | makeYouTubeUrl()"
        :thumbnail-url="profile.twitter.profile_image_url_https | replaceTwitterIconUrl()"
        :description="profile.twitter.description"
      />
    </div>
  </div>
</template>

<script>
import { MemberProfileCard } from '../../components'
import { RepositoryFactory } from '../../../utils/repositories/repository-factory'

const membersRepository = RepositoryFactory.get('members')

export default {
  name      : 'Members',
  components: { MemberProfileCard },
  filters   : {
    replaceTwitterIconUrl: function (value) {
      return value.replace('_normal', '_200x200')
    },
    makeTwitterIconUrl: function (value) {
      if (value !== null) return `https://twitter.com/i/user/${value}`
      return null
    },
    makeTwitterBannerUrl: function (value) {
      if (value !== null) return `${value}/600x200`
      return `https://pbs.twimg.com/profile_banners/800415710040076288/1548306383/600x200`
    },
    makeYouTubeUrl: function (value) {
      if (value !== null) return `https://www.youtube.com/channel/${value}`
      return null
    },
    makeSteamUrl: function (value) {
      if (value !== null) return `http://steamcommunity.com/profiles/${value}`
      return null
    },
  },
  data: function () {
    return {
      profiles : null,
      isLoading: false,
    }
  },
  mounted: function () {
    this.fetch()
  },
  methods: {
    async fetch () {
      this.isLoading = true
      const { data } = await membersRepository.getMembers()
      this.isLoading = false
      this.profiles  = data
    },
  },
}
</script>

<style scoped lang="scss">
</style>
