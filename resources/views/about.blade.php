@extends('master')
@section('title','About')
@section('content')
        <!-- Page Header-->
        <header class="masthead" style="background-image: url({{ asset('assets/img/web.jpeg') }})">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="page-heading">
                            <h1>Sur Moi</h1>
                            <span class="subheading">C'est ce que je fais</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main Content-->
        <main class="mb-4">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <p>Tout au long de mon parcours académique, j'ai eu l'occasion de travailler sur divers projets nécessitant une compréhension globale du processus de développement Web. Cela inclut non seulement la création d'interfaces utilisateur, mais également le développement de fonctionnalités côté serveur pour garantir une intégration transparente entre le front-end et le back-end.</p>
                        <p>En termes de développement front-end, j'ai une expérience pratique avec HTML, CSS et JavaScript. Je suis adepte de la création d'interfaces utilisateur réactives et visuellement attrayantes qui améliorent l'expérience utilisateur globale. Qu'il s'agisse d'exploiter les derniers frameworks comme React ou Vue.js ou de travailler avec Vanilla JavaScript, je m'engage à fournir des interfaces transparentes et conviviales.</p>
                        <p>Côté back-end, j'ai perfectionné mes compétences dans des langages tels que Python et Node.js. Mon parcours académique et mes projets pratiques m'ont permis d'acquérir les connaissances nécessaires pour concevoir et mettre en œuvre une logique côté serveur robuste. Je maîtrise bien la création d'API RESTful et j'ai de l'expérience avec les systèmes de gestion de bases de données comme MySQL et MongoDB.</p>
                    </div>
                </div>
            </div>
        </main>
@endsection