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
            <img src="~@/assets/images/location.png" alt="">
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
            <router-link to="/auth" class="nav__link" href="#" id="user">
              <img src="@/assets/images/user.jpg" alt="">
            </router-link>
          </div>
        </div>
      </div>
    </div>
  </header>

  <section class="suggestions">
    <div class="suggestions__title">
      <h3 class="newhome">Найти недвижимость</h3>
    </div>
    <div class="parametrs__block">
      <div class="parametrs">
        <div class="prm">
          <div class="prm__inside">
            <div class="prm__text"><h2>Квартира</h2></div>
            <a href="#"><img src="@/assets/images/arrow.png" alt=""></a>
          </div>
        </div>
        <div class="prm">
          <div class="prm__inside">
            <div class="prm__text"><h2>Купить</h2></div>
            <a href="#"><img src="@/assets/images/arrow.png" alt=""></a>
          </div>
        </div>
        <div class="prm">
          <div class="prm__inside">
            <div class="prm__text"><h2>Комнаты</h2></div>
            <a href="#"><img src="@/assets/images/arrow.png" alt=""></a>
          </div>
        </div>
        <div class="prm">
          <div class="prm__inside">
            <div class="prm__text"><h2>Цена</h2></div>
            <a href="#"><img src="@/assets/images/arrow.png" alt=""></a>
          </div>
        </div>
      </div>
    </div>
    <div class="suggestions__images">
<!--      <div class="podlozhka">-->
<!--        <router-link to="/offer" class="nav__link" href="#">-->
<!--          <div class="sugg__img"><a class="gradient" href="#"><img src="@/assets/images/1.jpg" alt=""></a></div>-->
<!--          <div class="sugg__text"><p>2-к. Квартира, 34 м кв</p><h2>2 900 000₽</h2></div>-->
<!--        </router-link>-->
<!--      </div>-->
<!--      <div class="podlozhka">-->
<!--        <router-link to="/offer" class="nav__link" href="#">-->
<!--          <div class="sugg__img"><a class="gradient" href="#"><img src="@/assets/images/1.jpg" alt=""></a></div>-->
<!--          <div class="sugg__text"><p>3-к. Квартира, 34 м кв</p><h2>4 900 000₽</h2></div>-->
<!--        </router-link>-->
<!--      </div>-->
<!--      <div class="podlozhka">-->
<!--        <router-link to="/offer" class="nav__link" href="#">-->
<!--          <div class="sugg__img"><a class="gradient" href="#"><img src="@/assets/images/3.jpg" alt=""></a></div>-->
<!--          <div class="sugg__text"><p>1-к. Квартира, 34 м кв</p><h2>1 900 000₽</h2></div>-->
<!--        </router-link>-->
<!--      </div>-->
<!--      <div class="podlozhka">-->
<!--        <router-link to="/offer" class="nav__link" href="#">-->
<!--          <div class="sugg__img"><a class="gradient" href="#"><img src="@/assets/images/4.jpg" alt=""></a></div>-->
<!--          <div class="sugg__text"><p>5-к. Квартира, 34 м кв</p><h2>10 900 000₽</h2></div>-->
<!--        </router-link>-->
<!--      </div>-->
<!--      <div class="podlozhka">-->
<!--        <router-link to="/offer" class="nav__link" href="#">-->
<!--          <div class="sugg__img"><a class="gradient" href="#"><img src="@/assets/images/6.jpg" alt=""></a></div>-->
<!--          <div class="sugg__text"><p>6-к. Квартира, 34 м кв</p><h2>15 900 000₽</h2></div>-->
<!--        </router-link>-->
<!--      </div>-->
<!--      <div class="podlozhka">-->
<!--        <router-link to="/offer" class="nav__link" href="#">-->
<!--          <div class="sugg__img"><a class="gradient" href="#"><img src="@/assets/images/6.jpg" alt=""></a></div>-->
<!--          <div class="sugg__text"><p>3-к. Квартира, 34 м кв</p><h2>5 900 000₽</h2></div>-->
<!--        </router-link>-->
<!--      </div>-->
      <div class="podlozhka" v-for="offer in offers">
        <router-link to="/offer" class="nav__link" href="#">
          <div class="sugg__img"><a class="gradient" href="#"><img src="@/assets/images/1.jpg" alt=""></a></div>
          <div class="sugg__text"><p>{{offer.name}}}</p><h2>{{ offer.price }}₽</h2></div>
        </router-link>
      </div>
    </div>
  </section>
  <TheFooter></TheFooter>
</template>

<script>
export default {
  name: "CatalogView"
}
</script>

<style scoped>
    @import url("@/assets/css/catalog.css");
</style>