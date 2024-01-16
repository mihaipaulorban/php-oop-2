<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce Prodotti Animali</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="row">

            <?php
            require_once 'Category.php';
            require_once 'Food.php';
            require_once 'Toy.php';
            require_once 'Kennel.php';
            require_once 'functions.php';

            $categoryDog = new Category("Cani");
            $categoryCat = new Category("Gatti");

            // Prodotti
            $dogFood = new Food("Croccantini per Cani", 20.99, $categoryDog, "https://nypost.com/wp-content/uploads/sites/2/2020/12/dog-disgusted-face.jpg?quality=75&strip=all&w=744");
            $catFood = new Food("Croccantini per Gatti", 18.99, $categoryCat, "https://i.guim.co.uk/img/media/1d658f963ca57eba6cddc59505e692465eff64e5/0_217_6517_3910/master/6517.jpg?width=1200&height=1200&quality=85&auto=format&fit=crop&s=9a9e00a417c417d3c14aee484a6c6bef");
            $dogToy = new Toy("Palla per Cani", 9.99, $categoryDog, "https://i.etsystatic.com/12823679/r/il/47a80f/3837780560/il_fullxfull.3837780560_pqwv.jpg");
            $catToy = new Toy("Giochi per Gatti", 11.99, $categoryCat, "https://img.kwcdn.com/product/Fancyalgo/VirtualModelMatting/0f55352c9f233a75308668b0081c9294.jpg");
            $dogKennel = new Kennel("Cuccia per Cani", 55.99, $categoryDog, "https://5.imimg.com/data5/SELLER/Default/2023/8/339222687/UG/HL/BL/13910362/dog-kennel.png");
            $catKennel = new Kennel("Cuccia per Gatti", 255.99, $categoryCat, "https://m.media-amazon.com/images/I/91nTJrSrDmL.jpg");

            // Stampa le card dei prodotti
            renderProductCard($dogFood);
            renderProductCard($catFood);
            renderProductCard($dogToy);
            renderProductCard($catToy);
            renderProductCard($dogKennel);
            renderProductCard($catKennel);
            ?>

        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kqtXAGOV3sYlL05p8QqNm0ncCI6n3O6+Yw2ov5CJ4tJ5FqHb7Ez9FyGfjtD2t7OQ" crossorigin="anonymous"></script>
</body>

</html>