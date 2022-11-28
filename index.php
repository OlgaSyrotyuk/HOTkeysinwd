<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="main.css">
  <script>

  </script>
</head>
<style>
  .hot-keys-info {
    color: blue;
  }
  .hot-keys-info:hover {
    color: red;
  }
  .news--first {
    background-color: lightgreen;
  }

  .news__title {
    float: right;
    margin: 0;
    padding: 15px;
    font-weight: bold;
    font-size: 20px;
    height: auto;
    text-align: black;
    text-indent: hanging;
    word-spacing: 5px;
    font-synthesis: weight;

  }

  .news__lead {
    float: right;
    margin: 0;
    padding: 15px;
    padding-top: 0;
    line-height: 1.4;
    text-indent: hanging;

  }

  .columns {
    margin-left: auto;
    margin-right: auto;
    margin-bottom: 40px;
    width: 300px;
    float: right;
    columns: 1;
    column-gap: 180px;
    display: block;
    height: 500px;
    position: static;
  }

  .columns__item {
    float: right;
    color: black;
  }

  footer {
    width: 98%;
    float: left;
    padding: 1%;
    background-color: yellow;
    border-top: 2px solid-silver;
    margin-top: 10px;
    height: 70px;
    border-style: dotted;
    border-width: 7px;
    border-color: blue;
  }

  footer #social {
    float: left;
    width: 50%;
  }

  footer #rights {
    float: left;
    width: 50%;
    text-align: right;
    font-size: 1.1em;
  }

  body {
    background-color: #c3ffd1;
  }

  ul {
    display: flex;
    list-style: none;
  }

  li {
    margin: 5px;
  }

  hero {
    float:right;
  }
</style>

<body>
  <header>
    <div id="sidebar">
      <div class="toggle-btn" onclick="openMenu()">
        <span></span>
        <span></span>
        <span></span>
      </div>
        <ul>
         <li> Меню сайту</li> 
         <li><a href="/">Головна</a></li>
         <li><a href="/">Додати відгук</a></li>
        </ul>
        
    </div>

     
    <div style="display: flex">
      <p><strong>Гарячі клавіші Windows</strong></p> &nbsp&nbsp
      <!-- Розподіл на три колонки -->
      <div style="flex-grow: 1;">
        <img src="клавіші.jpg" width="50" height="50" /><br />
      </div>
      <div style="flex-grow: 1">
        <nav>
          <ul>
            <li><a class="hot-keys-info" href="#make_review">Створити відгук</a></li>
            <li><a class="hot-keys-info" href="#attributes">Властивості</a></li>
            <li><a class="hot-keys-info" href="#need_uses">Необхідність використання</a></li>
            <li><a class="hot-keys-info" href="#use_hot_keys">Використання гарячих клавіш</a></li>
          </ul>
        </nav>
      </div>
    </div>

  </header>



  <body class="page__body">
    <div class="columns">
      <div class="columns__item">
        <article class="news news--first">
          <h2 class="news__title">Багато хто чув про гарячі клавіші на клавіатурі, та чи знаєте ви, як ними
            користуватися?</h2>
          <p сlass="news__lead">Навіть якщо ніколи не пробували, радимо потренуватися. Пам’ятаєте, як ви
            кажете своїм учням: навчатися нового в будь-якому віці — дуже корисно: це і для мозку гарне
            тренування, і економія часу. Отже, ловіть клавіші та комбінації клавіш, що забезпечують
            альтернативний спосіб виконання дій, які ви зазвичай робите за допомогою миші. Застосовуйте їх
            хоча б у найчастіше виконуваних вами завданнях і побачите різницю!</p>
        </article>
      </div>
    </div>
  </body>
  <h2 id="make_review">Комбінації клавіш</h2>
  <ul>
    <li>Ctrl + c</li>
    <li>Ctrl + v</li>
    <li>Ctrl + x</li>
    <li>Ctrl+Shift+d</li>
    <li>Ctrl+z</li>
  </ul>

  <table>
    <tr>
      <!-- Строка -->
      <td>Комбінація клавіш</td> <!-- Ячейка -->
      <td>Властивості</td>
    </tr>

    <tr>
      <!-- Строка -->
      <td>Ctrl+c</td> <!-- Ячейка -->
      <td>Скопіювати вибраний контент</td>
    </tr>

    <tr>
      <!-- Строка -->
      <td>Ctrl+v</td> <!-- Ячейка -->
      <td>Вставити скопійований контент</td>
    </tr>

    <tr>
      <!-- Строка -->
      <td>Ctrl+x</td> <!-- Ячейка -->
      <td>Вирізати вибраний контент(Видалити з певного місця з можливістю його розміщення в іншому місці)</td>
    </tr>

    <tr>
      <!-- Строка -->
      <td>Ctrl+Shift+d</td> <!-- Ячейка -->
      <td>Вирізати вибраний контент(Видалити з певного місця з можливістю його розміщення в іншому місці)</td>
    </tr>


  </table>

  <h2 id="attributes">Властивості</h2>
  <h3>Ctrl+c</h3>
  <p>Скопіювати вибраний контент</p>
  <hr>
  <h3>Ctrl+v</h3>
  <p>Вставити скопійований контент</0-p>
    <hr>
  <h3>Ctrl+x</h3>
  <p>Вирізати вибраний контент(Видалити з певного місця з можливістю його розміщення в іншому місці</p>
  <hr>
  <h3>Ctrl+Shift+d</h3>
  <p>Дублювати строку на якій поставлений курсор чи виділена частина</p>
  <hr>
  <h3>Ctrl+z</h3>
  <p> Відмінити минулу дію</p>

  &nbsp

  <h2 id="need_uses">Необхідність використання</h2>
  <p>Використання гарячих клавіш дозволяє спростувати виконання постійно повторюваних або простих по сенсу дій, які
    мишкою потребують декілька або більше кліків(натискань лівою і правою кнопками миші), що значно збільшує
    кількість дій, виконаних з клавіатурою</p>
  <h2 id="use_hot_keys">Використання гарячих клавіш</h2>
  <p>В якості прикладу розглянемо гарячу клавішу Ctrl+Shift+d</p>
  <p>Натискати клавіші потрібно не по черзі(як в калькуляторі) і не одночасно(як на піаніно акордом). Спочатку
    потрібно зажати клавіші Ctrl і Shift, і, не відпускаючи їх, натиснути клавішу d. Затиснуті в момент натискання d
    клавіші Ctrl і Shift модифікують дії клавіші d. Тобто при натисканні клавіші d виконується не основна дія
    (написання символу d), а одна із (вторинних) (Дублювання)</p>
  <iframe width="560" height="315" src="https://www.youtube.com/embed/OxSM2OIfcjU" title="YouTube video player"
    frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
    allowfullscreen></iframe>
  <footer>
    <footer class="hero">
        <div id="navbar" class="navbar top">
           <nav>
                <ul>
                   <li><a href="https://www.youtube.com/watch?v=VeAK7Bv4F1o&list=PLVMFo8EEePMj6I_kGGjUqdMcvHh5c6Gpl">Більше відео</a></li>
                   <li><a href="#about">Про нас</a></li>                   
            </ul>
         </nav>
     </div>
    <div id="social">
      <a href="https://www.instagram.com/">
        instagram
      </a>
    </div>
    <div id="rights">
      Усі права захищені &copy;

    </div>
  </footer>

  <script>
    function openMenu(){
      document.getElementById("sidebar").classList.toggle('active');
    }
  </script>

</body>

</html>