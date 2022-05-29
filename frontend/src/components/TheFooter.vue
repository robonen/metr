<template>
  <footer class="footer">
    <div class="header__table">
      <div class="header__image">
      </div>
      <div class="header__block">
        <div class="header__block__content">
          <img src="@/assets/images/location.svg" alt="">
          <a class="nav__link_tomsk" href="#">Томск</a>
        </div>
      </div>
      <div class="header__block">
        <div class="header__block__contenttop">
          <a class="nav__link" href="#">вконтакте</a>
        </div>
        <div class="header__block__contentbott">
          <a class="nav__link" href="#">инстаграм</a>
        </div>
      </div>
      <div class="header__block">
        <div class="header__block__contenttop">
          <a class="nav__link" href="#">фэйсбук</a>
        </div>
        <div class="header__block__contentdown">
          <a class="nav__link" href="#">твиттер</a>
        </div>
      </div>
      <div class="footer__search">

      </div>
      <div class="footer__contacts">
        <div class="footer__contacts__imgtop">
          <a class="nav__link" href="#">+7-495-291-32-01</a>
        </div>
        <div class="footer__contacts__img">
          <a class="nav__link" href="#">вконтакте</a>
        </div>
      </div>
    </div>
  </footer>
</template>

<script>
export default {
  name: "TheFooter"
}
</script>

<style scoped>
/* Footer */

.footer {
  height: 200px;
  margin: 0 auto;
  padding-top: 1%;
  background-color:  rgba(124, 173, 201, 1);
}

.footer__search {
  width: 300px;
  height: 96px;
  margin: 0 auto;
  display: flex;
  flex-direction: row;
  justify-content: center;

  border-right: 2px solid white;
}

.footer__contacts {
  width: 165px;
  height: 96px;
  margin: 0 auto;
  display: flex;
  flex-direction: column;
}

.footer__contacts__imgtop {
  width: 165px;
  height: 48px;
  border-bottom: 2px solid white;
  margin: 0;
}

.footer__contacts__img {
  width: 166px;
  height: 48px;
  margin: 0;
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