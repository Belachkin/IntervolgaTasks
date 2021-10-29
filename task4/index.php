<?php 
require_once '../app/header.php';
?>

<div class="container py-4">
<div class="p-5 mb-4 bg-light rounded-3">
      <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold">Массивы</h1>
        <p class="col-md-8 fs-4">
        Дан массив из 100 элементов. Требуется вывести количество пар одинаковых элементов.
        Например: 1, 1, 2, 3, 4, -51, 12, 12, 12, -51
        </p>
      </div>
</div>


<div class="col-md-7 col-lg-8">
    <h4 class="mb-3">Заполните форму</h4>
    <form class="needs-validation" action="" method="GET">
        <div class="row g-3">

        <div class="col-sm-3">
            <label for="From" class="form-label">Размер массива (MAX: 100)</label>
            <input type="number" name="arrSize" class="form-control" value="5">
        </div>

        <div class="col-sm-7">
            <label for="username" class="form-label">Диапазон заполнения массива случайными числами (MAX: 300)</label>
            <div class="input-group has-validation">
                <span class="input-group-text">От 1 До </span>
                <input type="number" name="randSize" class="form-control" value="9">             
            </div>
        </div>

        <div class="col-sm-6">
            <input class="btn btn-success" type="submit" value="Отправить">
        </div>
        </div>          
    </form>
</div>


<?php 

    $arrSize = htmlspecialchars($_GET['arrSize']);
    $randSize = htmlspecialchars($_GET['randSize']);

    if(empty($arrSize) || empty($randSize)) {
        echo '<div class="alert alert-danger" role="alert">Одно из полей пустое</div>' ;
        exit;
    }
    elseif($arrSize > 100 || $randSize > 300 || $arrSize <= 1 || $randSize <= 1) {
        echo '<div class="alert alert-danger" role="alert">Некоторые поля превысили допустимые значения</div>'; 
        exit;
    }
    else {
        $arr = []; 

        for($i = 0; $i < $arrSize; $i++) { //заполняем массив случайными числами
            $arr[$i] = rand(1, $randSize);
        } 
        require 'pairs.php';
        $a = new Pairs;
        $b = $a->GetPairs($arr)
?>
        <p>массив</p>
        <div class="alert alert-light" role="alert"><?php print_r($arr); ?></div> 
        <p>[Элемент] => Кол-во</p>
        <div class="alert alert-light" role="alert"><?php print_r(array_count_values($arr)); ?></div> 
        <p>[Элемент] => Кол-во пар</p>
        <div class="alert alert-light" role="alert"><?php print_r($b); ?></div> 
<?php
    }
?>


<?php 
require_once '../app/footer.php';
?>