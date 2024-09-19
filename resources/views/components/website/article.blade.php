@props([
    'nom_article',
    'prix_ancien',
    'prix_actuel',
    'image_article1',
    'image_article2',
    'categorie_article',
])

<!-- Single Product -->
<div class="col-12 col-sm-6 col-lg-4">
    <div class="single-product-wrapper">
        <!-- Product Image -->
        <div class="product-img">
            <img src="{{asset('img/product-img/'.$image_article1)}}" alt="">
            <!-- Hover Thumb -->
            <img class="hover-img" src="{{asset('img/product-img/'.$image_article2)}}" alt="">

            <!-- Product Badge -->

            <!-- Favourite -->
            <div class="product-favourite">
                <a href="#" class="favme fa fa-heart"></a>
            </div>
        </div>

        <!-- Product Description -->
        <div class="product-description">
            <span>{{$categorie_article}}</span>
            <a href="single-product-details.html">
            <h6>{{$nom_article}} </h6>
            </a>
            <p class="product-price"><span class="old-price">{{$prix_ancien }}</span>{{ $prix_actuel }}</p>

            <!-- Hover Content -->
            <div class="hover-content">
                <!-- Add to Cart -->
                <div class="add-to-cart-btn">
                    <a href="#" class="btn essence-btn">Add to Cart</a>
                </div>
            </div>
        </div>
    </div>
</div>
