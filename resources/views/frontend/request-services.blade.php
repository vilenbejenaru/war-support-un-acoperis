@extends('layouts.app')

@section('content')
    <div class="container pt-sm-6 pb-sm-5 py-3">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <h1 class="display-3 title mb-4 text-primary">{{ __('Request Services') }}</h1>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque sed netus blandit mi non nunc. Ipsum aliquam fringilla sagittis, quis rutrum. Arcu imperdiet sem tellus accumsan urna orci.
        </p>
    </div>
    <div class="alert bg-light-green alert-general alert-secondary font-weight-600 mb-0" role="alert">
        <div class="container">
            <span class="alert-inner--icon mr-3"><i class="fa fa-info-circle"></i></span>
            <span class="alert-inner--text">Toate informatiile furnizate cu ajutorul formularului de solicitare sunt confidentiale</span>
        </div>
    </div>
    <section class="py-5 bg-light-blue">
        <div class="container">
            <div class="accordion-1 request-services">
                <div class="row">
                    <div class="col-md-12 ml-auto">
                        <div class="accordion my-3" id="accordionExample">
                            <div class="card shadow mb-4">
                                <div class="card-header" id="headingOne">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link w-100 text-left d-flex justify-content-between" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            1. Informatii generale
                                            <i class="ni ni-bold-down align-self-center ml-4"></i>
                                        </button>
                                    </h5>
                                </div>

                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                    <div class="card-body py-5">
                                        <form action="">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label class="required font-weight-600" for="pacient-name">Numele si prenumele pacientului:</label>
                                                        <input type="text" placeholder="Placeholder text here..." class="form-control" id="pacient-name" />
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label class="required font-weight-600" for="completer-name">Numele si prenumele persoanei care completeaza formularul:</label>
                                                        <input type="text" placeholder="Placeholder text here..." class="form-control" id="completer-name" />
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label class="required font-weight-600" for="pacient-phone">Telefonul pacientului:</label>
                                                        <input type="tel" placeholder="Placeholder text here..." class="form-control" id="pacient-phone" />
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label class="required font-weight-600" for="completer-phone">Telefonul persoanei care completeaza formularul:</label>
                                                        <input type="tel" placeholder="Placeholder text here..." class="form-control" id="completer-phone" />
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label class="required font-weight-600" for="completer-name">E-mailul pacientului:</label>
                                                        <input type="email" placeholder="Placeholder text here..." class="form-control" id="pacient-email" />
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label class="required font-weight-600" for="completer-name">E-mailul persoanei care completeaza formularul:</label>
                                                        <input type="email" placeholder="Placeholder text here..." class="form-control" id="completer-phone" />
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <label class="required font-weight-600" for="completer-name">Judet:</label>
                                                                <select name="" id="" class="custom-select form-control">
                                                                    <option value="">Judet 1</option>
                                                                    <option value="">Judet 2</option>
                                                                    <option value="">Judet 3</option>
                                                                    <option value="">Judet 4</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <label class="required font-weight-600" for="completer-name">Localitate:</label>
                                                                <input type="email" placeholder="Placeholder text here..." class="form-control" id="pacient-email" />
                                                            </div>
                                                        </div>
                                                        <div class="col">
                                                            <div class="form-group">
                                                                <label  class="required font-weight-600" for="completer-name">Localitate:</label>
                                                                <input type="email" placeholder="Placeholder text here..." class="form-control" id="pacient-email" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 mt-4">
                                                    <div class="form-group">
                                                        <label for="" class="font-weight-600">Te rugam sa ne oferi mai multe detalii referitoare la cazul pe care il supui atentiei noastre!</label>
                                                        <textarea name="" id="" rows="5" class="form-control" placeholder="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <label for="" class="font-weight-600 mb-3">Cu ce putem să te ajutăm?</label>
                                                    <div class="row">
                                                        <div class="col">
                                                            <div class="custom-control custom-checkbox mb-3">
                                                                <input class="custom-control-input" id="customCheck1" type="checkbox">
                                                                <label class="custom-control-label" for="customCheck1">Informare si indrumare catre spitale din tara</label>
                                                            </div>
                                                            <div class="custom-control custom-checkbox mb-3">
                                                                <input class="custom-control-input" id="customCheck2" type="checkbox">
                                                                <label class="custom-control-label" for="customCheck2">Informare si indrumare catre spitale din strainatate</label>
                                                            </div>
                                                            <div class="custom-control custom-checkbox mb-3">
                                                                <input class="custom-control-input" id="customCheck3" type="checkbox">
                                                                <label class="custom-control-label" for="customCheck3">Traduceri ale documentelor medicale</label>
                                                            </div>
                                                            <div class="custom-control custom-checkbox mb-3">
                                                                <input class="custom-control-input" id="customCheck4" type="checkbox">
                                                                <label class="custom-control-label" for="customCheck4">Consultanta privind strangerea de fonduri necesare pentru plata tratamentelor</label>
                                                            </div>
                                                        </div>
                                                        <div class="col">
                                                            <div class="custom-control custom-checkbox mb-3">
                                                                <input class="custom-control-input" id="customCheck5" type="checkbox">
                                                                <label class="custom-control-label" for="customCheck5">Alocarea unui numar de SMS pentru strangerea de fonduri</label>
                                                            </div>
                                                            <div class="custom-control custom-checkbox mb-3">
                                                                <input class="custom-control-input" id="customCheck6" type="checkbox">
                                                                <label class="custom-control-label" for="customCheck6">Sprijin pentru a gasi optiuni de cazare langa spital</label>
                                                            </div>
                                                            <div class="custom-control custom-checkbox mb-3">
                                                                <input class="custom-control-input" id="customCheck7" type="checkbox">
                                                                <label class="custom-control-label" for="customCheck7">Sprijin pentru a gasi medicamentele de care ai nevoie</label>
                                                            </div>
                                                            <div class="custom-control custom-checkbox mb-3">
                                                                <input class="custom-control-input" id="customCheck8" type="checkbox">
                                                                <label class="custom-control-label" for="customCheck8">Solutionarea altor nevoi</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="border-top pt-5 mt-3 clearfix">
                                                        <button type="button" class="btn btn-secondary pull-right btn-lg px-6" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                            <span class="btn-inner--text">Pasul urmator</span>
                                                            <span class="btn-inner--icon ml-2"><i class="fa fa-arrow-right"></i></span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-4 shadow">
                                <div class="card-header" id="headingTwo">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link w-100 text-left collapsed d-flex justify-content-between" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            2. Date necesare pentru alocarea unui numar de SMS pentru strangerea de fonduri
                                            <i class="ni ni-bold-down align-self-center ml-4"></i>
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                    <div class="card-body py-5">
                                        <form action="">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label class="required font-weight-600" for="estimate-sum">Suma estimativa necesara pentru tratament/interventie chirurgicala:</label>
                                                        <input type="text" placeholder="Placeholder text here..." class="form-control" id="estimate-sum" />
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label class="required font-weight-600" for="destination-sms">Destinatie fonduri stranse in campanie SMS</label>
                                                        <input type="text" placeholder="Placeholder text here..." class="form-control" id="destination-sms" />
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label class="required font-weight-600" for="clinic-name">Denumire clinica/spital unde este acceptat pacientul:</label>
                                                        <input type="text" placeholder="Placeholder text here..." class="form-control" id="clinic-name" />
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <label class="required font-weight-600" for="completer-name">Tara:</label>
                                                                <select name="" id="" class="custom-select form-control">
                                                                    <option value="">Tara 1</option>
                                                                    <option value="">Tara 2</option>
                                                                    <option value="">Tara 3</option>
                                                                    <option value="">Tara 4</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <label class="required font-weight-600" for="localitate">Localitate:</label>
                                                                <input type="text" placeholder="Placeholder text here..." class="form-control" id="localitate" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="border-top pt-5 mt-3 clearfix">
                                                <button type="button" class="btn btn-secondary pull-right btn-lg px-6" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                    <span class="btn-inner--text">Pasul urmator</span>
                                                    <span class="btn-inner--icon ml-2"><i class="fa fa-arrow-right"></i></span>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-4 shadow">
                                <div class="card-header" id="headingThree">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link w-100 text-left collapsed d-flex justify-content-between" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            3. Cerere pentru a gasi optiuni de cazare langa spital
                                            <i class="ni ni-bold-down align-self-center ml-4"></i>
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                    <div class="card-body py-5">
                                        <h5 class="mb-5">Te rugam sa completezi campurile de mai jos pentru a te ajuta sa gasesti cea mai buna optiune de cazare langa spital!</h5>
                                        <form action="">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label class="font-weight-600" for="estimate-sum">La ce spital urmeaza sa fie efectuate investigatiile medicale / tratamentul?</label>
                                                        <input type="text" placeholder="Placeholder text here..." class="form-control" id="estimate-sum" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label class="required font-weight-600" for="completer-name">Tara:</label>
                                                        <select name="" id="" class="custom-select form-control">
                                                            <option value="">Tara 1</option>
                                                            <option value="">Tara 2</option>
                                                            <option value="">Tara 3</option>
                                                            <option value="">Tara 4</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label class="required font-weight-600" for="completer-name">Oras:</label>
                                                        <input type="text" placeholder="Placeholder text here..." class="form-control" id="city" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label class="required font-weight-600" for="completer-name">Pentru câte persoane ai nevoie de cazare?</label>
                                                        <input type="text" placeholder="Placeholder text here..." class="form-control" id="no-of-persons" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label class="required font-weight-600" for="date-start">Incepand cu ce data ai nevoie de cazare?</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                                                            </div>
                                                            <input class="flatpickr flatpickr-input form-control" type="text" placeholder="Select Date..">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label class="required font-weight-600" for="date-end">Până când ai nevoie de cazare?</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                                                            </div>
                                                            <input class="flatpickr flatpickr-input form-control" type="text" placeholder="Select Date..">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="" class="font-weight-600">Detaliază aici dacă ai nevoie de condiții speciale de cazare:</label>
                                                <textarea name="" id="" rows="5" class="form-control" placeholder="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."></textarea>
                                            </div>
                                            <div class="pt-5 clearfix">
                                                <button type="button" class="btn btn-secondary pull-right btn-lg px-6" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                    <span class="btn-inner--text">Finalizare</span>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection