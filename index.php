<?php
require_once __DIR__ . '/db.php';
$products_food = [];
$products_kennel = [];
$products_toys = [];
foreach($products as $product) {
  if(get_class($product ) == 'Food') {
    $products_food [] = $product;
  } else if ((get_class($product) == 'Kennel')) {
    $products_kennel [] = $product;
  } else {
    $products_toys [] = $product;
  }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
  <link rel="stylesheet" href="css/style.css">
  <title>ArcaPlanet</title>
</head>
<body>
  <header>
    <div class="container h-100 d-flex align-items-center">
      <img class="logo"src="img/logo.png" alt="logo">
    </div>
  </header>
  <main>
    <div class="container">
      <div class="row food my-5">
        <h2>Cibo</h2>
        <?php foreach($products_food as $product) : ?>
        <div class="col mb-3">
          <div class="card" style="width: 18rem;">
            <div class="poster d-flex align-items-center">
              <img src="<?php echo $product->image ?>" class="card-img-top" alt="poster">
            </div>
            <div class="card-body">
              <h5 class="card-title"><?php echo $product->name ?></h5>
              <h6 class="brand text-secondary"><?php echo $product->brand ?></h6>
              <p class="<?php echo ($product->is_available) ? ('available') : ('not-available'); ?>">
              <?php echo ($product->is_available) ? ('Disponibile') : ('Non Disponibile'); ?></p>
              <div class="pricing ">
                <span class="final-price fs-5 me-1 fw-bold <?php echo ($product->get_price_discounted() !== $product->price) ? ('discounted') : ('not-discounted') ?>">
                &euro;<?php  echo number_format($product->get_price_discounted(), 2, ',', '.') ?>
                </span>
                <?php if($product->get_price_discounted() !== $product->price) : ?>
                <span class="price fs-5 me-1">&euro;<?php echo number_format($product->price, 2, ',', '.') ?></span>
                <span class="discount px-2 rounded-4 me-1 fw-bold">-<?php echo $product->discount ?>%</span>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>

      <div class="row kennel my-5">
        <h2>Cucce</h2>
        <?php foreach($products_kennel as $product) : ?>
        <div class="col mb-3">
          <div class="card" style="width: 18rem;">
            <div class="poster d-flex align-items-center">
              <img src="<?php echo $product->image ?>" class="card-img-top" alt="poster">
            </div>
            <div class="card-body">
              <h5 class="card-title"><?php echo $product->name ?></h5>
              <h6 class="brand text-secondary"><?php echo $product->brand ?></h6>
              <p class="<?php echo ($product->is_available) ? ('available') : ('not-available'); ?>">
              <?php echo ($product->is_available) ? ('Disponibile') : ('Non Disponibile'); ?></p>
              <div class="pricing ">
                <span class="final-price fs-5 me-1 fw-bold <?php echo ($product->get_price_discounted() !== $product->price) ? ('discounted') : ('not-discounted') ?>">
                &euro;<?php  echo number_format($product->get_price_discounted(), 2, ',', '.') ?>
                </span>
                <?php if($product->get_price_discounted() !== $product->price) : ?>
                <span class="price fs-5 me-1">&euro;<?php echo number_format($product->price, 2, ',', '.') ?></span>
                <span class="discount px-2 rounded-4 me-1 fw-bold">-<?php echo $product->discount ?>%</span>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>


      <row class="row toys my-5">
        <h2>Giochi</h2>
        <?php foreach($products_toys as $product) : ?>
        <div class="col mb-3">
          <div class="card" style="width: 18rem;">
            <div class="poster d-flex align-items-center">
              <img src="<?php echo $product->image ?>" class="card-img-top" alt="poster">
            </div>
            <div class="card-body">
              <h5 class="card-title"><?php echo $product->name ?></h5>
              <h6 class="brand text-secondary"><?php echo $product->brand ?></h6>
              <p class="<?php echo ($product->is_available) ? ('available') : ('not-available'); ?>">
              <?php echo ($product->is_available) ? ('Disponibile') : ('Non Disponibile'); ?></p>
              <div class="pricing ">
                <span class="final-price fs-5 me-1 fw-bold <?php echo ($product->get_price_discounted() !== $product->price) ? ('discounted') : ('not-discounted') ?>">
                &euro;<?php  echo number_format($product->get_price_discounted(), 2, ',', '.') ?>
                </span>
                <?php if($product->get_price_discounted() !== $product->price) : ?>
                <span class="price fs-5 me-1">&euro;<?php echo number_format($product->price, 2, ',', '.') ?></span>
                <span class="discount px-2 rounded-4 me-1 fw-bold">-<?php echo $product->discount ?>%</span>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>

    </div>
  </main>

  
</body>
</html>