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
      <b-nav-item class="px-3">
        Dashboard
      </b-nav-item>
      <b-nav-item href="https://colopl.co.jp/alicegearaegis/" target="_blank" class="px-2">
          <b-img class="app-icons rounded" src="https://colopl.co.jp/alicegearaegis/portal/img/common/ft_icon.jpg"/>
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
