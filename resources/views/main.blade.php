@extends('layouts.base')

@section('content')
<header class="header">
    <div class="container">
        <div class="header__table">
            <div class="header__image"></div>
            <div class="header__block">
                <div class="header__block__content">
                    <img src="../images/location.png" alt="">
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
                            <img src="../images/search.jpg" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="header__contacts">
                <div class="header__contacts__imgtop">
                    <a class="nav__link" href="#">
                        <img src="../images/tell.jpg" alt="">
                    </a>
                </div>
                <div class="header__contacts__img">
                    <a class="nav__link" href="#">
                        <img src="../images/user.jpg" alt="">
                    </a>
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
        <div class="podlozhka">
            <div class="sugg__img"><a class="gradient" href="#"><img src="../images/1.jpg" alt=""></a></div>
            <div class="sugg__text"><p>Студия на Кирова, 12</p><h2>1298000₽</h2></div>
        </div>
        <div class="podlozhka">
            <div class="sugg__img"><a class="gradient" href="#"><img src="../images/1.jpg" alt=""></a></div>
            <div class="sugg__text"><p>Студия на Кирова, 12</p><h2>1298000₽</h2></div>
        </div>
        <div class="podlozhka">
            <div class="sugg__img"><a class="gradient" href="#"><img src="../images/3.jpg" alt=""></a></div>
            <div class="sugg__text"><p>Студия на Кирова, 12</p><h2>1298000₽</h2></div>
        </div>
        <div class="podlozhka">
            <div class="sugg__img"><a class="gradient" href="#"><img src="../images/4.jpg" alt=""></a></div>
            <div class="sugg__text"><p>Студия на Кирова, 12</p><h2>1298000₽</h2></div>
        </div>
        <div class="podlozhka">
            <div class="sugg__img"><a class="gradient" href="#"><img src="../images/6.jpg" alt=""></a></div>
            <div class="sugg__text"><p>Студия на Кирова, 12</p><h2>1298000₽</h2></div>
        </div>
        <div class="podlozhka">
            <div class="sugg__img"><a class="gradient" href="#"><img src="../images/6.jpg" alt=""></a></div>
            <div class="sugg__text"><p>Студия на Кирова, 12</p><h2>1298000₽</h2></div>
        </div>
    </div>
    <div class="afterword">
        <p class="afterword">Это подборка лучших вариантов, найденных</p>
        <p class="afterword">нашими сотрудниками.</p>
        <p class="after__afterword">Вдруг ваше будущее жилье здесь?</p>
    </div>
</section>

<footer class="footer">
    <div class="header__table">
        <div class="header__image">
        </div>
        <div class="header__block">
            <div class="header__block__content">
                <img src="../images/location.png" alt="">
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
@endsection
