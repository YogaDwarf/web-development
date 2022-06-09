<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Page</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/formstyle.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,900&family=Roboto+Condensed:ital,wght@0,400;1,700&display=swap" rel="stylesheet">
</head>
<body>
  <div class="pop-up" id="popUp">
    <div class="pop-up_container" id="popUpContainer">
      <div class="pop-up-background" id="popUpBackground"></div>
      <div class="pop-up_body" id="popUpBody">
        <div class="pop-up_header">
          <img class="pop-up_header-image" src="images/welcome.svg">
          <p class="pop-up_header-title">Записаться на курс</p>
        </div>
        <form class="pop-up_form">
          <input class="pop-up_form-name" type="text" name="name" placeholder="Ваше имя">
          <input class="pop-up_form-email" type="email" name="email" placeholder="Email">
          <select class="pop-up_form-activity" size="1" name="activity" placeholder="Деятельность">
            <option value="Деятельность не выбрана" hidden="">Деятельность</option>
            <option value="Программист">Программист</option>
            <option value="Дизайнер">Дизайнер</option>
            <option value="Маркетолог">Маркетолог</option>
          </select>
          <div class="pop-up_checkbox">
            <input class="pop-up-checkbox" type="checkbox" id="info-text">
            <label class="pop-up_checkbox-text" for="info-text">Согласен получать информационные материалы о старте</label>
            <img class="pop-up_checkbox-image" src="images/vector.svg">
          </div>
          <div class="pop-up_button">
            <p class="pop-up_button-text">Записаться на курс</p>
          </div>
        </form>
        <img class="pop-up_close" id="popUpClose" src="images/cross.svg">
      </div>
    </div>
  </div>

  <header class="header">
    <div class="header__logo">
      <p class="header__logo_text">Don`t <span class="header__logo_text_extra">do</span> it</p>
    </div>
    <div class="header__cross-heading">
      <p class="header__cross-heading_text">Что будет на курсе?</p>
      <p class="header__cross-heading_text">Вопросы</p>
      <p class="header__cross-heading_text">Автор</p>
    </div>
    
    <button class="header__button open-pop-up">
      <p class="header__button_text">Записаться на курс</p>
    </button>
  </header> 

  <main class="main">
    <section class="main__top">
      <div class="main__top_logo">
        <p class="main__top_logo_text">Не <span class="main__top_logo_text_extra">делай</span> это</p>
      </div>
      <div class="main__top_description">
        <p class="main__top_description_text">Онлайн-курс для творческих людей, о том, как управлять своим временем</p>
      </div>

      <button class="main__top_button open-pop-up">
        <p class="main__top_button_text">Записаться на курс</p>
      </button>

      <div class="main__top_image">
        <img class="main__top_image_title" src="images/base.png" alt="Изображение не загружено.">
      </div>
      <div class="main__top_info">
        <div class="main__top_info-image">
          <img class="main__top_info_image" src="images/time.svg" alt="Изображение не загружено.">
          <img class="main__top_info_image" src="images/book.svg" alt="Изображение не загружено.">
          <img class="main__top_info_image" src="images/target.svg" alt="Изображение не загружено.">
        </div>
        <div class="main__top_info_text">
          <p class="main__top_info_text_idea">Для тех, у кого слишком много идей и слишком мало времени</p>
          <p class="main__top_info_text_method">Метод «списка не дел», который позволит успевать и реализовывать</p>
          <p class="main__top_info_text_learn">Курс научит творческих людей сосредотачиваться</p>
        </div>
      </div>
    </section>

    <section class="main__bottom">
      <div class="main__bottom_header">
        <img class="main__bottom_header_image" src="images/finances.png" alt="Изображение не загружено.">
        <p class="main__bottom_header_title">Ты не успеешь</p>
        <p class="main__bottom_header_text">
          Всех творческих людей объединяет одна проблема - отсутствие времени на 
          реализацию идей. Как прибавить суткам часы, рассмотрим в нашем курсе.
        </p>
      </div>
      <div class="main__bottom_middle">
        <p class="main__bottom_middle_title">Опять дедлайн</p>
        <p class="main__bottom_middle_text">В мире, где столько всего интересного, когда же успевать жить?</p>
        <img class="main__bottom_middle_image" src="images/mind_blowing.png" alt="Изображение не загружено.">
      </div>
      <div class="main__bottom_final">
        <p class="main__bottom_final_newtitle">На курсе ты <span class="main__bottom_final_newtitle_extra">сможешь</span></p>
      </div>

      <div class="main__bottom-box">
        <div class="main__bottom_box">
          <div class="main__bottom_box_head">
            <img class="main__bottom_box_image" src="images/finger_one.svg" alt="Изображение не загружено.">
            <p class="main__bottom_box_text">Понять, что нужно делать, а что делать не стоит.</p>
          </div>
          <div class="main__bottom_box_head">
            <img class="main__bottom_box_image" src="images/finger_two.svg" alt="Изображение не загружено.">
            <p class="main__bottom_box_text">Перестать себя искусственно ограничивать.</p>
          </div>
          <div class="main__bottom_box_head">
            <img class="main__bottom_box_image" src="images/finger_three.svg" alt="Изображение не загружено.">
            <p class="main__bottom_box_text">Определить сильные стороны и начать использовать слабые.</p>
          </div>
          <div class="main__bottom_box_head">
            <img class="main__bottom_box_image" src="images/finger_four.svg" alt="Изображение не загружено.">
            <p class="main__bottom_box_text">Научиться достигать любой цели в 3 понятных шага.</p>
          </div>
          <div class="main__bottom_box_head">
            <img class="main__bottom_box_image" src="images/finger_five.svg" alt="Изображение не загружено.">
            <p class="main__bottom_box_text">Сотрудничать эффективно и с правильными людьми.</p>
          </div>
          <div class="main__bottom_box_head">
            <img class="main__bottom_box_image" src="images/finger_six.svg" alt="Изображение не загружено.">
            <p class="main__bottom_box_text">Оптимизировать общение с клиентами и проведение совещаний.</p>
          </div>
        </div>
      </div>
    </section>

    <footer class="main__last">
      <p class="main__last_text">Don`t <span class="main__last_text_extra">do</span> it</p>
    </footer>
  </main>   

  <script src="script.js"></script>
</body>
</html>