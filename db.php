<?php
require_once __DIR__ . '/Models/Category.php';
require_once __DIR__ . '/Models/Product.php';
require_once __DIR__ . '/Models/Food.php';
require_once __DIR__ . '/Models/Format.php';
require_once __DIR__ . '/Models/Kennel.php';
require_once __DIR__ . '/Models/Toy.php';

$product_1 = new Food(175, 'Crocchette All Breeds Salmone e Riso', 'Monge', new Category('cane', 'fa-solid fa-dog'), 59.99, true, 12, [ 'salmone disidratato 26%', 'salmone fresco 10%', 'riso 15%', 'polpa di barbabietola essiccata', 'lievito di birra', 'olio di salmone', 'proteine animali idrolizzate (fegato)', 'sostanze minerali', 'prodotti del lievito'], 'crocchette', 'Adult');
$product_1->set_image('https://arcaplanet.vtexassets.com/arquivos/ids/270797/Monge-All-Breeds-Adult-Salmone-e-Riso-12Kg.jpg?v=1756771017');


$product_2 = new Food(176, 'Crocchette Mini Puppy', 'Royal Canin', new Category('cane', 'fa-solid fa-dog'), 34.99, true, 4, ['Proteine di pollame disidratate', 'riso', 'grassi animali', 'proteine vegetali isolate', 'mais', 'polpa di barbabietola', 'farina di mais'], 'secco', 'Puppy');
$product_2->set_image('https://arcaplanet.vtexassets.com/arquivos/ids/271923/MINI_Puppy.jpg?v=1757240437');

$product_3 = new Food(178, 'Latta Maintenance Adult Medium&Maxi', 'Natural Trainer', new Category('cane', 'fa-solid fa-dog' ) , 2.79, false, 0.4, ['Pollo 16%' , 'suino' , 'fegato di suino' , 'carote' , 'riso' , 'sostanze minerali' , 'olio di girasole' , 'farina di riso fermentato' , 'estratto secco di radici di cicoria (fonte di inulina)'], 'umido', 'Senior');
$product_3->set_image('https://arcaplanet.vtexassets.com/arquivos/ids/250269/trainer-natural-cane-adult-medium-maxi-pollo-e-riso.jpg?v=1757255753');

$product_4 = new Food(179, 'Crocchette Cat Sterilized Salmone', 'Ultima', new Category('gatto', 'fa-solid fa-cat'), 37.99, true, 7.5, [ 'salmone (15%)', 'mais', 'proteine disidratate di pollame', 'grano', 'proteine disidratate di carne di maiale', 'farina di glutine di mais', 'orzo 4%','proteine animali idrolizzate','polpa di barbabietola', 'grassi animali', 'fibra vegetale', 'sale'], 'secco', 'Adult');
$product_4->set_image('https://arcaplanet.vtexassets.com/arquivos/ids/261404/salmone.jpg?v=1757253737');

$product_5 = new Food(180, 'Virtus Cat Adult Natural Tonno', 'Virtus', new Category('gatto', 'fa-solid fa-cat'), 1.99, true, 0.150, ['Tonno 74%', 'Riso 2%', 'proteina grezza 17%', 'fibre grezze 0,1%', 'grassi grezzi 0,5%', 'ceneri grezze 0,9%', 'umidità 79%'], 'umido', 'Senior');
$product_4->set_image('https://arcaplanet.vtexassets.com/arquivos/ids/272309/virtus-cat-nature-atlantic-formula-multipack.jpg?v=1757251984');

var_dump($product_1);
var_dump($product_2);
var_dump($product_3);
var_dump($product_4);
var_dump($product_5);
?>