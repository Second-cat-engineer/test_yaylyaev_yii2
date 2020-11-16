<?php
//debug($brands);
// Позволяет выполнить ленивую загрузку, посчитает количество товаров в данной категории
// фактически тут будет несколько sql запросов выполняться, если товаров в этой категории 15 то 15  sql запросов
// в противовес ленивой загрузке есть жадная загрузка
//echo count($brand->products);
//echo count($brand[0]->products); //для жадной загрузки
//debug($brand);

foreach ($brands as $brand) {
    echo '<ul>';
    echo '<li>' . $brand->brand . '</li>';
    $products = $brand->products;
    foreach ($products as $product) {
        echo '<ul>';
        echo '<li>' . $product->title . '</li>';
        echo '</ul>';
    }
    echo '</ul>';
}