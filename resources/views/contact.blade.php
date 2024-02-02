@extends('master')
@section('title','Contact')
@section('content')
        <!-- Page Header-->
        <header class="masthead" style="background-image: url({{ asset('assets/img/contact.jpg') }})">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="page-heading">
                            <h1>Contactez moi</h1>
                            <span class="subheading">Travaillons ensemble pour faire le meilleur.</span>
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
                        <p>Vous souhaitez me contacter ? Remplissez le formulaire ci-dessous pour m'envoyer un message et je vous répondrai dans les plus brefs délais !</p>
                        <div class="my-5">
                            <!-- * * * * * * * * * * * * * * *-->
                            <!-- * * SB Forms Contact Form * *-->
                            <!-- * * * * * * * * * * * * * * *-->
                            <!-- This form is pre-integrated with SB Forms.-->
                            <!-- To make this form functional, sign up at-->
                            <!-- https://startbootstrap.com/solution/contact-forms-->
                            <!-- to get an API token!-->
                            @isset($data)
                                <p><strong>Nom:</strong> {{ optional($data)->name }}</p>
                                <p><strong>E-mail:</strong> {{ optional($data)->email }}</p>
                                <p><strong>Télé:</strong> {{ optional($data)->phone }}</p>
                                <p><strong>Domaine d'intérêt:</strong> {{ optional($data)->interest }}</p>
                                <p><strong>Message:</strong> {{ optional($data)->message }}</p>
                            @else
                            <form method="post">
                                @csrf
                                <div class="form-floating">
                                    <input name="name" class="form-control" id="name" type="text" placeholder="Entrez votre nom..." data-sb-validations="required" />
                                    <label for="name">Nom</label>
                                    <div class="invalid-feedback" data-sb-feedback="name:required">Un nom est requis.</div>
                                </div>
                                <div class="form-floating">
                                    <input name="email" class="form-control" id="email" type="email" placeholder="Entrez votre Email..." data-sb-validations="required,email" />
                                    <label for="email">Adresse e-mail</label>
                                    <div class="invalid-feedback" data-sb-feedback="email:required">Un e-mail est requis.</div>
                                    <div class="invalid-feedback" data-sb-feedback="email:email">E-mail n'est pas valide.</div>
                                </div>
                                <div class="form-floating">
                                    <input name="phone" class="form-control" id="phone" type="tel" placeholder="Entrez votre numéro de téléphone..." data-sb-validations="required" />
                                    <label for="phone">Numéro de téléphone</label>
                                    <div class="invalid-feedback" data-sb-feedback="phone:required">Un numéro de téléphone est requis.</div>
                                </div>
                                <div class="form-floating">
                                    <input name="interest" class="form-control" id="interest" type="text" placeholder="Entrez votre domaine d'intérêt..." data-sb-validations="required" />
                                    <label for="interest">Domaine d'intérêt</label>
                                    <div class="invalid-feedback" data-sb-feedback="interest:required">Un domaine d'intérêt est requis.</div>
                                </div>
                                <div class="form-floating">
                                    <textarea name="message" class="form-control" id="message" placeholder="Entrez votre message ici..." style="height: 12rem" data-sb-validations="required"></textarea>
                                    <label for="message">Message</label>
                                    <div class="invalid-feedback" data-sb-feedback="message:required">Un message est requis.</div>
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
                                <button class="btn btn-primary text-uppercase" type="submit">Envoyer</button>
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
