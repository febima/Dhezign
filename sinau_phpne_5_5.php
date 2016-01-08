<?php

$data = [
    "tags" => [
        "type" => "array",
        "items"=> [
            "type" => "string"
        ],
    ], 
];
?>

<?php
    $ku = [
            "ku" => "http//",
            "title" => "product",
            "type" => "array",
            "item" => [
                "title" => "product",
                "type" => "object",
                "properties" => [
                    "id" => [
                        "description" => "the unique identifier for a product",
                        "type" => "number"
                    ],
                    "name" => [
                        "type" => "string"
                    ],
                    "price" => [
                        "type" => "number",
                        "minimum" => 0,
                        "exclusiveMinimun" => true
                    ],
                    "tags" => [
                        "type" => "array",
                        "items" => [
                            "type" => "string"
                        ],
                        "minItems" => 1,
                        "uniqueItems" => true
                    ],
                    "demensions" => [
                        "type" => "object",
                        "properties" => [
                            "length" => ["type" => "number"],
                            "width"  => ["type" => "number"],
                            "height" => ["type" => "number"]
                        ],
                        "required" => ["length","width","height"]
                    ],
                    "warehouseLocation" => [
                        "description" => "coordinates of the warehouse width the product",
                        "ref" => "http//"
                    ]
                ],
                "required" => ["id","name","price"]
            ]
    ];
?>
<?php
$cobaarray =[
    "id" => 2,
    "name" => "an ice sculpture",
    "price" => 12.50,
    "tags" => ["cold","ice"],
    "demensions" => [
        "length" => 7.0,
        "width" => 12.0,
        "height" => 9.5
    ],
    "id" => 3,
    "name" => "a blue mouse",
    "price" => 12.00,
    "dimensions" => [
        "length" => 3.0,
        "width" => 2.9,
        "height" => 2.0
    ],
    "warehouseLocation" => [
        "latitude" => 65.9,
        "longitude" => -87.0
    ]
]
?>
<?php
    $coba = [
        [
            "title" => "product",
            "description" => "a product.... . . . ",
            "type" => "object",
            "price" => "1000",
            "color" => ["red", "green"],
            "required" => ["id","name","price"],
        ],
        [
            "title" => "product 2",
            "description" => "a product 2.... . . . ",
            "type" => "object",
            "price" => "1000",
            "color" => ["red", "green"],
            "required" => ["id","name","price"],
        ],
    ];
    // var_dump($coba);
    // exit;
?>

<table>
    <tr>
        <th>Title</th>
        <th>Description</th>
        <th>Type</th>
        <th>Price</th>
        <th>Color</th>
        <th>Required</th>
    </tr>
    <tr>
        <?php foreach ($coba as $data): ?>
            <?php var_dump($data); ?>
             <tr>
                <td><?php echo $data['title']; ?></td>
                <td><?php echo $data['description']; ?></td>
                <td><?php echo $data['type']; ?></td>
                <td><?php echo $data['price']; ?></td>
                <td><?php echo implode('<td></td>',$data['color'])?></td>
                <td><?php echo implode('<td></td>',$data['required'])?></td>
            </tr> 
        <?php endforeach ?>
    </tr>
</table>
<?php foreach ($coba as $data): ?>
            <fieldset>
                <legend> <?php echo $data['title']; ?> </legend>
                <?php echo $data['description']; ?><br/>
                <?php echo $data['type']; ?><br/>
                <?php echo $data['price']; ?><br/>
            </fieldset>
        <?php endforeach ?>