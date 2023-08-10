<?php
$rifle_data = [
    0 => [
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
            'scope_pos_x' => 0,
            'scope_pos_y' => 210,
            'silencer_pos_x' => 300,
            'silencer_pos_y' => 203,
            'grip_pos_x' => 0,
            'grip_pos_y' => 0,
            'stock_pos_x' => 0,
            'stock_pos_y' => 0,
            'magazine_pos_x' => 0,
            'magazine_pos_y' => 0,
            'rail_attachment_pos_x' => 0,
            'rail_attachment_pos_y' => 0,
        ],
    ],
];
$optics_data = [
        0 => [
            'id' => 0,
            'name' => 'Holo Visier',
            'model_data' => [
                'category' => 'holo & reddot',
                'price' => 50.99,
                'producer' => 'eotech',
                'link' => '',
            ],
            'image_data' => [
                'image_url' => './img/attachments/img_000002.png',
                'height' => 50,
            ],
        ],
        1 => [
            'id' => 1,
            'name' => 'Sniper Scope',
            'model_data' => [
                'category' => 'sniper scope',
                'price' => 123.45,
                'producer' => '',
                'link' => '',
            ],
            'image_data' => [
                'image_url' => '',
                'height' => 0,
            ],
        ],
];
$muzzle_data = [
    0 => [
        'id' => 0,
        'name' => 'Schalldämpfer',
        'model_data' => [
            'category' => 'silencer',
            'price' => 0,
            'producer' => '',
            'link' => '',
        ],
        'image_data' => [
            'image_url' => './img/attachments/img_000003.png',
            'height' => 40,
        ],
    ],
];
$stock_data = [
    0 => [
        'id' => 0,
        'name' => 'Standart Schaft',
        'model_data' => [
            'category' => '',
            'price' => 0,
            'producer' => '',
            'link' => '',
        ],
        'image_data' => [
            'image_url' => '',
            'height' => 0,
        ],
    ]
];
$mag_data = [
    0 => [
        'id' => 0,
        'name' => 'Standart Magazin',
        'model_data' => [
            'category' => '',
            'price' => 0,
            'producer' => '',
            'link' => '',
        ],
        'image_data' => [
            'image_url' => '',
            'height' => 0,
        ],
    ]
];
$grip_data = [
    0 => [
        'id' => 0,
        'name' => 'Standart Griff',
        'model_data' => [
            'category' => '',
            'price' => 0,
            'producer' => '',
            'link' => '',
        ],
        'image_data' => [
            'image_url' => '',
            'height' => 0,
        ],
    ],
];
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/main.css">
</head>
<body>
<script type="application/javascript">
    function selectElement(id, valueToSelect) {
        let element = document.getElementById(id);
        element.value = valueToSelect;
    }

    function setActive(rifle_id, optic_id, muzzle_id, stock_id, mag_id, grip_id) {
        selectElement('rifle', rifle_id);
        selectElement('optic', optic_id);
        selectElement('muzzle', muzzle_id);
        selectElement('stock', stock_id);
        selectElement('mag', mag_id);
        selectElement('grip', grip_id);
    }
</script>

<h1 style="text-align: center">Airsoft Customizer</h1>
<h4 style="text-align: end">by <a href="https://linktr.ee/hexa.airsoft" style="text-decoration: none; color: white">hexa.airsoft</a></h4>
<br>
<div id="frame">
    <div id="menu">
        <form action="?show=1" method="post">
            Modell:
            <select class="form-select" id="rifle" name="rifle">
                <option value="-1">keine Auswahl</option>
                <?php
                foreach ($rifle_data as $rifle) {
                    echo '<option value="'.$rifle['id'].'">'.$rifle['model'].'</option>';
                }
                ?>
            </select>
            <hr>
            Optik:<br>
            <select class="form-select" id="optic" name="optic">
                <option value="-1">keine Auswahl</option>
                <?php
                foreach ($optics_data as $optic) {
                    echo '<option value="'.$optic['id'].'">'.$optic['name'].'</option>';
                }
                ?>
            </select>
            <hr>
            Mündung:<br>
            <select class="form-select" id="muzzle" name="muzzle">
                <option value="-1">keine Auswahl</option>
                <?php
                foreach ($muzzle_data as $muzzle) {
                    echo '<option value="'.$muzzle['id'].'">'.$muzzle['name'].'</option>';
                }
                ?>
            </select>
            <hr>
            Schaft:<br>
            <select class="form-select " id="stock" name="stock">
                <option value="-1">keine Auswahl</option>
                <?php
                foreach ($stock_data as $stock) {
                    echo '<option value="'.$stock['id'].'">'.$stock['name'].'</option>';
                }
                ?>
            </select>
            <hr>
            Magazin:<br>
            <select class="form-select" id="mag" name="mag">
                <option value="-1">keine Auswahl</option>
                <?php
                foreach ($mag_data as $mag) {
                    echo '<option value="'.$mag['id'].'">'.$mag['name'].'</option>';
                }
                ?>
            </select>
            <hr>
            Frontgriff:<br>
            <select class="form-select" id="grip" name="grip">
                <option value="-1">keine Auswahl</option>
                <?php
                foreach ($grip_data as $grip) {
                    echo '<option value="'.$grip['id'].'">'.$grip['name'].'</option>';
                }
                ?>
            </select>
            <br><br>
            <input class="btn btn-outline-warning" type="submit" value="Anzeigen">
        </form>
    </div>
    <div id="display">
        <br><br><br><br>
        <?php
        if(isset($_GET['show'])) {
            $rifle = $_POST['rifle'];
            $optic = $_POST['optic'];
            $muzzle = $_POST['muzzle'];
            $stock = $_POST['stock'];
            $mag = $_POST['mag'];
            $grip = $_POST['grip'];

            echo '<script type="application/javascript"> setActive('.$rifle.', '.$optic.', '.$muzzle.', '.$stock.', '.$mag.', '.$grip.')</script>';

            if ($rifle != -1) {
                echo '<img src="'.$rifle_data[$rifle]['image_data']['image_url'].'" style="position: relative; z-index: 100;">';
                echo '<br>';
                if ($optic != -1) echo '<img src="'.$optics_data[$optic]['image_data']['image_url'].'" height="'.$optics_data[$optic]['image_data']['height'].'" style="position: relative; z-index: 150; bottom: '.$rifle_data[$rifle]['image_data']['scope_pos_y'].'px; right: '.$rifle_data[$rifle]['image_data']['scope_pos_x'].'px;">';
                echo '<br>';
                if ($muzzle != -1)echo '<img src="'.$muzzle_data[$muzzle]['image_data']['image_url'].'" height="'.$muzzle_data[$muzzle]['image_data']['height'].'" style="position: relative; z-index: 150; bottom: '.$rifle_data[$rifle]['image_data']['silencer_pos_y'].'px; right: '.$rifle_data[$rifle]['image_data']['silencer_pos_x'].'px;">';
                echo '<br>';
                if ($stock != -1)echo '<img src="'.$stock_data[$stock]['image_data']['image_url'].'" height="'.$stock_data[$stock]['image_data']['height'].'" style="position: relative; z-index: 150; bottom: '.$rifle_data[$rifle]['image_data']['silencer_pos_y'].'px; right: '.$rifle_data[$rifle]['image_data']['silencer_pos_x'].'px;">';
                echo '<br>';
                if ($mag != -1)echo '<img src="'.$mag_data[$mag]['image_data']['image_url'].'" height="'.$mag_data[$mag]['image_data']['height'].'" style="position: relative; z-index: 150; bottom: '.$rifle_data[$rifle]['image_data']['silencer_pos_y'].'px; right: '.$rifle_data[$rifle]['image_data']['silencer_pos_x'].'px;">';
                echo '<br>';
                if ($grip != -1)echo '<img src="'.$grip_data[$grip]['image_data']['image_url'].'" height="'.$grip_data[$grip]['image_data']['height'].'" style="position: relative; z-index: 150; bottom: '.$rifle_data[$rifle]['image_data']['silencer_pos_y'].'px; right: '.$rifle_data[$rifle]['image_data']['silencer_pos_x'].'px;">';
            }
        }
        ?>
     </div>
    <br>
    <div>
        Übersicht:<br>
        .....
    </div>
</div>
</body>
</html>