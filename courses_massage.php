<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Каталог онлайн курсов массажа">
  <title>Курсы массажа</title>
  <link rel="shortcut icon" href="png/icons/sun-icon.png" type="image/png">
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">

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

  <div class="container-xxl mt-5 mb-3">
    <nav
      style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
      aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item mt-3"><a href="index.html">Главная</a></li>
        <li class="breadcrumb-item mt-3"><a href="courses.html">Курсы</a></li>
        <li class="breadcrumb-item active mt-3" aria-current="page">Массаж</li>
      </ol>
    </nav>
    <h3 class="mt-2 mb-4">Курсы дистанционного обучения массажистов</h3>

    <?php

    include_once("bd_connection.php");

    $sql = "SELECT * FROM massage_cards";

    $resultset = mysqli_query($link, $sql) or die("database error:" . mysqli_error($link));

    while ($record = mysqli_fetch_assoc($resultset)) { ?>

      <!-- Формирование карточек товаров -->
      <div class="card mb-5 card-anim mx-auto" style="width: auto; max-width: 880px;">
        <div class="row g-0">
          <div class="col-md-8">
            <div class="card-body">
              <h4 class="card-title mt-2" style="margin-left: 4%;"><b>Курс
                  <?php echo $record['course_name']; ?>
                </b></h4>
              <h5 class="card-title time-study opacity-75" style="color: rgb(49, 191, 207); margin-left: 4%;">
                <b>
                  <?php echo $record['study_load']; ?>
                </b>
              </h5>
              <p class="mb-1" style="margin-left: 0.5%;">В программу обучения входит:</p>
              <ul style="margin-left: 1.8%; color: rgb(56, 56, 56);">
                <?php echo $record['program_points']; ?>
              </ul>
              <h4 class="mb-4" style="margin-left: 4%;"><b>
                  <?php echo $record['price']; ?>
                </b></h4>
              <div class="row g-0">
                <div class="col-2">
                  <img class="opacity-75" src="png/certificate (1).png" alt="" width="50px" style="margin-left: 25%;">
                </div>
                <div class="col mb-3">
                  <h6 class="mt-2 mb-3 d-none d-lg-block" style="margin-left: 1%;">
                    <?php echo $record['diplom_info']; ?>
                  </h6>
                  <h6 class="mt-2 mb-3 d-lg-none" style="margin-left: 10%;">
                    <?php echo $record['diplom_info']; ?>
                  </h6>
                </div>
              </div>
              <div class="row">
                <div class="col-5">
                  <!--Кнопка для модального окна: Записаться на курс-->
                  <button type="button" class="btn button-blue mt-2 mb-3" style="margin-left: 10%;" data-bs-toggle="modal"
                    data-bs-target="#ModalRegistr">
                    Записаться на курс
                  </button>
                </div>
                <div class="col-7">
                  <!--Кнопка для модального окна: Подробнее-->
                  <button type="button" class="btn button-blue mt-2 mb-3" style="margin-left: 25%;" data-bs-toggle="modal"
                    data-bs-target="#<?php echo $record['target_detail']; ?>">
                    Подробнее о курсе
                  </button>
                </div>
              </div>

              <!--Модальное окно к карточке: Подробнее-->
              <div class="modal fade" id="<?php echo $record['target_detail']; ?>" tabindex="-1"
                aria-labelledby="<?php echo $record['target_detail']; ?>Label" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                  <div class="modal-content">
                    <div class="modal-header" style="margin-left: 2%; margin-right: 2%;">
                      <h4 class="modal-title" id="<?php echo $record['target_detail']; ?>Label">Подробнее о курсе</h4>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
                    </div>
                    <div class="modal-body" style="margin-left: 2%; margin-right: 2%;">
                      <h5><b>В программу обучения входит:</b></h5>
                      <ul>
                        <?php echo $record['program_points']; ?>
                      </ul>
                      <h5><b>Как проходит курс:</b></h5>
                      <p align="justify">После оплаты курса
                        <?php echo $record['course_name']; ?> на электронную почту студента
                        приходит
                        обучающий материал. Обучение происходит в индивидуальном режиме, в любом месте и в
                        любое время,
                        начиная с любого урока.
                      </p>
                      <h5><b>Как можно получить свидетельство о прохождении курса:</b></h5>
                      <p align="justify">Свидетельство о прохождении курса
                        <?php echo $record['course_name']; ?> с присвоением
                        квалификации
                        студент получает по почте, заказным письмом.
                      </p>
                      <h5><b>Преимущества курса дистанционного обучения:</b></h5>
                      <ul>
                        <li>возможность освоить востребованную профессию, не выходя из дома;</li>
                        <li>обучение в любое время в любом месте в индивидуальном темпе;</li>
                        <li>бесплатные консультации преподавателя не только во время обучения, но и после;
                        </li>
                        <li>профессиональный рост и возможность получения достойной заработной платы.</li>
                      </ul>
                      <h5><b>Что требуется, что бы записаться на курс:</b></h5>
                      <p align="justify">Чтобы стать студентом курса
                        <?php echo $record['course_name']; ?>, нужно нажать на
                        кнопку
                        записаться на курс.
                      </p>
                      <button type="button" class="btn button-blue mt-2 mb-3" data-bs-toggle="modal"
                        data-bs-target="#ModalRegistr">
                        Записаться на курс
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <img src="<?php echo $record['card_img']; ?>" class="img-fluid rounded-end img-card d-none d-lg-block"
              alt="...">
          </div>
        </div>
      </div>

      <?php
    }
    ?>

    <!--Модальное окно к карточке: Записаться на курс-->
    <div class="modal fade" id="ModalRegistr" tabindex="-1" aria-labelledby="ModalRegistrLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header" style="margin-left: 2%; margin-right: 2%;">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
          </div>
          <div class="modal-body" style="margin-left: 2%; margin-right: 2%;">
            <h2 class="mt-4" align="center"><b>Запишитесь на обучение</b></h2>

            <?php

            if (isset($_POST["submit"])) {

              $query = "INSERT INTO `users` (`first_name`, `last_name`, `phone_number`, `course_name`, `email`, `insert_time` ) 
              VALUES ('{$_REQUEST['first_name']}', '{$_REQUEST['last_name']}', '{$_REQUEST['phone_number']}', '{$_REQUEST['course_name']}', '{$_REQUEST['email']}', now())";

              $sql_ins = mysqli_query($link, $query);

              $admin = "bodysunlight@yandex.ru";
              $subject = "Запись на курс массажа";
              $mess = "
              <h1>Пользователь отправил заявку на курс массажа</h1>
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
                  <th>Курс</th>
                  <th>Формат обучения</th>
                  <th>Имя</th>
                  <th>Фамилия</th>
                  <th>Почта</th>
                  <th>Номер телефона</th>
                </tr>
                <tr>
                  <td>{$_REQUEST['course_name']}</td>
                  <td>{$_REQUEST['course_type']}</td>
                  <td>{$_REQUEST['first_name']}</td>
                  <td>{$_REQUEST['last_name']}</td>
                  <td>{$_REQUEST['email']}</td>
                  <td>{$_REQUEST['phone_number']}</td>
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
                echo '<script type="text/javascript">document.location.href = "https://bodysunlight.ru/requestSend"</script>';
              } else {
                echo '<script type="text/javascript">document.location.href = "https://bodysunlight.ru/errorPage"</script>';
              }

            }
            mysqli_close($link);
            ?>

            <form style="margin-left: 5%; margin-right: 5%;" method="post">

              <div class="mb-1 mt-4">
                <label for="course" class="col-form-label">Курс:</label>
                <select class="form-select" id="course_name" name="course_name" required>
                  <option selected>Выберите курс...</option>
                  <option value="Массажист-универсал Базовый курс">Курс "Массажист-универсал Базовый курс"</option>
                  <option value="Массажист универсал: базовый курс + продвинутый">Курс "Массажист универсал: базовый
                    курс + продвинутый"</option>
                  <option value="Массажист универсал: базовый курс + Курсы младших медработников">Курс "Массажист
                    универсал: базовый курс + Курсы младших медработников"</option>
                  <option value="Массажист универсал: базовый курс + продвинутый + Курсы младших медработников">Курс
                    "Массажист универсал: базовый курс + продвинутый + Курсы младших медработников"</option>
                  <option value="Медицинский массаж">Курс "Медицинский массаж"</option>
                  <option value="Прикладная эстетика в массаже">Курс "Прикладная эстетика в массаже"</option>
                  <option value="Массаж ног">Курс "Массаж ног"</option>
                  <option value="Массаж лица">Курс "Массаж лица"</option>
                  <option value="Младшая медицинская сестра/брат">Курс "Младшая медицинская сестра/брат"</option>
                </select>
              </div>
              <div class="mb-1">
                <label for="course" class="col-form-label">Формат обучения</label>
                <select class="form-select" id="course_type" name="course_type" required>
                  <option selected>Выберите формат обучения...</option>
                  <option value="Дистанционно">Дистанционное обучение</option>
                  <option value="Очно">Очное обучение</option>
                </select>
              </div>
              <div class="mb-1">
                <label for="name" class="col-form-label">Ваше имя:</label>
                <input type="text" class="form-control" id="first_name" name="first_name" required>
              </div>
              <div class="mb-1">
                <label for="name" class="col-form-label">Ваша фамилия:</label>
                <input type="text" class="form-control" id="last_name" name="last_name" required>
              </div>
              <div class="mb-1">
                <label for="email" class="col-form-label">E-mail:</label>
                <input type="text" class="form-control" id="email" name="email" required>
              </div>
              <div class="mb-1">
                <label for="number" class="col-form-label">Номер телефона:</label>
                <input type="text" class="form-control" id="phone_number" name="phone_number" required>
              </div>
              <div class="form-check mt-3">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked required>
                <label class="form-check-label" for="flexCheckChecked">
                  Я согласен с политикой конфиденциальности и обработки персональных данных.
                </label>
              </div>
              <div class="d-grid gap-2 col-6 mx-auto mt-4 mb-4">
                <button type="submit" name="submit" class="btn button-blue">Оставить заявку</button>
              </div>
            </form>

          </div>
        </div>
      </div>
    </div>

  </div>

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

  </footer>

  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
    crossorigin="anonymous"></script>
</body>

</html>