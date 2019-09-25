<?php
$head='<nav class="navbar navbar-light bg-light">
<span class="navbar-brand mb-0 h1">Exampl1</span>
</nav>';

$imageArrs=array('{"thumbnail":"https://www.tristatetechnology.com/tristate-website/blog/wp-content/uploads/2017/09/Why_Laravel.jpg"}','{"thumbnail":"https://cdn.shopify.com/shopify-marketing_assets/static/share-image-generic.jpg"}','{"thumbnail":"https://www.ns8.com/images/screenshots/ns8-protect-for-magento.png??v=1.3.2857"}'
    );
// print $imageArrs;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">   

    <title>Document</title>
</head>
<body>
<?php
    echo $head;
?>
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
  <?php
    for($i=0;$i<sizeof($imageArrs);$i++){
      if($i==0){
         echo '<div class="carousel-item active">
      <img src='. json_decode($imageArrs[$i])->thumbnail .' class="d-block w-100" alt="...">
    </div>';
      }
      else{
        echo '<div class="carousel-item">
        <img src='. json_decode($imageArrs[$i])->thumbnail .' class="d-block w-100" alt="...">
      </div>';
      }
     
        ?>
    
  <?php
    };
    ?>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>
<?php ?>