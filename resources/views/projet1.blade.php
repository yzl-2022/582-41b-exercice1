@extends('master')
@section('title','Post')
@section('content')
        <!-- Page Header-->
        <header class="masthead" style="background-image: url({{ asset('assets/img/post.webp') }})">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="post-heading">
                            <h1>Quelques règles de conception de l'interface utilisateur</h1>
                            <h2 class="subheading">Il est toujours utile d'avoir quelques conseils</h2>
                            <span class="meta">
                                Posté par
                                <a href="#!">Zele</a>
                                le 02 février 2024
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
                        <h2 class="section-heading">Restez cohérent dans votre conception</h2>
                        <p>Une interface utilisateur cohérente signifie utiliser des modèles de conception similaires, une terminologie identique dans les invites, des menus et des écrans homogènes et des commandes cohérentes dans toute l'interface.</p>
                        <img class="img-fluid" src="{{ asset('assets/img/post-example.jpg') }}" alt="image for UI" />
                        <span class="caption text-muted">Restez cohérent dans votre conception.</span>
                        <h2 class="section-heading">Mettez-vous à la place des utilisateurs</h2>
                        <p>Vous devez non seulement rendre votre interface utilisateur accessible aux nouveaux utilisateurs, mais elle doit également disposer d'accélérateurs qui aident les utilisateurs experts à accélérer leurs processus. Des novices aux experts, assurez-vous que votre produit est flexible et efficace pour tous les types d’utilisateurs.</p>
                        <h2 class="section-heading">Fournissez des commentaires informatifs</h2>
                        <p>Les commentaires des utilisateurs aident non seulement à découvrir les erreurs possibles sous-jacentes à la conception, mais donnent également au concepteur une référence claire sur les points à améliorer à l'avenir.</p>
                    </div>
                </div>
            </div>
        </article>
@endsection