<template>
  <the-header></the-header>

    <div class="intro">
            <div class="container">
                <div class="intro__text">
                    <div class="intro__title">
                        <h1 class="newhome">Нашли вам новый дом</h1>
                    </div>
                    <div class="intro__subtitle">
                        <h5 class="title">по самой низкой цене</h5>
                    </div>
                </div>
            </div>
            <div class="intro_footer">
                <div class="intro__odnushka">
                    <a class="odnushka" href="#">Однушка на Елизаровых, 44</a>
                    <a class="odnushka__price" href="#">1 580 000₽</a>
                </div>
                <div class="intro__btn">
                    <a class="intro__button" href="#">посмотреть</a>
                </div>
            </div>
    </div>

    <section class="about">
        <div class="about__title">
            <h1 class="about__title">О метре</h1>
        </div>
        <div class="video">
            <a class="video" href="#"></a>
        </div>
        <div class="about__us">
            <h3 class="about__us">Мы - агентство недвижимости.</h3>
            <h3 class="about__us">Подберем подходящее жилье для вас.</h3>
        </div>
    </section>
    
    <section class="suggestions">
        <div class="suggestions__title">
            <h3 class="newhome">Интересные предложения</h3>
        </div>
        <div class="suggestions__images">

            <div class="podlozhka" v-for="offer in offers">
                <div class="sugg__img"><a class="gradient" href="#"><img src="@/assets/images/1.jpg" alt=""></a></div>
                <div class="sugg__text"><p>{{offer.name}}}</p><h2>{{ offer.price }}₽</h2></div>
            </div>

        </div>
        <div class="afterword">
            <p class="afterword">Это подборка лучших вариантов, найденных</p>
            <p class="afterword">нашими сотрудниками.</p>
            <p class="after__afterword">Вдруг ваше будущее жилье здесь?</p>
        </div>
    </section>
    <TheFooter></TheFooter>
</template>

<script>
import TheHeader from "@/components/TheHeader.vue";
import TheFooter from "@/components/TheFooter.vue";


export default {
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
    @import url("@/assets/css/main.css");
</style>

    