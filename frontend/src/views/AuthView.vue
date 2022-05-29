<template>
    <div class="container">
    <div class="logo">
      <router-link to="/" class="nav__link" href="#">
        <div class="logoMetr">
        </div>
      </router-link>
    </div>
    <div class="title">
        <h2> {{authForm ? "Вход" : "Регистрация" }} Метр</h2>
    </div>
    <form class="form__example">
      <div class="form__example">
        <label for="name"></label>
        <input class="login" type="email" name="name" id="name" placeholder="Почта" required v-model.trim="credentials.email">
      </div>
      <div class="form__example">
        <label for="email"></label>
        <input class="login" type="password" name="email" id="email" placeholder="Пароль" required v-model.trim="credentials.password">
      </div>
      <div class="form__example">
        <button class="form__input" @click.prevent="auth">
        {{ authForm ? "Войти" : "Зарегистрироваться" }}
        </button>
      </div>
    </form>
    <div class="form__example">
        <button class="form__input" @click="authForm = false" v-if="authForm">
          Зарегистрироваться
        </button>
      </div>
  </div>
</template>

<script>
import { mapActions } from "vuex";

export default {
  data ()  {
    return {
      authForm: true,
      credentials: {
        email: '',
        password: '',
      }
    }
  },
  methods: {
    login() {
      this.$store.dispatch('login', this.credentials).then(() => {
        this.$router.push('/profile');
      });
    },
    registration() {

    },
    auth() {
      if (this.authForm)
        this.login();
      else
        this.registration();
    }
  }
}
</script>>

<style scoped>
    @import url("@/assets/css/signin.css");
</style>