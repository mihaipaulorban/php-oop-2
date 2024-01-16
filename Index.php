<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce Prodotti Animali</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1>Pet Shop</h1>
    </header>
    <div class="container mt-4">
        <div class="row justify-content-center">

            <?php
            // Inclusione file
            require_once 'Category.php';
            require_once 'Food.php';
            require_once 'Toy.php';
            require_once 'Kennel.php';
            require_once 'functions.php';

            // Aggiungo le categorie di cani e gatti
            $categoryDog = new Category("Cani");
            $categoryCat = new Category("Gatti");

            // Prodotti
            $dogFood = new Food("Croccantini per Cani", 20.99, $categoryDog, "https://nypost.com/wp-content/uploads/sites/2/2020/12/dog-disgusted-face.jpg?quality=75&strip=all&w=744");
            $catFood = new Food("Croccantini per Gatti", 18.99, $categoryCat, "https://i.guim.co.uk/img/media/1d658f963ca57eba6cddc59505e692465eff64e5/0_217_6517_3910/master/6517.jpg?width=1200&height=1200&quality=85&auto=format&fit=crop&s=9a9e00a417c417d3c14aee484a6c6bef");
            $dogToy = new Toy("Palla per Cani", 9.99, $categoryDog, "https://i.etsystatic.com/12823679/r/il/47a80f/3837780560/il_fullxfull.3837780560_pqwv.jpg");
            $catToy = new Toy("Giochi per Gatti", 11.99, $categoryCat, "https://img.kwcdn.com/product/Fancyalgo/VirtualModelMatting/0f55352c9f233a75308668b0081c9294.jpg");
            $dogKennel = new Kennel("Cuccia per Cani", 55.99, $categoryDog, "https://5.imimg.com/data5/SELLER/Default/2023/8/339222687/UG/HL/BL/13910362/dog-kennel.png");
            $catKennel = new Kennel("Cuccia per Gatti", 255.99, $categoryCat, "https://m.media-amazon.com/images/I/91nTJrSrDmL.jpg");
            $dogCollar = new Toy("Collare per Cani", 15.99, $categoryDog, "https://assets.hermes.cn/is/image/hermesproduct/punch-dog-collar--800597EJ89-worn-1-0-0-800-800_g.jpg");
            $catCollar = new Toy("Collare per Gatti", 13.99, $categoryCat, "https://www.birdsbesafe.com/cdn/shop/files/Reflective-Full-Stretch-Collar-BIrdsbesafe-2.jpg?v=1685070406&width=1024");
            $dogShampoo = new Food("Shampoo per Cani", 19.99, $categoryDog, "https://www.4-legger.com/cdn/shop/files/4-legger-food-grade-usda-organic-dog-shampoo-organic-lemongrass-and-aloe-hypoallergenic-dog-shampoo-41062781911271.jpg?v=1693847977&width=1080");
            $catShampoo = new Food("Shampoo per Gatti", 17.99, $categoryCat, "https://theblissfulcat.com/cdn/shop/products/GT_KITTEN_TUB_4-8-16.jpg?v=1644697148");
            $dogBowl = new Kennel("Ciotola per Cani", 12.99, $categoryDog, "https://deindog.com/wp-content/uploads/2022/04/Terra-Hundenapf-3.png");
            $catBowl = new Kennel("Ciotola per Gatti", 10.99, $categoryCat, "https://cdn-cnbpg.nitrocdn.com/ePUhlDYyXEEYZtvBXHTnItSitmyXhPJP/assets/images/optimized/rev-06708e2/danishdesignco.com.sg/wp-content/uploads/2021/03/1-6-1.jpg");

            // Array dei prodotti per il foreach
            $products = [
                $dogFood, $catFood, $dogToy, $catToy, $dogKennel, $catKennel,
                $dogCollar, $catCollar, $dogShampoo, $catShampoo, $dogBowl, $catBowl
            ];

            // Stampa le card dei prodotti
            renderProductCards($products);
            ?>

        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kqtXAGOV3sYlL05p8QqNm0ncCI6n3O6+Yw2ov5CJ4tJ5FqHb7Ez9FyGfjtD2t7OQ" crossorigin="anonymous"></script>
</body>

</html>