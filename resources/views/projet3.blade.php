@extends('master')
@section('title','Post')
@section('content')
        <!-- Page Header-->
        <header class="masthead" style="background-image: url({{ asset('assets/img/post.webp') }})">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="post-heading">
                            <h1>Tendances du développement Web en 2024</h1>
                            <h2 class="subheading">Voir les cheminements possibles pour le développement de carrière</h2>
                            <span class="meta">
                                Posté par
                                <a href="#!">Zele</a>
                                le 18 janvier 2024
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Post Content-->
        <article class="mb-4">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <h2 class="section-heading">Assistant vocal</h2>
                        <p>Si vous possédez un iPhone ou une Alexa, vous avez déjà parlé à un assistant vocal et vous savez qu'ils sont assez intelligents et utiles. En raison de leur facilité d'utilisation et de leur prix abordable, ils deviennent de plus en plus populaires auprès des entreprises qui souhaitent optimiser l'expérience de recherche des utilisateurs et fournir efficacement une assistance supplémentaire sans même que les utilisateurs touchent leur clavier.</p>
                        <h2 class="section-heading">Intelligence artificielle</h2>
                        <p>Avant l’arrivée de services comme ChatGPT, l’intelligence artificielle était quelque chose que nous ne voyions que dans les films, du moins le pensions-nous. L'intelligence artificielle, aux côtés de l'apprentissage automatique, a pris toute sa vigueur ces dernières années, permettant aux logiciels d'exécuter des fonctions semblables à celles des humains et de façonner la façon dont nous interagissons avec nos appareils. Il a déjà eu une forte influence sur les médias sociaux, les sites Web et les applications ; les développeurs Web devraient continuer à les intégrer dans leurs conceptions.</p>
                        <h2 class="section-heading">Technologie blockchain</h2>
                        <p>La blockchain a peut-être commencé avec la crypto-monnaie, mais depuis sa création, elle a évolué pour être utilisée dans des applications financières décentralisées, des contrats intelligents et des jetons non fongibles. Parce qu'elle est immuable, cette technologie garantit que les bases de données et les informations sont sûres et impénétrables, c'est pourquoi à l'heure où les cyberattaques sont fréquentes, cette technologie est nécessaire pour les projets de développement web.</p>
                    </div>
                </div>
            </div>
        </article>
@endsection