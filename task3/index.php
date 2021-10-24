<?php 
require_once '../app/header.php';
?>

<div class="container py-4">
<div class="p-5 mb-4 bg-light rounded-3">
      <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold">Веб-разработка</h1>
        <p class="col-md-8 fs-4">
        На диске лежит файл image.png, размер 20000 на 20000. Вывести картинку как баннер размером 200 на 100 пикселей.  
        Обратите внимание на размер и пропорции.
        </p>
        <div class="alert alert-danger" role="alert">
          <h6">github не пропускает изображение такого размера по этому его нет но реализация есть</h6>
        </div> 
      </div>
</div>
  
  <!-- github не пропускает изображение такого размера по этому его нет -->
  <div>
      <img  src="image.png" style="
        display: block;
        max-width:200px;
        max-height:100px;
        width: auto;
        height: auto;" >
  </div>

<?php 
require_once '../app/footer.php';
?>