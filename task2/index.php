<?php 
require_once '../app/header.php';
?>

<div class="container py-4">
<div class="p-5 mb-4 bg-light rounded-3">
      <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold">PHP и HTML. Напишите код на PHP</h1>
        <p class="col-md-8 fs-4">
            В переменной $a лежит текст новости. В переменной $link лежит ссылка на страницу с полным текстом этой новости.
            Нужно в переменную $b записать сокращенный текст новости по правилам: - обрезать до 180 символов - приписать многоточие
             - последние 2 слова и многоточие сделать ссылкой на полный текст новости.
            Какие проблемы вы видите в решении этой задачи? Что может пойти не так?</p>
      </div>
</div>

<?php 

    //переменные $a $b так называются только потому что так сказано в условии задачи

    $a = file_get_contents('text.txt'); //метод записывает текст из файла как строку 

    $link = 'news_page.php';

    $b = mb_strimwidth($a, 0, 180, "..."); //Получение строки обрезанной до заданного размера и добавление в конце ...
    $wordArr = explode(" ", $b); //Получаем массив слов
    array_splice($wordArr, count($wordArr)-2, 0, '<a href="news_page.php">'); //добавляем тег после двух слов в массив
    $wordArr[count($wordArr) + 1] =  '</a>'; //закрываем тег в конце массива
    $words = implode(" ", $wordArr); //Получаем строку
?>



<div class="container px-4 py-5" id="hanging-icons">
    <h2 class="pb-2 border-bottom"></h2>
    <div class="row g-4 py-5 row-cols-1 row-cols-lg-2">
      <div class="col d-flex align-items-start">       
        <div>
          <h2>Новость</h2>
          <p><?php echo $words ?></p>
        </div>
      </div>
      <div class="col d-flex align-items-start">       
        <div>
          <p>
              В ходе решения я столкнулся с такой проблемой, 
              мне не удалось банально воспользоваться массивом создовая поиск по первым двум пробелам
              и не возможно было пройти циклом по строке, возможно я что то делал не так и решил все через костыль. 
              Из того что может пойти не так, так это если в место слов будет в конце будут союзы и в таком случае условие задачи не выполнится.
          </p>
        </div>
      </div>
    </div>
</div>



<?php 
require_once '../app/footer.php';
?>