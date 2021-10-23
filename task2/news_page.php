<?php 
require_once '../app/header.php';
?>

<div class="container py-4">
<div class="p-5 mb-4 bg-light rounded-3">
      <div class="container-fluid py-5">
        <p class="col-md-8 fs-4">
            
        <?php echo file_get_contents('text.txt');?>

        </p>
      </div>
</div>






<?php 
require_once '../app/footer.php';
?>