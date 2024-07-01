@extends('masterCart')

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

@section('cart')
<main>
    <div class="container" style="font-family: 'Playwrite DE Grund', cursive;">
        <h1>Your Shopping Cart Is Empty</h1>
        <p>Browse the store categories or search for your product</p>
        <a href="{{ route('home') }}"><Button class="go-back">Voltar para o site</Button></a>

    </div> 
</main>
@endsection