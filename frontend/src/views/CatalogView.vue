<template>
  <the-header></the-header>
  <section class="suggestions">
    <div class="suggestions__title">
      <h3 class="newhome">Найти недвижимость</h3>
    </div>
    <div class="parametrs__block">
      <ul>
        <li><a href="#">Тип</a>
          <ul>
            <li @click="addSortParam('type', 'Flat')">
              <a href="#" :class="isSelected('type', 'Flat')">Квартира</a>
            </li>
            <li @click="addSortParam('type', 'Land')">
              <a href="#" :class="isSelected('type', 'Land')">Участок</a>
            </li>
            <li @click="addSortParam('type', 'House')">
              <a href="#" :class="isSelected('type', 'House')">Дом</a>
            </li>
          </ul>
        </li>
        <li><a href="#">Площадь</a>
          <ul>
            <li><b href="#">От: <input type="text" v-model.trim="spaceParams.min"></b></li>
            <li><b href="#">До: <input type="text" v-model.trim="spaceParams.max"></b></li>
            <li @click="addRangeSortParam('spaceParams', 'Space')"><a href="#">Сортировать</a></li>
          </ul>
        </li>
        <li><a href="#">Кол - во комнат</a>
          <ul>
            <li @click="addSortParam('rooms', 'Studio')">
              <a href="#" :class="isSelected('rooms', 'Studio')">Студия</a>
            </li>
            <li @click="addSortParam('rooms', 'Room1')">
              <a href="#" :class="isSelected('rooms', 'Room1')">1 комната</a>
            </li>
            <li @click="addSortParam('rooms', 'Room2')">
              <a href="#" :class="isSelected('rooms', 'Room2')">2 комнаты</a>
            </li>
            <li @click="addSortParam('rooms', 'Room3More')">
              <a href="#" :class="isSelected('rooms', 'Room3More')">3 комнаты и более</a>
            </li>
          </ul>
        </li>
        <li><a href="#">Цена</a>
          <ul>
            <li><b href="#">От: <input type="text" v-model.trim="priceParams.min"></b></li>
            <li><b href="#">До: <input type="text" v-model.trim="priceParams.max"></b></li>
            <li @click="addRangeSortParam('priceParams', 'Price')"><a href="#">Сортировать</a></li>
          </ul>
        </li>
      </ul>
    </div>
    <div class="suggestions__images">
      <div class="podlozhka" v-for="offer in offers">
        <router-link :to="`/catalog/${offer.id}`" class="nav__link" href="#">
          <div class="sugg__img" :style="{
            'background-image': url(offer.images.length !== 0 ? offer.images[0].file : '@/assets/images/1.jpg')
          }">
          </div>
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
import offerService from "@/services/offer";
import { getURL } from "@/services/images";

export default {
  name: "CatalogView",
  components: {TheHeader, TheFooter,CatalogType},
  data ()  {
    return {
      offers: [],
      sortParams: [],
      spaceParams: {
        min: null,
        max: null,
      },
      priceParams: {
        min: null,
        max: null,
      },
    }
  },
  methods: {
    url(path) {
      return `url(${getURL(path)})`;
    },
    isSelected(name, value) {
      return this.sortParams.some((e) => e.name === name && e.value === value) ? 'parametrs__block__selected' : '';
    },
     async addSortParam(name, value) {
      const element = this.sortParams.findIndex((e) => e.name === name && e.value === value);

      if (~element) {
        this.sortParams.splice(element, 1);
        await this.reloadOffers();
        return;
      }

      this.sortParams = this.sortParams.filter((e) => e.name !== name);
      this.sortParams.push({ name, value });

      await this.reloadOffers();
    },
    async addRangeSortParam(range, paramName) {
      const min = this[range].min;
      const max = this[range].max;

      const minName = 'start' + paramName;
      const maxName = 'end' + paramName;

      this.sortParams = this.sortParams.filter((e) => e.name !== minName);
      this.sortParams = this.sortParams.filter((e) => e.name !== maxName);

      if (min)
        this.sortParams.push({ name: minName, value: min });

      if (max)
        this.sortParams.push({ name: maxName, value: max });

      await this.reloadOffers();
    },
    async reloadOffers() {
      const offers = await offerService.filter(this.sortParams);
      this.offers = offers.data.data;
    },
    async addSearchParam(value) {
      if (!value || !value.q) {
        this.sortParams = this.sortParams.filter((e) => e.name !== 'search');
        this.reloadOffers();
        return;
      }

      await this.addSortParam('search', value.q);
    }
  },
  async mounted() {
    if (this.$store.getters.userAuthenticated) {
      this.$router.push('/profile');
      return;
    }
    await this.addSearchParam(this.$route.query);
  },
  watch: {
    '$route.query'(value) {
      this.addSearchParam(value);
    }
  },
}
</script>

<style scoped>
    @import url("@/assets/css/catalog.css");
</style>