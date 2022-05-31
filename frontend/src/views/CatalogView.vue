<template>
  <the-header></the-header>

  <section class="suggestions">
    <div class="suggestions__title">
      <h3 class="newhome">Найти недвижимость</h3>
    </div>
    <div class="parametrs__block">
<!--      <div class="parametrs">-->
<!--        <div class="prm">-->
<!--          <div class="prm__inside">-->
<!--            <div class="prm__text"><h2>Квартира</h2></div>-->
<!--            <a @click.prevent="componentForm = 'type'"><img src="@/assets/images/arrow.png" alt=""></a>-->
<!--          </div>-->
<!--          <catalog-type v-if="componentForm === 'type'"></catalog-type>-->
<!--        </div>-->
<!--        <div class="prm">-->
<!--          <div class="prm__inside">-->
<!--            <div class="prm__text"><h2>Купить</h2></div>-->
<!--            <a href="#"><img src="@/assets/images/arrow.png" alt=""></a>-->
<!--          </div>-->
<!--        </div>-->
<!--        <div class="prm">-->
<!--          <div class="prm__inside">-->
<!--            <div class="prm__text"><h2>Комнаты</h2></div>-->
<!--            <a href="#"><img src="@/assets/images/arrow.png" alt=""></a>-->
<!--          </div>-->
<!--        </div>-->
<!--        <div class="prm">-->
<!--          <div class="prm__inside">-->
<!--            <div class="prm__text"><h2>Цена</h2></div>-->
<!--            <a href="#"><img src="@/assets/images/arrow.png" alt=""></a>-->
<!--          </div>-->
<!--        </div>-->
<!--      </div>-->
      <ul>
        <li><a href="#">Тип</a>
          <ul>
            <li><a href="#">Квартира</a></li>
            <li><a href="#">Участок</a></li>
            <li><a href="#">Дом</a></li>
          </ul>
        </li>
        <li><a href="#">Площадь</a>
          <ul>
            <li><b href="#">От: <input type="text"></b></li>
            <li><b href="#">До: <input type="text"></b></li>
            <li><a href="#">Сортировать</a></li>
          </ul>
        </li>
        <li><a href="#">Кол - во комнат</a>
          <ul>
            <li><a href="#">Студия</a></li>
            <li><a href="#">1 комната</a></li>
            <li><a href="#">2 комнаты</a></li>
            <li><a href="#">3 комнаты и более</a></li>
          </ul>
        </li>
        <li><a href="#">Цена</a>
          <ul>
            <li><b href="#">От: <input type="text"></b></li>
            <li><b href="#">До: <input type="text"></b></li>
            <li><a href="#">Сортировать</a></li>
          </ul>
        </li>
      </ul>
    </div>
    <div class="suggestions__images">
      <div class="podlozhka" v-for="offer in offers">
        <router-link :to="`/catalog/${offer.id}`" class="nav__link" href="#">
          <div class="sugg__img"><a class="gradient" href="#"><img src="@/assets/images/1.jpg" alt=""></a></div>
          <div class="sugg__text"><p>{{offer.name}}</p><h2>{{ offer.price }}₽</h2></div>
        </router-link>
      </div>
    </div>
  </section>
  <TheFooter></TheFooter>
</template>

<script>
import TheHeader from "@/components/TheHeader.vue";
import TheFooter from "@/components/TheFooter.vue";
import CatalogType from "@/components/CatalogType.vue";

export default {
  name: "CatalogView",
  components: {TheHeader, TheFooter,CatalogType},
  data ()  {
    return {
      offers: [],
      componentForm: ''
    }
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