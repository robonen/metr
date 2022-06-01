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
            <div class="main__image">
              <a href="#"><img src="../assets/images/offer1.png" alt=""></a>
            </div>
            <div class="other__images">
              <a href="#"><img src="../assets/images/offer3.png" alt=""></a>
              <a href="#"><img src="../assets/images/offer2.png" alt=""></a>
              <a href="#"><img src="../assets/images/offer4.png" alt=""></a>
            </div>
          </div>
        </div>

        <div class="adv__host">
          <div class="adv__host__about__user">
            <div class="username">
              <h2>Виктория</h2>
            </div>
            <rating-stars></rating-stars>
            <div class="number">
              <a href="#" class="favoritextinf"><h5>Показать номер</h5></a>
            </div>
<!--            <div class="message">-->
<!--              <a href="#" class="favoritextinf"><h5>Написать владельцу</h5></a>-->
<!--            </div>-->
          </div>
          <div class="userlogo">
            <img src="@/assets/images/userlogosmall.png" alt="">
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
          <div class="review">
            <div class="review__avatar">
              <img src="@/assets/images/forcomment.png" alt="">
            </div>
            <div class="rewiew__comment">
              <h5>Очень приятный владелец, все чисто и опрятно</h5>
            </div>
            <rating-stars></rating-stars>
          </div>
          <div class="review">
            <div class="review__avatar">
              <img src="@/assets/images/forcomment.png" alt="">
            </div>
            <div class="rewiew__comment">
              <h5>Очень приятный владелец, все чисто и опрятно</h5>
            </div>
            <rating-stars></rating-stars>
          </div>
          <div class="review">
            <div class="review__avatar">
              <img src="@/assets/images/forcomment.png" alt="">
            </div>
            <div class="rewiew__comment">
              <h5>Очень приятный владелец, все чисто и опрятно</h5>
            </div>
            <rating-stars></rating-stars>
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

export default {
  name: "OfferView",
  components: {TheFooter, TheHeader, RatingStars},
  data() {
    return {
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
</style>