<template>
  <header class="header">
    <div class="container">
      <div class="header__table">
        <div class="header__image">
          <router-link to="/" class="nav__link" href="#">
          </router-link>
        </div>
        <div class="header__block">
          <div class="header__block__content">
            <img src="@/assets/images/location.png" alt="">
            <a class="nav__link_tomsk" href="#">Томск</a>
          </div>
        </div>
        <div class="header__block">
          <div class="header__block__contenttop">
            <router-link to="/catalog" class="nav__link" href="#">каталог</router-link>
          </div>
          <div class="header__block__contentdown">
            <a class="nav__link" href="#">блог</a>
          </div>
        </div>
        <div class="header__block">
          <div class="header__block__contenttop">
            <a class="nav__link" href="#">контакты</a>
          </div>
          <div class="header__block__contentdown">
            <a class="nav__link" href="#">помощь</a>
          </div>
        </div>
        <div class="header__search">
          <div class="search">
            <div class="search__block">

            </div>
            <div class="search__img">
              <a class="nav__link" href="#">
                <img src="@/assets/images/search.jpg" alt="">
              </a>
            </div>
          </div>
        </div>
        <div class="header__contacts">
          <div class="header__contacts__imgtop">
            <a class="nav__link" href="#">
              <img src="@/assets/images/tell.jpg" alt="">
            </a>
          </div>
          <div class="header__contacts__img">
            <a class="nav__link" href="#">
              <img src="@/assets/images/user.jpg" alt="">
            </a>
          </div>
        </div>
      </div>
    </div>
  </header>

  <div class="intro">
    <div class="main">
      <div class="user__info">
        <div class="user__logo">
<!--          <img src="@/assets/images/1.1.jpg" alt="">-->
        </div>
        <div class="username">
          <h3>Виктория</h3>
        </div>
        <rating-stars></rating-stars>
        <div class="user__hrefs">
          <div class="aboutme">
            <a @click.prevent="activeTab = 'profile-about'">
              <h2>Обо мне</h2>
            </a>
          </div>
          <div class="my__notice">
            <a @click.prevent="activeTab = 'profile-my-offers'">
              <h2>Мои объявления</h2></a>
          </div>
          <div class="add__notice">
            <a @click.prevent="activeTab = 'profile-add-offer'">
              <h2>Добавить объявление</h2>
            </a>
          </div>
<!--          <div class="favorites">-->
<!--            <a href="#"><h2>Избранное</h2></a>-->
<!--          </div>-->
          <div class="add__notice">
            <a @click.prevent="logout">
              <h2>Выйти из аккаунта</h2>
            </a>
          </div>
        </div>
      </div>
      <component :is="activeTab"></component>
    </div>
  </div>
  <TheFooter></TheFooter>
</template>

<script>
import ProfileAbout from "@/components/ProfileAbout.vue";
import ProfileMyOffers from "@/components/ProfileMyOffers.vue";
import ProfileAddOffer from "@/components/ProfileAddOffer.vue";
import RatingStars from "@/components/RatingStars.vue";
import TheHeader from "@/components/TheHeader.vue";
import TheFooter from "@/components/TheFooter.vue";
import {mapGetters} from "vuex";

export default {
  components: {
    TheFooter,
    ProfileAbout,
    ProfileMyOffers,
    ProfileAddOffer,
    RatingStars,
    TheHeader,
  },
  data ()  {
    return {
      activeTab : "profile-about"
    }
  },
  computed: {
    ...mapGetters({
        user: 'user',
    }),
    name() {
      return this.user.first_name
          ? this.user.first_name
          : `Пользователь #${this.user.id}`;
    }
  },
  methods: {
    logout() {
      this.$store.dispatch('logout').then(() => {
        this.$router.push('/');
      });
    }
  }
}
</script>>

<style scoped>
  @import url("@/assets/css/profile.css");
</style>