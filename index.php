<?php
require_once __DIR__ . '/db.php';
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
      <img class="logo" src="img/logo.png" alt="logo">
    </div>
  </header>
  <main>
    <div class="container">
      <div class="row my-5">
        <?php foreach ($products as $product) : ?>
          <div class="col mb-3">
            <div class="card" style="width: 18rem;">
              <div class="poster align-items-center">
                <img src="<?php echo $product->image ?>" class="card-img-top" alt="poster">
                <span class="category d-flex justify-content-center align-items-center">
                  <i class="fa-solid <?php echo $product->category->icon ?>"></i>
                </span>
                <?php if (get_class($product) === 'Food') : ?>
                  <span class="badge text-bg-success">Cibo</span>
                <?php elseif (get_class($product) === 'Kennel') : ?>
                  <span class="badge text-bg-warning">Cucce</span>
                <?php else : ?>
                  <span class="badge text-bg-primary">Giochi</span>
                <?php endif; ?>
              </div>
              <div class="card-body">
                <h5 class="card-title"><?php echo $product->name ?></h5>
                <h6 class="brand text-secondary"><?php echo $product->brand ?></h6>
                <p class="availability <?php echo ($product->is_available) ? ('available') : ('not-available'); ?>">
                  <?php echo ($product->is_available) ? ('Disponibile') : ('Non Disponibile'); ?></p>
                <div class="pricing ">
                  <span class="final-price fs-5 me-1 fw-bold <?php echo ($product->get_price_discounted() !== $product->price) ? ('discounted') : ('not-discounted') ?>">
                    &euro;<?php echo number_format($product->get_price_discounted(), 2, ',', '.') ?>
                  </span>
                  <?php if ($product->get_price_discounted() !== $product->price) : ?>
                    <span class="price fs-5 me-1">&euro;<?php echo number_format($product->price, 2, ',', '.') ?></span>
                    <span class="discount px-2 rounded-4 me-1 fw-bold">-<?php echo $product->discount ?>%</span>
                  <?php endif; ?>
                </div>
                <div class="details">
                <?php if (get_class($product) === 'Food') : ?>
                  <h5>Tipologia alimento</h5>
                  <p><?php echo $product->type ?></p>
                  <h5>Ingredienti</h5>
                  <p><?php echo implode(' - ', $product->ingredients); ?>.</p>
                  <h5>Formato</h5>
                  <p><?php echo $product->weight ?>Kg</p>
                  <h5>Fascia d'età</h5>
                  <p><?php echo $product->age ?></p>
                <?php elseif (get_class($product) === 'Kennel') : ?>
                  <h5>Formato</h5>
                  <p><?php echo $product->format->format_dimension() ?> cm</p>
                  <h5>Colore</h5>
                  <p><?php echo implode(', ', $product->format->color);  ?>.</p>
                  <h5>Utilizzo</h5>
                  <p><?php echo ($product->is_external) ? ('Adatto sia agli ambienti interni che esterni') : ('Adatto solo agli ambienti interni'); ?>.</p>
                  <p><?php echo ($product->is_washing_machine) ? ('Lavabile in lavatrice') : ('Non lavabile in lavatrice'); ?>.</p>
                <?php else : ?>
                  <h5>Materiale</h5>
                  <p><?php echo implode(', ', $product->material);  ?></p>
                  <h5>Età minima</h5>
                  <p class="age" ><?php echo $product->min_age?><span class="plus">+</span></p>
                  <h5>Tipologia</h5>
                  <p><?php echo $product->type?></p>
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