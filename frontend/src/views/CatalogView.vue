<template>
  <the-header></the-header>

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
import TheHeader from "../components/TheHeader.vue";
import TheFooter from "@/components/TheFooter.vue";

export default {
  name: "CatalogView",
  components: {TheHeader, TheFooter},
  data ()  {
    return { offers: [] }
  },
  async mounted() {
    const requests = await fetch('http://tusur.tk:9080/api/offers');
    const offers = await requests.json();
    this.offers = offers.data;
  }
}
</script>

<style scoped>
    @import url("@/assets/css/catalog.css");
</style>