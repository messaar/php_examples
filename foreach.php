<?php
// Многомерный масив для примера
$images = [	
	["image_url" => 'image0.png', "image_id" => '0'],
	["image_url" => 'image1.png', "image_id" => '1'],
	["image_url" => 'image2.png', "image_id" => '2']
];

// Перебор масива
// $images - любоц многомерный или простой масив
// $item - простой масив из многомерного масива содержайщий данные текущего перебора
foreach ($images as $item)
{	
	echo 'ID картинки: '.$item['image_id']."<br>\r\n";
	echo 'URL картинки: '.$item['image_url']."<br>\r\n";
}
?>
