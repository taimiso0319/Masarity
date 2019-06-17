<template>
  <div class="card card-profile text-center">
    <img
      alt=""
      class="card-img-top"
      src="https://unsplash.it/340/160?image=354"
    >
    <div class="card-block">
      <img
        alt=""
        class="card-img-profile"
        src="https://it.gravatar.com/userimage/3434071/205a00fc16ae537b26b56f40790910fe.jpg?size=140"
      >
      <h4 class="card-title">
        Nicola Pressi
        <small>Front-end designer</small>
      </h4>
      <div class="card-links">
        <a
          class="fa fa-dribbble"
          href="#"
        />
        <a
          class="fa fa-twitter"
          href="#"
        />
        <a
          class="fa fa-facebook"
          href="#"
        />
      </div>
    </div>
  </div>
</template>

<script>
export default { name: 'MemberProfileCard' }
</script>

<style scoped lang="scss">
  $card-bg: #fff;
  $dribbble-color: #ea4b89;
  $twitter-color: #68aade;
  $facebook-color: #3b5999;

  .card-profile {
    width: 340px;
    margin: 20px 10px;
    background-color: $card-bg;
    border-radius: 0;
    border: 0;
    box-shadow: 1em 1em 2em rgba(0,0,0,.2);

    .card-img-top {
      border-radius: 0;
    }

    .card-img-profile {
      max-width: 100%;
      border-radius: 50%;
      margin-top: -95px;
      margin-bottom: 35px;
      border: 5px solid $card-bg;
    }

    .card-title {
      margin-bottom: 50px;

      small {
        display: block;
        font-size: .6em;
        margin-top: .2em;
      }
    }

    .card-links {
      margin-bottom: 25px;

      .fa {
        margin: 0 1em;
        font-size: 1.6em;

        &:focus,
        &:hover {
          text-decoration: none;
        }

        &.fa-dribbble {
          color: $dribbble-color;
          font-weight: bold;

          &:hover {
            color: darken($dribbble-color, 10%);
          }
        }

        &.fa-twitter {
          color: $twitter-color;

          &:hover {
            color: darken($twitter-color, 10%);
          }
        }

        &.fa-facebook {
          color: $facebook-color;

          &:hover {
            color: darken($facebook-color, 10%);
          }
        }
      }
    }
  }
</style>
