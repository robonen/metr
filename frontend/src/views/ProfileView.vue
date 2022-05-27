<template>
  <header class="header">
    <div class="container">
      <div class="header__table">
        <div class="header__image"></div>
        <div class="header__block">
          <div class="header__block__content">
            <img src="@/assets/images/location.png" alt="">
            <a class="nav__link_tomsk" href="#">Томск</a>
          </div>
        </div>
        <div class="header__block">
          <div class="header__block__contenttop">
            <a class="nav__link" href="#">каталог</a>
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
          <img src="../assets/images/userlogo.png" alt="">
        </div>
        <div class="username">
          <h3>Виктория</h3>
        </div>
        <div class="user__stat">
          <div class="stat"><h3>5</h3></div>
          <div class="stars">
            <img src="../assets/images/star.png" alt="">
            <img src="../assets/images/star.png" alt="">
            <img src="../assets/images/star.png" alt="">
            <img src="../assets/images/star.png" alt="">
            <img src="../assets/images/star.png" alt="">
          </div>
        </div>
        <div class="user__hrefs">
          <div class="aboutme">
            <a href="#"><h2>Обо мне</h2></a>
          </div>
          <div class="my__notice">
            <a href="#"><h2>Мои объявления</h2></a>
          </div>
<!--          <div class="add__notice">-->
<!--            <a href="#"><h2>Добавить объявление</h2></a>-->
<!--          </div>-->
<!--          <div class="favorites">-->
<!--            <a href="#"><h2>Избранное</h2></a>-->
<!--          </div>-->
        </div>
      </div>
      <profile-about></profile-about>
    </div>
  </div>
</template>

<script>
import ProfileAbout from "@/components/ProfileAbout.vue";
export default {
  components: {ProfileAbout},
  data ()  {
    return { ButtonForm: true }
  }
}
</script>>

<style scoped>
@import url("@/assets/css/profile.css");
</style>