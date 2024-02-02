@extends('master')
@section('title','Home')
@section('content')
        <!-- Page Header-->
        <header class="masthead" style="background-image: url({{ asset('assets/img/home.jpg') }})">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="site-heading">
                            <h1>Mon portfolio</h1>
                            <span class="subheading">Un aperçu de mon portfolio</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main Content-->
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <!-- Post preview-->
                    <div class="post-preview">
                        <a href="{{ asset('/projet/1') }}">
                            <h2 class="post-title">Quelques règles de conception de l'interface utilisateur</h2>
                            <h3 class="post-subtitle">Il est toujours utile d'avoir quelques conseils</h3>
                        </a>
                        <p class="post-meta">
                            Posté par
                            <a href="#!">Zele</a>
                            le 02 février 2024
                        </p>
                    </div>
                    <!-- Divider-->
                    <hr class="my-4" />
                    <!-- Post preview-->
                    <div class="post-preview">
                        <a href="{{ asset('/projet/2') }}"><h2 class="post-title">Avantages de l'utilisation de frameworks pour le développement d'applications Web</h2></a>
                        <p class="post-meta">
                            Posté par
                            <a href="#!">Zele</a>
                            le 24 janvier 2024
                        </p>
                    </div>
                    <!-- Divider-->
                    <hr class="my-4" />
                    <!-- Post preview-->
                    <div class="post-preview">
                        <a href="{{ asset('/projet/3') }}">
                            <h2 class="post-title">Tendances du développement Web en 2024</h2>
                            <h3 class="post-subtitle">Voir les cheminements possibles pour le développement de carrière</h3>
                        </a>
                        <p class="post-meta">
                            Posté par
                            <a href="#!">Zele</a>
                            le 18 janvier 2024
                        </p>
                    </div>
                    <!-- Divider-->
                    <hr class="my-4" />
                    <!-- Pager-->
                    <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="#!">Autres projets →</a></div>
                </div>
            </div>
        </div>
@endsection