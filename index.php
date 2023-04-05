<?php
$rifle_data = [
    'id' => 0,
    'model' => 'HK416',
    'model_data' => [
        'producer' => 'Heckler und Koch',
        'barrel_length' => '',
        'material' => 'Kunststoff',
        'energy' => 0.5,
        'energy_source' => 'electric',
        'power_supply' => '7.4',
        'color' => 'black',
        'link' => '',
    ],
    'image_data' => [
        'image_url' => './img/rifle/img_000001.png',
        'scope_pos_x' => -330,
        'scope_pos_y' => -155,
        'silencer_pos_x' => -740,
        'silencer_pos_y' => -115,
        'grip_pos_x' => 0,
        'grip_pos_y' => 0,
        'stock_pos_x' => 0,
        'stock_pos_y' => 0,
        'magazine_pos_x' => 0,
        'magazine_pos_y' => 0,
        'rail_attachment_pos_x' => 0,
        'rail_attachment_pos_y' => 0,
    ],
];
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="./css/main.css">
</head>
<body>
<br><br><br><br><br><br>
<div style="text-align: center">
    <img src="<?= $rifle_data['image_data']['image_url']?>" style="position: relative; z-index: 1;">
    <img src="img/attachments/img_000002.png" height="50px" style="position: relative; z-index: 2; top: <?= $rifle_data['image_data']['scope_pos_y']?>px; left: <?= $rifle_data['image_data']['scope_pos_x']?>px;">
    <img src="img/attachments/img_000003.png" height="40px" style="position: relative; z-index: 2; top: <?= $rifle_data['image_data']['silencer_pos_y']?>px; left: <?= $rifle_data['image_data']['silencer_pos_x']?>px;">
</div>
<br><br>
<?php var_dump($rifle_data);?>
</body>
</html>