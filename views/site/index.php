<?php

/* @var $this yii\web\View */

$this->title = 'Пипец безбрачия';
?>
<div class="site-index">
    <div id="home" class="first">
        <div class="pipec-wrap">
            <div class="pipec">
                <div class="pipec-up"></div>
                <div class="pipec-text">Пипец безбрачия</div>
                <div class="pipec-down"></div>
            </div>
        </div>
    </div>
    <div class="about">
        <div class="about-inner">
            <div class="about-item">Это практический марафон по исследованию себя и своего опыта отношений.</div>
            <div class="about-item">Это короткий и насыщенный психологический курс для тех, кто хочет разобраться с собой, а именно, почему ваша личная жизнь не складывается или не удовлетворяет.</div>
            <div class="about-item">Это профессиональная помощь от двух дипломированых практикующих психологов.</div>
        </div>
        <div class="about-btn">
            <div class="pipec-btn pipec-btn-booking">Записаться на курс</div>
        </div>
    </div>
    <hr>
    <div class="video">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/kXlQgC_DfYQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    <hr>
    <div id="why" class="why">
        <div class="why-inner">
            <h3>Этот курс для Вас, если Вы хоть раз спрашивали себя "Почему":</h3>
            <div class="why-item">у меня никак не складываются отношения</div>
            <div class="why-item">я не замужем/не женат</div>
            <div class="why-item">мне попадаются одни мудаки/стервы</div>
            <div class="why-item">я вечный любовник/любовница</div>
            <div class="why-item">мои самые долгие отношения 1,5 месяца/пол года/год</div>
            <div class="why-item">я боюсь отношений</div>
        </div>
    </div>
    <hr>
    <div class="tariffs">
        <h3>Тарифы</h3>
        
    </div>
    <hr>
</div>

<div class="menu-btn">
    <img src="/web/icons/menu.svg" onclick="showMenu()" title="Меню">
    <img id="night" src="/web/icons/cloudy-night.svg" onclick="darkThemeOn()" title="Тёмная тема">
    <img id="day" src="/web/icons/sunny.svg" style="display: none;" onclick="darkThemeOff()" title="Светлая тема">
    <img src="/web/icons/video.svg" onclick="showVideo()" title="Посмотреть видео">
    <img src="/web/icons/booking.svg" title="Записаться на курс">
</div>