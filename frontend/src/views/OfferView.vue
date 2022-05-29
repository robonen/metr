<template>
  <the-header></the-header>
  <div class="intro">
    <div class="main">
      <div class="adv__info">
        <div class="adv__main">
          <div class="adv__main__title">
            <div class="mtitle">
              <h2>4-к. квартира, 78,4 м², 20/28 эт.</h2>
            </div>
            <div class="mprice__fav">
              <div class="price">
                <h2>40 610 000 ₽</h2>
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
<!--            <div class="host__stat">-->
<!--              <div class="stat">-->
<!--                <h3>5</h3>-->
<!--              </div>-->
<!--              <div class="stars">-->
<!--                <img src="@/assets/images/star.png" alt="">-->
<!--                <img src="@/assets/images/star.png" alt="">-->
<!--                <img src="@/assets/images/star.png" alt="">-->
<!--                <img src="@/assets/images/star.png" alt="">-->
<!--                <img src="@/assets/images/star.png" alt="">-->
<!--              </div>-->
<!--            </div>-->
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
          <h4>Кол-во комнат: 4</h4>
          <h4>Общая площадь: 78.4 м²</h4>
          <h4>Площадь кухни: 12 м²</h4>
          <h4>Этаж: 20</h4>
        </div>
        <div class="about__adv__descriptions">
          <p>Продается 4х комнатная квартира, уютная, светлая, теплая. Натяжные потолки,
            ламинат, деревянные евроокна, два кондиционера. Теплые полы в туалете, ванной,
            кухне, частично в прихожей. Хороший вид из окна.</p>
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
<!--            <div class="rewiew__stars">-->
<!--               <img src="@/assets/images/star.png" alt="">-->
<!--               <img src="@/assets/images/star.png" alt="">-->
<!--               <img src="@/assets/images/star.png" alt="">-->
<!--               <img src="@/assets/images/star.png" alt="">-->
<!--               <img src="@/assets/images/star.png" alt="">-->
<!--            </div>-->
            <rating-stars></rating-stars>
          </div>
          <div class="review">
            <div class="review__avatar">
              <img src="@/assets/images/forcomment.png" alt="">
            </div>
            <div class="rewiew__comment">
              <h5>Очень приятный владелец, все чисто и опрятно</h5>
            </div>
<!--            <div class="rewiew__stars">-->
<!--              <img src="@/assets/images/star.png" alt="">-->
<!--              <img src="@/assets/images/star.png" alt="">-->
<!--              <img src="@/assets/images/star.png" alt="">-->
<!--              <img src="@/assets/images/star.png" alt="">-->
<!--              <img src="@/assets/images/star.png" alt="">-->
<!--            </div>-->
            <rating-stars></rating-stars>
          </div>
          <div class="review">
            <div class="review__avatar">
              <img src="@/assets/images/forcomment.png" alt="">
            </div>
            <div class="rewiew__comment">
              <h5>Очень приятный владелец, все чисто и опрятно</h5>
            </div>
<!--            <div class="rewiew__stars">-->
<!--              <img src="@/assets/images/star.png" alt="">-->
<!--              <img src="@/assets/images/star.png" alt="">-->
<!--              <img src="@/assets/images/star.png" alt="">-->
<!--              <img src="@/assets/images/star.png" alt="">-->
<!--              <img src="@/assets/images/star.png" alt="">-->
<!--            </div>-->
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

export default {
  components: {TheFooter, TheHeader, RatingStars},
  name: "OfferView"
}
</script>

<style scoped>
  @import url("@/assets/css/offer.css");
</style>