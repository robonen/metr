<template>
  <the-header></the-header>
  <div class="intro">
    <div class="main">
      <div class="user__info">
        <div class="user__logo">
<!--          <img src="@/assets/images/1.1.jpg" alt="">-->
        </div>
        <div class="username">
          <h3>{{ name }}</h3>
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
  },
  mounted() {
    if (this.$store.getters.userAuthenticated) {
      this.$router.push('/profile');
      return;
    }
  }
}
</script>>

<style scoped>
  @import url("@/assets/css/profile.css");
</style>