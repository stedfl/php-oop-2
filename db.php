<?php
require_once __DIR__ . '/Models/Category.php';
require_once __DIR__ . '/Models/Product.php';
require_once __DIR__ . '/Models/Food.php';
require_once __DIR__ . '/Models/Format.php';
require_once __DIR__ . '/Models/Kennel.php';
require_once __DIR__ . '/Models/Toy.php';

$product_1 = new Food(175, 'Crocchette All Breeds Salmone e Riso', 'Monge', new Category('cane', 'fa-solid fa-dog'), 59.99, 300, 12, [ 'salmone disidratato 26%', 'salmone fresco 10%', 'riso 15%', 'polpa di barbabietola essiccata', 'lievito di birra', 'olio di salmone', 'proteine animali idrolizzate (fegato)', 'sostanze minerali', 'prodotti del lievito'], 'crocchette', 'Adult');
$product_1->set_image('https://arcaplanet.vtexassets.com/arquivos/ids/270797/Monge-All-Breeds-Adult-Salmone-e-Riso-12Kg.jpg?v=1756771017');


$product_2 = new Food(176, 'Crocchette Mini Puppy', 'Royal Canin', new Category('cane', 'fa-solid fa-dog'), 34.99, 157, 4, ['Proteine di pollame disidratate', 'riso', 'grassi animali', 'proteine vegetali isolate', 'mais', 'polpa di barbabietola', 'farina di mais'], 'secco', 'Puppy');
$product_2->set_image('https://arcaplanet.vtexassets.com/arquivos/ids/271923/MINI_Puppy.jpg?v=1757240437');

$product_3 = new Food(178, 'Latta Maintenance Adult Medium&Maxi', 'Natural Trainer', new Category('cane', 'fa-solid fa-dog' ) , 2.79, 0, 0.4, ['Pollo 16%' , 'suino' , 'fegato di suino' , 'carote' , 'riso' , 'sostanze minerali' , 'olio di girasole' , 'farina di riso fermentato' , 'estratto secco di radici di cicoria (fonte di inulina)'], 'umido', 'Senior');
$product_3->set_image('https://arcaplanet.vtexassets.com/arquivos/ids/250269/trainer-natural-cane-adult-medium-maxi-pollo-e-riso.jpg?v=1757255753');

$product_4 = new Food(179, 'Crocchette Cat Sterilized Salmone', 'Ultima', new Category('gatto', 'fa-solid fa-cat'), 37.99, 179, 7.5, [ 'salmone (15%)', 'mais', 'proteine disidratate di pollame', 'grano', 'proteine disidratate di carne di maiale', 'farina di glutine di mais', 'orzo 4%','proteine animali idrolizzate','polpa di barbabietola', 'grassi animali', 'fibra vegetale', 'sale'], 'secco', 'Adult');
$product_4->set_image('https://arcaplanet.vtexassets.com/arquivos/ids/261404/salmone.jpg?v=1757253737');

$product_5 = new Food(180, 'Virtus Cat Adult Natural Tonno', 'Virtus', new Category('gatto', 'fa-solid fa-cat'), 1.99, 50, 0.150, ['Tonno 74%', 'Riso 2%', 'proteina grezza 17%', 'fibre grezze 0,1%', 'grassi grezzi 0,5%', 'ceneri grezze 0,9%', 'umidità 79%'], 'umido', 'Senior');
$product_5->set_image('https://arcaplanet.vtexassets.com/arquivos/ids/272309/virtus-cat-nature-atlantic-formula-multipack.jpg?v=1757251984');

$product_6 = new Kennel(201, 'Cuccia Rettangolare Calliope Petrolio', 'Lovedi', new Category('cane', 'fa-solid fa-dog'), 70.99, 20, new Format('XL', 84, 115, 24, ['petrolio']), false, true);
$product_6->set_image('https://arcaplanet.vtexassets.com/arquivos/ids/269648/lovedi-cuccia-rettangolare-calliope-petrolio.jpg?v=1757034987');

$product_7 = new Kennel(202, 'Cuccia Rettangolare Zig Zag', 'Luna&Teo', new Category('cane', 'fa-solid fa-dog'), 39.99, 0, new Format('S', 45, 60, 19, ['beige', 'marrone']), false, false );
$product_7->set_image('https://arcaplanet.vtexassets.com/arquivos/ids/273257/LUNA-TEO-CUCCIA-RETT.-CM.-60-ZIG-ZAG.jpg?v=1757207617');

$product_8 = new Kennel(203, 'Cuccia Igloo Mimì per Gatto', 'Trixie', new Category('gatto', 'fa-solid fa-cat'), 38.49, 45, new Format('S', 43, 35, 35, ['grigio']), true, true);
$product_8->set_image('https://arcaplanet.vtexassets.com/arquivos/ids/272899/trixie-cuccia-per-gatto-grotta.jpg?v=1757207434');

$product_9 = new Kennel(204, 'Cuccia Ciambella Pelosa Rosa', null, new Category('gatto', 'fa-solid fa-cat'), 29.90, 13, new Format('Unix', 45, null, null, ['rosa']), true, false);
$product_9->set_image('https://arcaplanet.vtexassets.com/arquivos/ids/277240/luna-e-teo-cuccia-pelosa-color-rosa.jpg?v=1757251643');




var_dump($product_1);
var_dump($product_2);
var_dump($product_3);
var_dump($product_4);
var_dump($product_5);
var_dump($product_6);
var_dump($product_7);
var_dump($product_8);
var_dump($product_9);
?>