@extends('master')
@section('title','Post')
@section('content')
        <!-- Page Header-->
        <header class="masthead" style="background-image: url({{ asset('assets/img/post.webp') }})">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="post-heading">
                            <h1>Créer une plateforme de commerce électronique en ligne</h1>
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
                        <p>Faites une visite sur mon site <a href="https://e2296635.webdev.cmaisonneuve.qc.ca/projet1/public/">ici</a> !</p>
                        <h2 class="section-heading">Présentation Sommaire de Lord Stampee</h2>
                        <P>Lord Reginald Stampee, duc de Worcessteshear et philatéliste depuis sa tendre enfance au milieu des années cinquante, décide de faire le pas dans le numérique et étendre au-delà du Royaume-Uni ses fameuses enchères de timbres qui font accourir les plus grands philatélistes du monde.</P>
                        <P>Ce site « Stampee » est un magazine canadien spécialisé dans le commerce et les enchères de timbres. Stampee a établi 6 clubs de philatélie à travers Canada, qui fournit un marché stable hors ligne. Avec la popularité de NFT, Stampee libère un nouveau marché NFT pour ses collections de timbres. Ce faisant, Stampee espère protéger la beauté des timbres fragiles et apporter leur beauté aux amateurs de timbres du monde entier.</P>
                        <img class="img-fluid" src="{{ asset('assets/img/userflow.jpg') }}" alt="image for userflow" />
                        <span class="caption text-muted">Le site Stampee.</span>
                    </div>
                </div>
            </div>
        </article>
@endsection