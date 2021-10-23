<?php 
require_once '../app/header.php';
?>
<div class="container py-4">
<div class="p-5 mb-4 bg-light rounded-3">
      <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold">Найти возрастающую последовательность</h1>
        <p class="col-md-8 fs-4">Напишите код на php, который найдет самую длинную возрастающую последовательность в массиве целых чисел из 100 элементов.</p>
      </div>
    </div>



<div class="col-md-7 col-lg-8">
        <h4 class="mb-3">Заполните форму</h4>
        <form class="needs-validation" action="" method="GET">
          <div class="row g-3">

            <div class="col-sm-3">
                <label for="From" class="form-label">Размер массива (MAX: 100)</label>
                <input type="number" name="arrSize" class="form-control" value="100">
            </div>

            <div class="col-sm-7">
                <label for="username" class="form-label">Диапазон заполнения массива случайными числами (MAX: 999)</label>
                <div class="input-group has-validation">
                    <span class="input-group-text">От 1 До </span>
                    <input type="number" name="randSize" class="form-control" value="30">             
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
    elseif($arrSize > 100 || $randSize > 999 || $arrSize <= 1 || $randSize <= 1) {
        echo '<div class="alert alert-danger" role="alert">Некоторые поля превысили допустимые значения</div>'; 
        exit;
    }
    else {
        require 'LongestIncreasingSubsequence.php';
        $nvp = new LIS;
        $firstArr = $nvp->fillArray($arrSize, $randSize);
        $secondArr = $nvp->GetNVP($firstArr);

    ?>
        <p>массив</p>
        <div class="alert alert-light" role="alert"><?php print_r($firstArr); ?></div> 
        <p>самая длинная возрастающая последовательность</p>
        <div class="alert alert-light" role="alert"><?php print_r($secondArr); ?></div> 
  
    <?php
    }
    ?>
    
</div>


<?php 
require_once '../app/footer.php';
?>