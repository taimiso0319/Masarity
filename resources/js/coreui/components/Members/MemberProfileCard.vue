<template>
  <div class="card card-profile text-center d-inline-block">
    <img
      alt=""
      class="card-img-top"
      :src="this.bannerUrl"
    >
    <div class="card-block">
      <a
        :href="this.twitterUrl"
        target="_blank"
      >
      <img
        alt=""
        class="card-img-profile"
        :src="this.thumbnailUrl"
      ></a>
      <h4 class="card-title">
        {{this.name}}
        <small>{{this.description}}</small>
      </h4>
      <div class="card-links">
        <a
          class="fa fa-twitter"
          :href="this.twitterUrl"
          target="_blank"
        />
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name : 'MemberProfileCard',
  props: {
    thumbnailUrl: String,
    bannerUrl   : String,
    twitterUrl  : String,
    name        : String,
    description : String,
  },
}
</script>

<style scoped lang="scss">
  $card-bg: #fff;
  $dribbble-color: #ea4b89;
  $twitter-color: #68aade;
  $facebook-color: #3b5999;

  .card-profile {
    max-width: 350px;
    margin: 20px 10px;
    background-color: $card-bg;
    border-radius: 0;
    border: 0;

    .card-img-top {
      border-radius: 0;
      min-height: 120px;
    }

    .card-block{
      min-height: 252px;
    }
    .card-img-profile {
      width: 130px;
      max-width: 100%;
      border-radius: 50%;
      margin-top: -95px;
      margin-bottom: 35px;
      border: 5px solid $card-bg;
    }

    .card-title {
      margin-bottom: 50px;

      small {
        min-height: 30px;
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
