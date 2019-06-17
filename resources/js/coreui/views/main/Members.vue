<template>
  <div class="animated fadeIn">
    <div class="card-deck">
      <member-profile-card />
      <member-profile-card />
      <member-profile-card />
      <member-profile-card />
    </div>
  </div>
</template>

<script>
import { MemberProfileCard } from '../../components'

export default {
  name      : 'Members',
  components: { MemberProfileCard },
}
</script>

<style scoped lang="scss">
</style>
