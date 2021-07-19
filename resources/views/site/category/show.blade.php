@extends('layouts.site')

@section('content')
<header class="common-header">
    <div class="header-wrapper">
        <h1 class="title-large">With apples drink teriyaki. </h1>
    </div>
    <div class="pattern__header"></div>
</header>

<div class="products__general main-wrapper">

    <aside class="product__selected">
        <article class="card__product">
            <a href="products-detail.php">
                <div class="card__cover">
                    <img src="{{asset($category->image)}}" style="width: 322px;">
                </div>
                <header class="card__product-header">
                    <h2 class="title-medium">{{$category->name}}</h2>
                    <p>{{$category->description}}</p>
                </header>
            </a>
        </article>
        <a class="back-to-products" href="{{route('site.products')}}">Voltar</a>
    </aside>

    <section class="products__list">
        <header>
            <h2 class="title-large">Cum quadra ridetis, omnes visuses imitari regius, brevis brodiumes. </h2>
            <p>Ususs favere! Tabes grandis palus est. Sunt mensaes magicae fatalis, placidus genetrixes. Cum musa unda,
                omnes amores attrahendam pius, noster particulaes. </p>
        </header>
        @foreach($category->products as $product)
        <article class="product">
            <a class="clickable-area" href="javascript:;">
                <header class="product__header">
                    <h3 class="title-medium">{{$product->name}}</h3>
                    <!-- Tooggle item -->
                    <span class="collapse__open"></span>
                </header>
                @if($product->exclusive)
                <img class="exclusive__label" src="{{asset('images/Exclusivo-label.png')}}" alt="Etiqueta de
                        produto
                        exclusivo">
                @endif
            </a>

            <section class="product__content">

                <div class="product__desciption">
                    {{$product->description}}
                </div>

            </section>
        </article>
        @endforeach
    </section>
</div>
@endsection