<?php
debug($brand);
// Позволяет выполнить ленивую загрузку, посчитает количество товаров в данной категории
echo count($brand->products);
debug($brand);
