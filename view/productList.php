<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des produits</title>
    <style>
        .product {
            border: 1px solid #ccc;
            padding: 15px;
            margin: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .product-title {
            font-weight: bold;
            font-size: 24px;
            margin-bottom: 10px;
        }

        .product-price {
            color: green;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <?php foreach ($products as $product): ?>
        <div class="product">
            <div class="product-title">
                <?php echo htmlspecialchars($product['nom']); ?>
            </div>
            <div class="product-price">
                Prix: €
                <?php echo number_format($product['prix'], 2); ?>
            </div>
            <div class="product-description">
                <?php echo nl2br(htmlspecialchars($product['description'])); ?>
            </div>
            <div class="product-availability">
                Disponibilité :
                <?php echo $product['disponible'] ? 'Disponible' : 'Indisponible'; ?>
            </div>
        </div>
    <?php endforeach; ?>
</body>

</html>