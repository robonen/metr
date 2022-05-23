<template>
    <div class="container">
    <div class="logo">
        <div class="logoMetr">
        </div>
    </div>
    <div class="title">
        <h2> {{authForm? "Вход" : "Регистрация" }} Метр</h2>
    </div>
    <form action="" method="get" class="form__example">
      <div class="form__example">
        <label for="name"></label>
        <input class="login" type="text" name="name" id="name" placeholder="Почта" required>
      </div>
      <div class="form__example">
        <label for="email"></label>
        <input class="login" type="email" name="email" id="email" placeholder="Пароль" required>
      </div>
      <div class="form__example">
        <button class="form__input">
        {{authForm? "Войти" : "Зарегистрироваться" }}
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
export default {
  data ()  {
    return {authForm: true}
  }
}
</script>>

<style scoped>
    @import url("@/assets/css/signin.css");
</style>