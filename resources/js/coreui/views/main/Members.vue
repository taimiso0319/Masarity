<template>
  <div class="animated fadeIn text-center">
    <div class="card-columns d-inline">
      <member-profile-card
        v-for="profile in profiles"
        :key="profile.name"
        :name="profile.name"
        :banner-url="profile.bannerUrl"
        :twitter-url="profile.twitterUrl"
        :steam-url="profile.steamUrl"
        :youtube-url="profile.youtubeUrl"
        :thumbnail-url="profile.thumbnailUrl"
        :description="profile.description"
      />
    </div>
  </div>
</template>

<script>
import { MemberProfileCard } from '../../components'

export default {
  name      : 'Members',
  components: { MemberProfileCard },
  data      : function () {
    return {
      profiles: [
        {
          name        : 'Masarity',
          bannerUrl   : 'https://pbs.twimg.com/profile_banners/60210710/1557398049/600x200',
          thumbnailUrl: 'https://pbs.twimg.com/profile_images/1131708581127041024/_wd1owWT_200x200.png',
          twitterUrl  : 'https://twitter.com/masarity',
          steamUrl    : 'https://steamcommunity.com/profiles/76561197994736871',
          description : 'インペリアルたかし💣',
        },
        {
          name        : 'prophunt',
          bannerUrl   : 'https://pbs.twimg.com/profile_banners/80001807/1434297617/600x200',
          thumbnailUrl: 'https://pbs.twimg.com/profile_images/874294983657799681/ywEwpjdf_200x200.jpg',
          twitterUrl  : 'https://twitter.com/prophunt',
          steamUrl    : 'https://steamcommunity.com/id/gavament1911',
          description : '葬式担当のチョッパリ',
        },
        {
          name        : '江村',
          bannerUrl   : 'https://pbs.twimg.com/profile_banners/3097925024/1428138581/600x200',
          thumbnailUrl: 'https://pbs.twimg.com/profile_images/965520909728497665/T4QgmCwl_200x200.jpg',
          twitterUrl  : 'https://twitter.com/emuraemuramura',
          steamUrl    : 'https://steamcommunity.com/profiles/76561198036648887',
          description : '4',
        },
        {
          name        : 'ちなっちょ',
          bannerUrl   : 'https://pbs.twimg.com/profile_banners/3071360864/1546372169/600x200',
          thumbnailUrl: 'https://pbs.twimg.com/profile_images/1084832021522726913/TRL6d5s7_200x200.jpg',
          twitterUrl  : 'https://twitter.com/ToothFairyGoGO',
          steamUrl    : 'https://steamcommunity.com/id/tinattyo',
          description : '',
        },
        {
          name        : 'garsy',
          bannerUrl   : '',
          thumbnailUrl: 'https://pbs.twimg.com/profile_images/877180857483542529/eRgb6qOK_200x200.jpg',
          twitterUrl  : 'https://twitter.com/garsyskoudon',
          steamUrl    : 'https://steamcommunity.com/profiles/76561197998985189',
          description : '一応twitterアカウントあるんやでというアピール',
        },
        {
          name        : 'ain',
          bannerUrl   : 'https://pbs.twimg.com/profile_banners/111869369/1477233483/600x200',
          thumbnailUrl: 'https://pbs.twimg.com/profile_images/1122760155127373824/uDqBK4Zg_200x200.png',
          twitterUrl  : 'https://twitter.com/ain201',
          steamUrl    : 'https://steamcommunity.com/id/ain201',
          description : '🐧',
        },
        {
          name        : 'fkmt',
          bannerUrl   : 'https://pbs.twimg.com/profile_banners/300821678/1471156532/600x200',
          thumbnailUrl: 'https://pbs.twimg.com/profile_images/889119665884147713/FOZr3hA7_200x200.jpg',
          twitterUrl  : 'https://twitter.com/laalachanhelpme',
          steamUrl    : 'https://steamcommunity.com/id/fkmt',
          description : '',
        },
        {
          name        : 'Boro',
          bannerUrl   : 'https://pbs.twimg.com/profile_banners/83117831/1492248379/600x200',
          thumbnailUrl: 'https://pbs.twimg.com/profile_images/1073173303139782656/dHk2R14Q_200x200.jpg',
          twitterUrl  : 'https://twitter.com/Boro9',
          steamUrl    : 'https://steamcommunity.com/profiles/76561198006643756',
          description : 'ぱーぱーです   たまに絵を描きます  R18多めなので注意',
        },
        {
          name        : '斎藤',
          bannerUrl   : 'https://pbs.twimg.com/profile_banners/76562029/1544538096/600x200',
          thumbnailUrl: 'https://pbs.twimg.com/profile_images/1127775773614469120/-nhCUaiv_200x200.jpg',
          twitterUrl  : 'https://twitter.com/lonelygravity',
          steamUrl    : 'https://steamcommunity.com/id/saidah',
          youtubeUrl  : 'https://www.youtube.com/channel/UCwUkTc0dFAQbGw9_zLRBryQ',
          description : 'アイカランバ',
        },
        {
          name        : 'Tempura',
          bannerUrl   : 'https://pbs.twimg.com/profile_banners/73926048/1415008117/600x200',
          thumbnailUrl: 'https://pbs.twimg.com/profile_images/767056627069431809/16QSHyUI_200x200.jpg',
          twitterUrl  : 'https://twitter.com/Tempura753',
          steamUrl    : 'https://steamcommunity.com/id/tempura_',
          description : 'PCでゲームをやったりやらなかったりするおっさん　　Steam/フィギュア/Vtuber/ボードゲーム',
        },
        {
          name        : 'slowly',
          bannerUrl   : 'https://pbs.twimg.com/profile_banners/63148409/1541844266/600x200',
          thumbnailUrl: 'https://pbs.twimg.com/profile_images/1127007200440770560/IZnYXB91_200x200.jpg',
          twitterUrl  : 'https://twitter.com/wanibuchi_',
          steamUrl    : 'https://steamcommunity.com/id/age53',
          description : 'steam/🐴/SR400/💣',
        },
        {
          name        : '翌週',
          bannerUrl   : 'https://pbs.twimg.com/profile_banners/14084538/1552122197/600x200',
          thumbnailUrl: 'https://pbs.twimg.com/profile_images/901031959559675904/8dCdp24i_200x200.jpg',
          twitterUrl  : 'https://twitter.com/chachadamore',
          steamUrl    : 'https://steamcommunity.com/id/yokshu',
          description : 'Consistency is the Enemy... \n'
            + 'Contact: shuyok.tribes@gmail.com',
        },
        {
          name        : 'lemoncola',
          bannerUrl   : '',
          thumbnailUrl: 'https://pbs.twimg.com/profile_images/904967736211644416/UKgF1-kh_200x200.jpg',
          twitterUrl  : 'https://twitter.com/lemoncolajp2',
          steamUrl    : 'https://steamcommunity.com/id/lemoncolafez',
          description : '洋ゲーとソシャゲとTRPG 綾瀬穂乃香ちゃん 木村龍くん 徳川まつりちゃん',
        },
        {
          name        : 'くれてぃ',
          bannerUrl   : 'https://pbs.twimg.com/profile_banners/67184670/1535638049/600x200',
          thumbnailUrl: 'https://pbs.twimg.com/profile_images/1097087025688133633/LW1RhFsj_200x200.png',
          twitterUrl  : 'https://twitter.com/Kurety',
          steamUrl    : 'https://steamcommunity.com/profiles/76561197992033839',
          description : 'このアイコンはくまみね様(@kumamine)の作品の電話猫です',
        },
        {
          name        : 'Yの者',
          bannerUrl   : 'https://pbs.twimg.com/profile_banners/153415601/1397756196/600x200',
          thumbnailUrl: 'https://pbs.twimg.com/profile_images/623119732309295104/CVx0OcYD_200x200.jpg',
          twitterUrl  : 'https://twitter.com/taimiso0319',
          steamUrl    : 'https://steamcommunity.com/id/taimiso',
          description : '27歳無職',
        },
        {
          name        : '八神・R・陽奈',
          bannerUrl   : 'https://pbs.twimg.com/profile_banners/1029658856467574785/1556747403/600x200',
          thumbnailUrl: 'https://pbs.twimg.com/profile_images/1123706125835227138/eCo67Nd3_200x200.jpg',
          twitterUrl  : 'https://twitter.com/yagami407',
          youtubeUrl  : 'https://www.youtube.com/watch?v=rYWeQnhZ1Fw',
          description : '新人Vtuberの八神・R・陽奈です！これから頑張ります！乾坤一擲！',
        },
        {
          name        : 'メイの蔑称Bot',
          bannerUrl   : '',
          thumbnailUrl: 'https://pbs.twimg.com/profile_images/744049487547629568/spwdovzO_200x200.jpg',
          twitterUrl  : 'https://twitter.com/meiverwatch',
          description : 'Overwatchのメイの蔑称をつぶやきます リプライDMで蔑称を送ってくれると採用したりしなかったりします',
        },
        {
          name        : 'クリスタルメイデン',
          bannerUrl   : '',
          thumbnailUrl: 'https://pbs.twimg.com/profile_images/875896384909484032/dBSmuKKf_200x200.jpg',
          twitterUrl  : 'https://twitter.com/Cry5talMa1den',
          description : '私がクリスタルメイデンよ。非公式なりきりだから注意してね。',
        },
      ],
    }
  },
}
</script>

<style scoped lang="scss">
</style>
