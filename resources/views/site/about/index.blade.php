@extends('layouts.site')

@section('content')
<div class="green-background">
    <div class="half-green-background"></div>

    <div class="main-wrapper split-content">
        <!-- Conteudo sobre a empresa -->
        <section class="about__content">
            <section class="about__history">
                <h1 class="display-medium">Cum era ire, omnes fermiumes anhelare clemens, flavum caculaes.</h1>
                <p><strong>Brema :</strong>Eheu, barbatus consilium! Rumor emeritis mensa est. Sunt lunaes imitari
                    talis, flavum eraes. Sunt lumenes carpseris talis, superbus capioes. </p>
                <p><strong>Sala </strong>Naviss sunt classiss de altus racana. Cum frondator manducare, omnes cottaes
                    quaestio festus, salvus adiuratores. </p>
                <p><strong>Antverpia :</strong>Cur axona nocere? Cum species favere, omnes solitudoes perdere bi-color,
                    peritus vortexes. Est albus silva, cesaris.</p>
            </section>
            <p>One must emerge the explosion of the conclusion in order to meet the wind of inner uniqueness.</p>

            <section class="about__clients">
                <div class="about__clients__logos">
                    <img src="{{asset('images/logo-5.svg')}}" alt="">
                    <img src="{{asset('images/logo-6.svg')}}" alt="">
                    <img src="{{asset('images/logo-7.svg')}}" alt="">
                    <img src="{{asset('images/logo-8.svg')}}" alt="">
                </div>
            </section>
        </section>

        <!-- Imagem valores da empresa -->
        <section class="about__img__values">
            <img src="{{asset('images/Pilares.svg')}}" alt="">
        </section>
    </div>
</div>
@endsection