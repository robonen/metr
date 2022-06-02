<template>
  <the-header></the-header>
  <div class="intro">
    <div class="main">
      <div class="adv__info">
        <div class="adv__main">
          <div class="adv__main__title">
            <div class="mtitle">
              <h2>{{ offer.name }}</h2>
            </div>
            <div class="mprice__fav">
              <div class="price">
                <h2>{{ offer.price }} ₽</h2>
              </div>
<!--              <a href="#" class="favoritext"><div class="favorite">-->
<!--                <h4>Добавить в избранное</h4>-->
<!--                <img src="@/assets/images/heart.png" alt="">-->
<!--              </div></a>-->
            </div>
          </div>
          <div class="adv__main__images">
            <Transition>
              <div class="main__image" v-if="offer.images" :style="{ 'background-image': imagePreview }">
<!--                <a href="#"><img v-if="offer.images" :src="imagePreview" alt=""></a>-->
              </div>
            </Transition>
            <div class="other__images">
              <a href="#" v-for="(image, i) in offer.images" :key="i" @click.prevent @mouseover="imagePreviewId = i">
                <img :src="url(image.file)" alt="">
              </a>
            </div>
          </div>
        </div>

        <div class="adv__host">
          <div class="adv__host__about__user">
            <div class="username">
              <h2>{{ ownerName }}</h2>
            </div>
            <rating-stars></rating-stars>
            <div class="number" @click.prevent="showPhone">
              <a href="#" class="favoritextinf"><h5>Показать номер</h5></a>
            </div>
<!--            <div class="message">-->
<!--              <a href="#" class="favoritextinf"><h5>Написать владельцу</h5></a>-->
<!--            </div>-->
          </div>
          <div class="userlogo" :style="{'background-image': ownerPhoto}">
<!--            <img :src="ownerPhoto" alt="">-->
          </div>
        </div>
      </div>

      <div class="about__adv">
        <div class="about__adv__title">
          <h2>О квартире</h2>
        </div>
        <div class="about__adv__info">
          <h4>Тип: {{ offerType }}</h4>

          <h4>Адрес: {{ offer.location }}</h4>

          <h4>Кол-во комнат: {{ roomType }}</h4>

          <h4>Общая площадь: {{ offer.space }} м²</h4>
        </div>
        <div class="about__adv__descriptions">
          <h2>Описание</h2>
          <p>{{ offer.description }}</p>
        </div>
      </div>
      <div class="reviews">
        <div class="reviews__title">
          <h2>Отзывы</h2>
        </div>
        <div class="reviews__blocks">
          <div v-if="offer?.user?.feedback" class="review" v-for="(review, i) in offer.user.feedback" :key="i">
<!--            <div class="review__avatar">-->
<!--              <img src="@/assets/images/forcomment.png" alt="">-->
<!--            </div>-->
            <div class="rewiew__comment">
              <h5>{{ review.comment }}</h5>
            </div>
            <rating-stars :totalStars="review.rating"></rating-stars>
          </div>
        </div>
      </div>
    </div>
  </div>
  <TheFooter></TheFooter>
</template>

<script>
import RatingStars from "@/components/RatingStars.vue";
import TheHeader from "@/components/TheHeader.vue";
import TheFooter from "@/components/TheFooter.vue";
import offerService from "@/services/offer";
import { getURL } from "@/services/images";

export default {
  name: "OfferView",
  components: {TheFooter, TheHeader, RatingStars},
  data() {
    return {
      imagePreviewId: 0,
      offer: {}
    };
  },
  computed: {
    offerType() {
      return {
        'Flat': 'Квартира',
        'House': 'Дом',
        'Land': 'Участок',
      }[this.offer.type];
    },
    roomType() {
      return {
        'Studio': 'Студия',
        'Room1': '1 комната',
        'Room2': '2 комнаты',
        'Room3More': '3 комнаты и больше',
      }[this.offer.rooms]
    },
    imagePreview() {
      return this.offer.images.length !== 0
          ? `url(${getURL(this.offer.images[this.imagePreviewId].file)})`
          : 'url(@/assets/images/offer1.png)';
    },
    ownerName() {
      if (!this.offer.user) return;

      const user = this.offer.user;
      return user.first_name ?? `Пользователь #${user.id}`;
    },
    ownerPhoto() {
      if (!this.offer.user) return;

      const user = this.offer.user;
      return user.photo ? `url(${getURL(user.photo)})` : 'url(/src/assets/images/user_standart.png)';
    },
  },
  methods: {
    url(path) {
      return getURL(path);
    },
    showPhone() {
      const phone = this.offer.user.phone ?? 'отсутствует';
      alert(`Номер пользователя: ${phone}`);
    }
  },
  async mounted() {
    const id = this.$route.params.id;

    if (id === undefined)
      return this.$router.back();

    const resp = await offerService.getById(id);
    this.offer = resp.data.data;
  }
}
</script>

<style scoped>
  @import url("@/assets/css/offer.css");

.v-enter-active,
.v-leave-active {
  transition: opacity 0.5s ease;
}

.v-enter-from,
.v-leave-to {
  opacity: 0;
}
</style>