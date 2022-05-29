<template>
    <header class="header">
        <div class="container">
            <div class="header__table">
                <div class="header__image"></div>
                <div class="header__block">
                    <div class="header__block__content">
                        <img src="@/assets/images/location.png" alt="">
                        <a class="nav__link_tomsk" href="#"> Томск</a>
                    </div>
                </div>
                <div class="header__block">
                    <div class="header__block__contenttop">
                      <router-link to="/catalog" class="nav__link" href="#" id="catalog">
                          каталог
                      </router-link>
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
                        <input class="search__block">
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
export default {
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

    