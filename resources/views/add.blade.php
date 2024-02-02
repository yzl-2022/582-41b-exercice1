@extends('master')
@section('title','Contact')
@section('content')
        <!-- Page Header-->
        <header class="masthead" style="background-image: url({{ asset('assets/img/add.jpg') }})">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="page-heading">
                            <h1>Créer un nouveau projet</h1>
                            <span class="subheading">Planifier | Concevoir | Créer | Valider</span>
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
                        <p>Vous avez de bonnes idées ? Commencez par faire un plan !</p>
                        <div class="my-5">
                            <!-- * * * * * * * * * * * * * * *-->
                            <!-- * * SB Forms Contact Form * *-->
                            <!-- * * * * * * * * * * * * * * *-->
                            <!-- This form is pre-integrated with SB Forms.-->
                            <!-- To make this form functional, sign up at-->
                            <!-- https://startbootstrap.com/solution/contact-forms-->
                            <!-- to get an API token!-->
                            @isset($data)
                                <p><strong>Type de projet:</strong> {{ optional($data)->type }}</p>
                                <p><strong>Durée du projet:</strong> {{ optional($data)->timespan }}</p>
                                <p><strong>Domaine d'intérêt:</strong> {{ optional($data)->interest }}</p>
                                <p><strong>Spécifications:</strong> {{ optional($data)->message }}</p>
                            @else
                            <form method="post">
                                @csrf
                                <div class="form-floating">
                                    <input name="type" class="form-control" id="type" type="text" placeholder="Entrez le type de projet..." data-sb-validations="required" />
                                    <label for="type">Type de projet</label>
                                    <div class="invalid-feedback" data-sb-feedback="type:required">Un type est requis.</div>
                                </div>
                                <div class="form-floating">
                                    <input name="timespan" class="form-control" id="timespan" type="number" placeholder="Entrez la durée du projet..." data-sb-validations="required" />
                                    <label for="timespan">Durée du projet en heures</label>
                                    <div class="invalid-feedback" data-sb-feedback="timespan:required">Un numéro est requis.</div>
                                </div>
                                <div class="form-floating">
                                    <input name="interest" class="form-control" id="interest" type="text" placeholder="Entrez votre domaine d'intérêt..." data-sb-validations="required" />
                                    <label for="interest">Domaine d'intérêt</label>
                                    <div class="invalid-feedback" data-sb-feedback="interest:required">Un domaine d'intérêt est requis.</div>
                                </div>
                                <div class="form-floating">
                                    <textarea name="message" class="form-control" id="message" placeholder="Entrez votre spécifications ici..." style="height: 12rem" data-sb-validations="required"></textarea>
                                    <label for="message">Autres spécifications</label>
                                    <div class="invalid-feedback" data-sb-feedback="message:required">Les spécifications sont requises.</div>
                                </div>
                                <br />
                                <!-- Submit success message-->
                                <!---->
                                <!-- This is what your users will see when the form-->
                                <!-- has successfully submitted-->
                                <div class="d-none" id="submitSuccessMessage">
                                    <div class="text-center mb-3">
                                        <div class="fw-bolder">Envoi du formulaire réussi !</div>
                                        To activate this form, sign up at
                                        <br />
                                        <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                    </div>
                                </div>
                                <!-- Submit error message-->
                                <!---->
                                <!-- This is what your users will see when there is-->
                                <!-- an error submitting the form-->
                                <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Erreur lors de l'envoi du message !</div></div>
                                <!-- Submit Button-->
                                <button class="btn btn-primary text-uppercase" type="submit">Créer</button>
                            </form>
                            @endisset
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!--define the variable 'js' only inside the 'contact' variable-->
        @section('js')
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
        @endsection
@endsection
