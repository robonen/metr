<template>
  <header class="header">
    <div class="container">
      <div class="header__table">
        <router-link to="/" class="nav__link_logo" href="#">
          <div class="header__image">
          </div>
        </router-link>
        <div class="header__block">
          <div class="header__block__content">
            <img src="@/assets/images/location.svg" alt="">
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
            <input text="" class="search__block" placeholder="Поиск" v-model.trim="query" @keydown.enter="search">
            <div class="search__img" @click.prevent="search">
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
            <router-link to="/auth" class="nav__link" href="#" id="user">
              <img src="@/assets/images/user.jpg" alt="">
            </router-link>
          </div>
        </div>
      </div>
    </div>
  </header>
</template>

<script>
export default {
  name: "TheHeader",
  data() {
    return {
      query: '',
    };
  },
  methods: {
    search() {
      this.$router.push({
        path: '/catalog',
        query: { q: this.query },
      })
    }
  },
}
</script>


<style scoped>
/* Container */
.container {
  width: 100%;
  max-width: 1920px;
  margin: 0 auto;
}
/* Header */

.header {
  width: 100%;

  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  z-index: 1000;
}

.header__table {
  width: 1052px;
  height: 100px;
  border: 2px solid white;
  margin: 50px auto 0;
  display: flex;
  flex-direction: row;
  justify-content: center;

  color: white;

}

.header__image {
  width: 140px;
  height: 96px;
  margin: 0 auto;

  background: url("@/assets/images/metr_header.svg") center
  no-repeat;
  background-size: cover;
  border-right: 2px solid white;
}

.header__block {
  width: 145px;
  height: 96px;
  margin: 0 auto;
  border-right: 2px solid white;
}

.header__search {
  width: 426px;
  height: 96px;
  margin: 0 auto;
  display: flex;
  flex-direction: row;
  justify-content: center;

  border-right: 2px solid white;
}

.search {
  width: 340px;
  height: 40px;
  padding-top: 25px;
  display: flex;
  flex-direction: row;
  justify-content: space-between;
}

.search__block {
  width: 300px;
  height: 40px;
  margin: 0;

  font-size: 1em;

  background: white;
  border: 1px solid black;
}

.search__img {
  width: 40px;
  height: 40px;
  margin: 0;
  padding-top: 2px;
}

.header__contacts {
  width: 46px;
  height: 96px;
  margin: 0 auto;
  display: flex;
  flex-direction: column;
}

.header__contacts__imgtop {
  width: 48px;
  height: 48px;
  padding-top: 5px;
  border-bottom: 2px solid white;
}

.header__contacts__img {
  width: 48px;
  height: 48px;
  padding-top: 5px;
}

.header__block__content {
  width: 70px;
  height: 20px;
  margin: 0 auto;
  padding-top: 35px;
}

.header__block__contenttop {
  width: 145px;
  height: 48px;
  margin: 0 auto;
  border-bottom: 2px solid white;
}

.header__block__contentbott {
  width: 145px;
  height: 48px;
}

.nav__link{
  text-decoration: none;
  color: white;
  font-size: 15px;

  display: flex;
  flex-direction: row;
  justify-content: center;
  padding-top: 10px;
}

.nav__link_logo{
  text-decoration: none;
  color: white;
  font-size: 15px;

  display: flex;
  flex-direction: row;
  justify-content: center;
}

.nav__link_tomsk {
  text-decoration: none;
  color: white;
  font-size: 15px;

}

.nav__link:hover, .nav__link_tomsk:hover {
  color: #389EEB;
  transition: color .2s linear;
}
</style>