<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Отзывы и фотографии учеников с курсов">
  <title>Отзывы</title>
  <link rel="shortcut icon" href="png/icons/sun-icon.png" type="image/png">
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/carousel.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
  <!-- после jQuery свой скрипт, зависящий от jQuery -->
  <script defer src="js/jqueryscript.js"></script>
  <script scr="scriptmail.js"></script>

  <!-- Yandex.Metrika counter -->
  <script type="text/javascript">
    (function (m, e, t, r, i, k, a) {
      m[i] = m[i] || function () { (m[i].a = m[i].a || []).push(arguments) };
      m[i].l = 1 * new Date();
      for (var j = 0; j < document.scripts.length; j++) { if (document.scripts[j].src === r) { return; } }
      k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
    })
      (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

    ym(92831198, "init", {
      clickmap: true,
      trackLinks: true,
      accurateTrackBounce: true,
      webvisor: true
    });
  </script>
  <noscript>
    <div><img src="https://mc.yandex.ru/watch/92831198" style="position:absolute; left:-9999px;" alt="" /></div>
  </noscript>
  <!-- /Yandex.Metrika counter -->

</head>

<body class="d-flex flex-column min-vh-100">

  <header>

    <nav class="navbar navbar-expand-lg fixed-top shadow bg-white rounded">

      <div class="container-xxl">

        <a class="school-name" href="index.html">
          <img style="width:220px; margin-bottom: 5px; margin-top: 10px;" src="png/логотип 2.png" alt="">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
          aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="offset-md-3">
            <ul class="navbar-nav">
              <li><a class="nav-link active" href="courses.html">Курсы</a></li>
              <li><a class="nav-link active" href="company.html">О нас</a></li>
              <li><a class="nav-link active" href="reviews.php">Отзывы</a></li>
              <li><a class="nav-link active" href="contacts.php">Контакты</a></li>
            </ul>
          </div>
          <div class="d-lg-none">
            <a href="https://wa.me/79294265849?text="><img src="png/icons/wa2.png" alt=""
                style="width:3rem; margin-right: 1rem;"></a>
            <a href="https://t.me/body_sunlight"><img src="png/icons/tg2.png" alt=""
                style="width:3rem; margin-right: 1rem;"></a>
            <a href="https://instagram.com/body_sunlight?igshid=YmMyMTA2M2Y="><img src="png/icons/inst2.png" alt=""
                style="width:3rem;"></a>
          </div>
        </div>
        <div class="d-none d-lg-block">
          <a href="https://wa.me/79294265849?text="><img src="png/icons/wa2.png" alt=""
              style="width:3rem; margin-right: 1rem;"></a>
          <a href="https://t.me/body_sunlight"><img src="png/icons/tg2.png" alt=""
              style="width:3rem; margin-right: 1rem;"></a>
          <a href="https://instagram.com/body_sunlight?igshid=YmMyMTA2M2Y="><img src="png/icons/inst2.png" alt=""
              style="width:3rem;"></a>
        </div>

      </div>
    </nav>

  </header>

  <section>
    <div class="container-xxl mt-5 mb-3">
      <nav
        style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
        aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item mt-3"><a href="index.html">Главная</a></li>
          <li class="breadcrumb-item active mt-3" aria-current="page">Отзывы</li>
        </ol>
      </nav>
    </div>
  </section>

  <section>

    <div class="container-xxl mb-5">
      <h3 class="mb-4">Наши выпускники</h3>

      <div id="carouselExampleControls" class="carousel mb-5" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="card-img">
              <div class="img-wrapper"><img src="png/students/s8.jpg" alt="..."></div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="card-img">
              <div class="img-wrapper"><img src="png/students/s12.jpg" alt="..."></div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="card-img">
              <div class="img-wrapper"><img src="png/students/s5.jpg" alt="..."></div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="card-img">
              <div class="img-wrapper"><img src="png/students/s4.jpg" alt="..."></div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="card-img">
              <div class="img-wrapper"><img src="png/students/s2.jpg" alt="..."></div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="card-img">
              <div class="img-wrapper"><img src="png/students/s3.jpg" alt="..."></div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="card-img">
              <div class="img-wrapper"><img src="png/students/s1.jpg" alt="..."></div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="card-img">
              <div class="img-wrapper"><img src="png/students/s6.jpg" alt="..."></div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="card-img">
              <div class="img-wrapper"><img src="png/students/s7.jpg" alt="..."></div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="card-img">
              <div class="img-wrapper"><img src="png/students/s9.jpg" alt="..."></div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="card-img">
              <div class="img-wrapper"><img src="png/students/s10.jpg" alt="..."></div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="card-img">
              <div class="img-wrapper"><img src="png/students/s11.jpg" alt="..."></div>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev mb-5" type="button" data-bs-target="#carouselExampleControls"
          data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
          data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>

      </div>

      <h3 style="margin-top: 100px;">Отзывы выпускников</h3>

      <div class="row mt-4 review-shadow">

        <div class="col-md-10 offset-md-1 mb-4">
          <div class="card">
            <div class="row">
              <div class="col-2 align-self-center d-none d-lg-block">
                <img src="png/icons/user1.png" style="width: 70%; margin-left: 30%;" alt="">
              </div>
              <div class="col">
                <div class="card-body">
                  <blockquote class="blockquote mb-0">
                    <p>Ольга Малышева</p>
                    <footer align="justify" class="blockquote-footer">Обучалась в Находкинском филиале у Светланы
                      Валерьевны.
                      Замечательный преподаватель (опытная, внимательная, вежливая). На занятия приезжала с другого
                      города, зимой, на автобусе, с огромным удовольствием.
                      Училась по индивидуальной программе. Светлана Валерьевна, Вы лучшая ❤️😘
                      <figcaption class="figure-caption text-end">6 декабря 2022</figcaption>
                    </footer>
                  </blockquote>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-10 offset-md-1 mb-4">
          <div class="card">
            <div class="row">
              <div class="col-2 align-self-center d-none d-lg-block">
                <img src="png/icons/user1.png" style="width: 70%; margin-left: 30%;" alt="">
              </div>
              <div class="col">
                <div class="card-body">
                  <blockquote class="blockquote mb-0">
                    <p>Юлия Катасонова</p>
                    <footer align="justify" class="blockquote-footer">Светлана Валерьевна, хочу выразить Вам огромную
                      благодарность за обучение.
                      Теоретическая часть очень объёмная и информативная. Много практики, а это важно! Разбор процедур
                      идёт ОТ и ДО, с примерами и ответами на все вопросы.
                      Поэтому материал усваивается хорошо и с удовольствием. Спасибо большое за позитивную энергетику,
                      за терпение, за веру в нас.
                      За комфортную и душевную обстановку. Для меня это важно и имеет огромное значение. На занятия я
                      "летела".😊
                      Очень рада была знакомству. Желаю всем удачи, процветания, благодарных и довольных клиентов.🌺
                      <figcaption class="figure-caption text-end">8 ноября 2022</figcaption>
                    </footer>
                  </blockquote>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-10 offset-md-1 mb-4">
          <div class="card">
            <div class="row">
              <div class="col-2 align-self-center d-none d-lg-block">
                <img src="png/icons/user1.png" style="width: 70%; margin-left: 30%;" alt="">
              </div>
              <div class="col">
                <div class="card-body">
                  <blockquote class="blockquote mb-0">
                    <p>Иван Солодушкин</p>
                    <footer align="justify" class="blockquote-footer">
                      Обучился в Находкинском филиале у Светланы Валерьевны.
                      Отличный педагог, вложила в мою голову знания, уверенность,много практики рекомендую.
                      <figcaption class="figure-caption text-end">6 октября 2022</figcaption>
                    </footer>
                  </blockquote>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-10 offset-md-1 mb-4">
          <div class="card">
            <div class="row">
              <div class="col-2 align-self-center d-none d-lg-block">
                <img src="png/icons/user1.png" style="width: 70%; margin-left: 30%;" alt="">
              </div>
              <div class="col">
                <div class="card-body">
                  <blockquote class="blockquote mb-0">
                    <p>Тимофей Тимонин</p>
                    <footer align="justify" class="blockquote-footer">
                      Учился в Находке у Светланы Валерьевны. Получил хорошие навыки и знания.
                      Время на уроках текло очень быстро благодаря дружной обстановке и интересным объяснением
                      преподавателя. Моделей всегда хватало.
                      Всем рекомендую, потраченного времени ни капельки не жаль !!! P.S. Спасибо Светлана Валерьевна за
                      вашу работу!!!
                      <figcaption class="figure-caption text-end">5 октября 2022</figcaption>
                    </footer>
                  </blockquote>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-10 offset-md-1 mb-4">
          <div class="card">
            <div class="row">
              <div class="col-2 align-self-center d-none d-lg-block">
                <img src="png/icons/user1.png" style="width: 70%; margin-left: 30%;" alt="">
              </div>
              <div class="col">
                <div class="card-body">
                  <blockquote class="blockquote mb-0">
                    <p>Наталья Кальсина</p>
                    <footer align="justify" class="blockquote-footer">
                      Обучение проходила у Светланы Валерьевны. Теперь я дипломированный универсальный массажист. Всё
                      понравилось.
                      Информацию даёт доходчиво, делаем пособия, занятия проходят в лёгкой атмосфере. Моделей хватает.
                      Все приёмы и практики преподаёт доступно. Отлично поддерживает после выпуска в работе. Спасибо
                      огромное!
                      Всем рекомендую Голд Корпарейшн находкинского филиала под руководством Светланы Валерьевны
                      Корниловой.
                      <figcaption class="figure-caption text-end">29 сентября 2022</figcaption>
                    </footer>
                  </blockquote>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-10 offset-md-1 mb-4">
          <div class="card">
            <div class="row">
              <div class="col-2 align-self-center d-none d-lg-block">
                <img src="png/icons/user1.png" style="width: 70%; margin-left: 30%;" alt="">
              </div>
              <div class="col">
                <div class="card-body">
                  <blockquote class="blockquote mb-0">
                    <p>Ирина Вырупаева</p>
                    <footer align="justify" class="blockquote-footer">
                      Обучалась у Светланы Валериевны. Рекомендую всем, кто хочет смело работать по специальности -
                      КОСМЕТОЛОГ.
                      Настоящая практика и поддержка преподавателя в дальнейшем.
                      <figcaption class="figure-caption text-end">17 сентября 2022</figcaption>
                    </footer>
                  </blockquote>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

      <div class="row mt-5">

        <div class="col-md-12 offset-md-0">
          <div class="card mb-5" style="background-color: rgb(255, 255, 255);
           border: none;box-shadow: rgba(0, 167, 179, 0.3) 0px 0px 0px 3px;">
            <h2 class="mt-5 mb-5" align="center">Прошли обучение у нас? Оставьте свой отзыв!</h2>
            <div class="row">
              <div class="col-md-8 offset-md-2">

                <?php

                include_once("bd_connection.php");


                if (isset($_POST["submit"])) {

                  echo "<script>console.log('1' );</script>";

                  $query = "INSERT INTO reviews (`first_name`, `last_name`, `message`, `date_insert`) 
                      VALUES ('{$_REQUEST['first_name']}', '{$_REQUEST['last_name']}', '{$_REQUEST['message']}', now())";

                  $sql_ins = mysqli_query($link, $query);

                  $admin = "bodysunlight@yandex.ru";
                  $subject = "Отзывы учеников";
                  $mess = "
                      <h1>Пользователь оставил отзыв на сайте</h1>
                      <style>
                        th,
                        td {
                          border: 1px solid rgb(73, 73, 73);
                        }
                        table{
                          width: 500px;
                          background-color: rgb(236, 236, 236);
                        }
                        
                      </style>
                      <table>
                        <tr>
                          <th>Имя</th>
                          <th>Фамилия</th>
                          <th>Отзыв</th>
                        </tr>
                        <tr>
                          <td>{$_REQUEST['first_name']}</td>
                          <td>{$_REQUEST['last_name']}</td>
                          <td>{$_REQUEST['message']}</td>
                        </tr>
                      </table>";

                  function adopt($text)
                  {
                    return '=?UTF-8?B?' . Base64_encode($text) . '?=';
                  }

                  $headers = "Content-Type: text/html; charset=utf-8" . PHP_EOL .
                    'From: ' . adopt($subject) . ' <' . $admin . '>' . PHP_EOL .
                    'Reply-To: ' . $admin . '' . PHP_EOL;

                  mail($admin, $subject, $mess, $headers);

                  if ($sql_ins) {
                    echo "<script>console.log('Данные успешно добавлены в таблицу.' );</script>";
                    echo '<script type="text/javascript">document.location.href = "https://bodysunlight.ru/reviewsSend"</script>';
                  } else {
                    echo '<script type="text/javascript">document.location.href = "https://bodysunlight.ru/errorPage"</script>';
                  }

                }
                mysqli_close($link);

                ?>

                <form class="row g-3 mb-5 inputs" method="post">

                  <div class="col-md-6">
                    <label for="first_name" class="form-label">Ваше имя</label>
                    <input name="first_name" type="text" class="form-control" id="first_name" required>
                  </div>
                  <div class="col-md-6">
                    <label for="last_name" class="form-label">Ваша фамилия</label>
                    <input name="last_name" type="text" class="form-control" id="last_name" required>
                  </div>
                  <div class="col-12">
                    <label for="message" class="form-label">Ваш отзыв</label>
                    <textarea maxlength="500" name="message" type="text" class="form-control" id="message"
                      required></textarea>

                    <p class="mt-2 mb-1" style="color: rgb(48, 158, 174);">Максимум 500 символов</p>
                  </div>

                  <div class="col-12 mt-1">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked required>
                    <label class="form-check-label check-secondary" for="flexCheckChecked">
                      Я согласен(а) на обработку персональных данных
                    </label>
                  </div>
                  <div class="col-12 mt-3">
                    <button style="margin: 0 auto; display: block;" type="submit" name="submit"
                      class="btn button-blue">Отправить
                      отзыв</button>
                  </div>

                </form>
              </div>
            </div>

          </div>
        </div>
      </div>

    </div>

  </section>

  <footer class="text-center text-lg-start blue-footer mt-auto">

    <section class="">

      <div class="container-xxl text-center text-md-start mt-5">
        <div class="row mt-3">

          <div class="col-md-3 col-lg-4 col-xl-4 mx-auto mb-4">
            <h3 class="fw-bold mb-4" style="font-family: 'Clicker Script', cursive;">
              Body Sunlight
            </h3>
            <h6> <strong>Режим работы:</strong> 10:00 - 19:00 по Владивостоку</h6>
            <h6>692903, Приморский край, г. Находка, ул. Лениградская, д. 2</h6>
          </div>



          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4 footer-link">
            <h6 class="fw-bold mb-4"><a href="company.html">О компании</a></h6>
            <h6 class="fw-bold mb-4"><a href="reviews.html">Отзывы</a></h6>
          </div>


          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4 footer-link">
            <h6 class="fw-bold mb-4"><a href="courses.html">Курсы</a></h6>
            <h6 class="mb-3"><a href="courses_massage.php">Курсы массажа</a></h6>
            <h6 class="mb-3"><a href="courses_cosmetics.php">Курсы косметологии</a></h6>
          </div>

          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-4 footer-link" style="text-align: center;">
            <iframe frameborder="no" scrolling="no" width="150" height="180"
              style="text-align: center; background-color: rgb(255, 255, 255); border-radius: 10px; padding-top: 10px; padding-bottom: 10px; padding-left: 10px; padding-right: 10px;"
              src="https://yandex.ru/time/widget/?geoid=75&lang=ru&layout=vert&type=digital&face=serif"></iframe>
          </div>
          <div class="col-md-5 col-lg-2 col-xl-2 mx-auto mb-4 footer-link" style="text-align: center;">
            <!--LiveInternet counter--><a href="https://www.liveinternet.ru/click" target="_blank"><img id="licntAC77"
            width="88" height="120" style="border:0"
              title="LiveInternet: показано количество просмотров и посетителей"
              src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAEALAAAAAABAAEAAAIBTAA7" alt="" /></a>
          <script>(function (d, s) {
              d.getElementById("licntAC77").src =
              "https://counter.yadro.ru/hit?t29.1;r" + escape(d.referrer) +
              ((typeof (s) == "undefined") ? "" : ";s" + s.width + "*" + s.height + "*" +
                (s.colorDepth ? s.colorDepth : s.pixelDepth)) + ";u" + escape(d.URL) +
              ";h" + escape(d.title.substring(0, 150)) + ";" + Math.random()
            })
              (document, screen)</script><!--/LiveInternet-->
          </div>

        </div>
      </div>

    </section>


    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
      <div class="social-icons">
        <a href="https://instagram.com/body_sunlight?igshid=YmMyMTA2M2Y="><img src="png/icons/instagram.png" alt=""></a>
        <a href="https://wa.me/79294265849?text="><img src="png/icons/whatsapp.png" alt=""></a>
        <a href="https://t.me/body_sunlight"><img src="png/icons/tg.png" alt=""></a>
      </div>
    </div>


    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
      crossorigin="anonymous"></script>
</body>



</html>