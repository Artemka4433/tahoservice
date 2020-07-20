<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://smtpjs.com/v3/smtp.js"></script>
    <script src="visitka.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="support.css">
    <link rel="stylesheet" href="visitka.css">
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<header id="header">
    <div class="headerNav">Тахо сервис</div>
    <div></div>
    <div></div>
    <div></div>

    <div class="headercon headerNav">Главная</div>
    <a class="headercon headerNav" href="#service">Услуги</a>
    <a class="headercon headerNav" href="#footer">Контакты</a>
    <a class="redbtn headercon " href="#writeUs">Написать</a>
</header>
<div id="main">
    <div class="mainstyles" id="upperext"> Тахографы Установка,</br> Калибровка</div>
    <div><img id="trucks" src="img/trucks.png"></div>
    <!--    <div class="mainstyles" id="centertext">От профессиональной мойки и ремонта</br> повреждений салона повреждений-->
    <!--        салона</br> повреждений салона обработки-->
    <!--    </div>-->


    <section class="aboutUs">
        <h1 id="service" class="servicesUpperContent">Услуги</h1>
        <div id="underService" class="servicesUpperContent services">
            <p><h4>Калибровка, ремонт, установка, замена, техническое обслуживание<br/> аналоговых и цифровых тахографов. Гибкая система скидок. </h4></p>
        </div>
        <div id="serviceContent">
            <div class="serviceItemContainer">
                <img class="img" src="img/speed.png"/>
                <div class="shadowCon"></div>
                <h3 class="aboutUs">Тахографы</h3>
                <h6 class="services">Продажа тахографов и комплектующих к ним.</h6>
            </div>
            <div class="serviceItemContainer">
                <img class="img" src="img/servis.png"/>
                <div class="shadowCon"></div>
                <h3 class="aboutUs">Сервисное обслуживание</h3>
                <h6 class="services">Высококвалифицированный персонал.<br/>Ремонт оборудования разной степени сложности</h6>
            </div>
            <div class="serviceItemContainer">
                <img class="img" src="img/servis2.png"/>
                <div class="shadowCon"></div>
                <h3 class="aboutUs">Сертифицированная станция</h3>
                <h6 class="services">Калибровка, ремонт и установка аналоговых и цифровых тахографов</br> оказывает профессиональные услуги более 10 лет.</br> Оказываем помощь в оформлении цифровых карт водителя.</h6>
            </div>
        </div>
    </section>


    <div id="sendMsg" class="mainstyles">
        <div class="emailCon">
        </div>

        <div id="writeUs" class="emailCon">
            <input id="name" class="emailInputs" placeholder="Имя и фамилия" type="text"/>
            <input id="email" class="emailInputs" placeholder="Ваша почта" type="email"/>
            <input id="number" class="emailInputs" placeholder="Номер телефона" type="tel"/>
            <textarea id="question" class="emailInputs" placeholder="Ваш вопрос" cols="30" rows="10"></textarea>
            <button id="sendEmailBtn" class="redbtn" onclick="sendDate()">Отправить</button>
        </div>

        <!--        <div class="shadowCon shadowDiv"></div>-->
    </div>

</div>
<footer id="footer" class="conteiners">
    <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2642.197372146687!2d35.028538615848056!3d48.529449131764515!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d958c91fa3ff3b%3A0x8e5048ae7dd11059!2z0JrQsNGA0LDQstCw0L0!5e0!3m2!1sru!2sua!4v1591441192681!5m2!1sru!2sua"
            width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
            tabindex="0"></iframe>
    <div class="aboutUs">
        <h1>Как нас найти?</h1>
        <p><h4>Адреса</h4></p>
        <p><h6 class="info">ул. Нижнеднепровская 7</h6></p>
        <p><h4>Телефоны</h4></p>
        <p><h6 class="info">+38(050) 591 14 95<br/>+38(067) 561 81 73</h6></p>
        <p><h4>Почта</h4></p>
        <p><h6 class="info">-------------<br/>-----------------</h6></p>
        <p><h4>График работы</h4></p>
        <p><h6 class="info">9:00-17:00<br/>Пн-Пт</h6></p>

    </div>


</footer>
</body>
</html>