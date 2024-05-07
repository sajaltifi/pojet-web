<?php
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="produit.css">
</head>
<body>
    <header><img src="img/back.PNG"></header>
    <div class="tete">
    <a href="parapharmcie.php"><strong>Accueil</strong></a>
      <a href="produits.php"><strong>Nos produits</strong></a>
      <a href="sign in.php"><strong>Mon compte</strong></a>
      <a href="conseil.php"><strong>Nos conseils</strong> </a>
      <a href="test contact.php"><strong>Contact</strong></a>
      <a href="a propos.php"><strong>A propos</strong></a>
    </div>
    <div class="bordure"></div><br>
    <div class="ser">
        <img src="nv images/im3.jpg">
        <div class="t">
            <p><span style="color: blue;" >Lait de corps Hydratant Eclaircissant Rivaderm Hydra Clear </span><br>
             <ol start="1">
             <li>Hydrate, Eclaircie et Protége </li>

             <li>Sans Parabène - Hypoallergénique </li>  
            </ol>  
            </p>
            <p><span class="pr">40.000 TND</span></p>
            <p><span class="prix"><strong>36.000 TND</strong></span></p>
                <div class="quantite"></div>
                <button onclick="decrementQuantity()">-</button>
                <span id="quantity">1</span>
                <button onclick="incrementQuantity()">+</button>
                <div class="add-to-cart">
                <button onclick="addToCart()">Ajouter au panier</button></div>
            </div>
        </div>
    </div>
    <h2>Description du produit:</h2>
    <p><span style="font-size: larger;"> 🥥 Révélez l'éclat naturel de votre peau avec notre Lait de Corps HYDRA_CLEAR Hydratant Éclaircissant à la Noix de Coco, Beurre de Karité et Vitamine E ! 🌟💧🌿 Enrichi d'ingrédients nourrissants tels que l'huile de noix de coco, le beurre de karité et la vitamine E, notre lait corporel apporte une hydratation intense tout en aidant à éclaircir et à uniformiser votre teint.🥥 Plongez dans l'arôme exotique de la noix de coco et savourez la douceur du beurre de karité pour une expérience sensorielle ultime à chaque application.💧 Notre formule légère est rapidement absorbée par la peau, la laissant douce, souple et éclatante de santé.</span></p>    

    <script>
        function addToCart() {
            var quantity = document.getElementById("quantity").textContent;
            alert(quantity + " élement(s) ajouté au panier ");
        }

        function incrementQuantity() {
            var quantityElement = document.getElementById("quantity");
            var quantity = parseInt(quantityElement.textContent);
            quantityElement.textContent = quantity + 1;
        }

        function decrementQuantity() {
            var quantityElement = document.getElementById("quantity");
            var quantity = parseInt(quantityElement.textContent);
            if (quantity > 1) {
                quantityElement.textContent = quantity - 1;
            }
        }
    </script>
</body>
</html>
