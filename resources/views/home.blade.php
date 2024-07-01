@extends('masterHome')

@section('menu')


<div class="menu">
    <div class="tech-trends">
        <a href="/" class="a1">
            <img src="{{ asset('assets/TechTrendsLogo.png') }}" alt="TechTrends Logo">
            <h1>TechTrends</h1>
        </a>
    </div>

    <div><a href="">Phones</a></div>
    
    <div><a href="">EarBuds</a></div>
    
    <div><a href="">Smart Watches</a></div>
    
    <div><a href="">Tablets</a></div>
    
    <div><a href="">Laptops</a></div>

    <form action="" method="post">
        <div class="search">
            <input type="text" name="search" id="search" placeholder="Search">
            <button type="submit" name="buscar">
                <img src="{{ asset('assets/MagnifyingGlass.png') }}" alt="Lupa">  
            </button>
        </div>
    </form>

        <div class="option-images">
            <a href=""><img src="{{ asset('assets/Heart.png') }}" alt="Minha Imagem"></a>
        </div>
        
        <div class="option-images">
            <a href="cart"><img src="{{ asset('assets/Cart.png') }}" alt="Minha Imagem"></a>
        </div>

</div>

@endsection

@section('products')
<main>
    <div class="container" style="font-family: 'Playwrite DE Grund', cursive;">
        <div class="h1s">
            <h1 class="h1-1">Trending.</h1>
            <h1 class="h1-2">Top Purchased this week</h1>
            
        </div>

        <div class="products">
            <div>
                <h1>Produto 1</h1>
                <p>A partir de R$ 6999,99</p>
            </div>

            <div>
                <h1>Produto 2</h1>
                <p>A partir de R$ 799,99</p>
            </div>

            <div>
                <h1>Produto 3</h1>
                <p>A partir de R$ 8999,99</p>
            </div>
        </div>
        

        <div class="h1s">
            <h1 class="h1-1">Gadgets.</h1>
            <h1 class="h1-2">Made especially for your favorite devices</h1>
        </div>
    </div> 
</main>
@endsection
