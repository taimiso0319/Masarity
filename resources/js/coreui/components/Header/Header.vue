<template>
  <header class="app-header navbar">
    <button
      class="navbar-toggler mobile-sidebar-toggler d-lg-none"
      type="button"
      @click="mobileSidebarToggle"
    >
      <span class="navbar-toggler-icon" />
    </button>
    <b-link
      class="navbar-brand"
      to="#"
    />
    <button
      class="navbar-toggler sidebar-toggler d-md-down-none"
      type="button"
      @click="sidebarToggle"
    >
      <span class="navbar-toggler-icon" />
    </button>
    <b-navbar-nav class="d-md-down-none">
      <b-nav-item href="https://colopl.co.jp/alicegearaegis/" target="_blank" class="px-2">
          <b-img class="app-icons rounded" src="https://colopl.co.jp/alicegearaegis/portal/img/common/ft_icon.jpg"/>
      </b-nav-item>
      <b-nav-item  href="https://www.arknights.jp/" target="_blank" class="px-2">
        <b-img class="app-icons rounded" src="https://is4-ssl.mzstatic.com/image/thumb/Purple113/v4/ea/90/08/ea900885-4fdb-bd08-b7cb-e04a72113ad4/AppIcon-0-0-1x_U007emarketing-0-0-0-9-0-85-220.png/230x0w.png"/>
      </b-nav-item>
      <b-nav-item  href="https://www.supermechachampions.com/jp/" target="_blank" class="px-2">
        <b-img class="app-icons rounded" src="https://pbs.twimg.com/profile_images/1149213400548777985/zshQDjjP_400x400.png"/>
      </b-nav-item>
      <b-nav-item href="https://apps.pmang.jp/browndust" target="_blank" class="px-2">
        <b-img class="app-icons rounded" src="https://review.game-apps.info/wp-content/uploads/2019/05/icon_browndust.jpg"/>
      </b-nav-item>
      <b-nav-item  href="https://colopl.co.jp/panipani/" target="_blank" class="px-2">
        <b-img class="app-icons rounded" src="https://pbs.twimg.com/profile_images/905682957532225536/KoCd3GQR_400x400.jpg"/>
      </b-nav-item>
    </b-navbar-nav>
    <b-navbar-nav class="ml-auto">
      <!--header-dropdown /-->
    </b-navbar-nav>
  </header>
</template>
<script>
// import HeaderDropdown from './HeaderDropdown.vue'

export default {
  name : 'CHeader',
  // components: { HeaderDropdown },
  props: {
    fixed: {
      type   : Boolean,
      default: true,
    },
  },
  mounted () {
    if (this.fixed) $('body').addClass('header-fixed')
  },
  beforeDestroy () {
    $('body').removeClass('header-fixed')
  },
  methods: {
    sidebarToggle (event) {
      event.preventDefault()
      document.body.classList.toggle('sidebar-hidden')
    },
    sidebarMinimize (event) {
      event.preventDefault()
      document.body.classList.toggle('sidebar-minimized')
    },
    mobileSidebarToggle (event) {
      event.preventDefault()
      document.body.classList.toggle('sidebar-mobile-show')
    },
  },
}

</script>

<style scoped>
  .app-icons{
    width: 42px;
  }
  .navbar-brand{
    -webkit-background-size: 100px auto !important;
    background-size: 100px auto !important;
  }
  .navbar-toggler{
    margin-left: 10px;
  }
</style>
