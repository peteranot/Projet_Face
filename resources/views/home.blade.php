@extends('layouts.app')

@section('content')

<?php $etat="fermer"; ?>
<div class="container">
  
  <div class="row justify-content-center">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          {{ __('Mon compte') }}
        </div>
        <div class="card-body">
          @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
          @endif
          <div class="row">
            <div class="col-md-6" style="background-color:none">
              <form>
                @csrf
                  <label>
                    Créer le :
                  </label>
                  <label>
                    {{ Auth::user()->created_at }}
                  </label>
                  <br/>
                  <label>
                    Nom :
                  </label>
                  <label>
                    {{ Auth::user()->name }}
                  </label>
                  <br/>
                  <label>
                    Type d'utilisateur :
                  </label>
                  <label>
                    {{ Auth::user()->user_type }}
                  </label>
              </form>
            </div>
            <div class="col-md-6" style="background-color:none">
              <form>
                @csrf
                <label>
                  Email:
                </label>
                <label>
                  {{ Auth::user()->email }}
                </label>
              </form>
            </div>
          </div> <!-- Fin row -->

          {{-- UPDATE PASSWORD --}}
          {{-- <div class="row"> <!-- Début row -->
            <div class="col-md-6">
              <input type="text" name="new_password" class="input" placeholder="Nouveau mot de passe"/>
              <input type="text" name="new_confirm_password" class="input" placeholder="Confirmer votre mot de passe"/>
              <input type="submit" name="btn_update_password" class="input" value="Modifier votre mot de passe"/>
            </div>
          </div> <!-- Fin row --> --}}

          <br/>
          @if (Auth::user()->user_type == 1 )
          <div class="row"> <!-- Début row -->
            
            {{-- NEW USER --}}
            <div class="col-md-6">
              <div id="accordion">
                <div class="card">
                  <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                      <button class="btn btn-link" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapseOne">
                          Créer un nouveau utilisateur
                      </button>
                    </h5>
                  </div>
                  <div id="collapse1" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                        <form method="POST" action="/create_user">
                            @csrf
                            <p>
                              <input type="text" align="center" name="name_user" placeholder="Nom"/>
                            </p>
                            
                            <p>
                              <input type="text" align="center" name="email_user" placeholder="Adresse e-mail"/>

                              <input type="password" align="center" name="password_user" placeholder="Mot de passe"/>
                            </p>
                            <p>
                              <input type="submit" value="Valider"/>
                            </p>
                        </form>
                    </div>
                  </div>
                </div>
              </div> <!-- Fin accordion -->
            </div> <!-- Fin col -->

            {{-- LISTE USERS --}}
            <div class="col-md-6">
              <div id="accordion">
                <div class="card">
                  <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                      <button class="btn btn-link" data-toggle="collapse" data-target="#collapse2" aria-expanded="true" aria-controls="collapseOne">
                          Liste des utilisateurs
                      </button>
                    </h5>
                  </div>
                  <div id="collapse2" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                      <table>
                        <th>
                          Nom
                        </th>
                        <th>
                          E-mail
                        </th>
                        <th>
                          Actions
                        </th>
                        @foreach($listUsers as $value)
                          <tr>
                              <td>
                                <label>
                                  {{ $value['name'] }}
                                </label>
                              </td>
                              <td>
                                <label>
                                  {{ $value['email'] }}
                                </label>
                              </td>
                              <td>
                              <form method="POST" action="/form_user">
                                @csrf
                                <input type="hidden" value="{{ $value['id'] }}" name="btn_update_iduser"/>
                                <input type="hidden" value="{{ $value['name'] }}" name="name_user"/>
                                <input type="hidden" value="{{ $value['email'] }}" name="email_user"/>
                                <input type="hidden" value="{{ $value['password'] }}" name="password_user"/>

                                <input type="submit" value="Modifier"/>
                              </form>
                            </td>
                          </tr>
                        @endforeach
                      </table>
                    </div>
                  </div>
                </div>

              </div> <!-- Fin accordion -->
            </div> <!-- Fin col -->

          </div> <!-- Fin row -->
          
          <br/>

          <div class="row"> <!-- Début row -->
            
            {{-- NEW JOBSEEKER --}}
            <div class="col-md-6">
              <div id="accordion">
                <div class="card">
                  <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                      <button class="btn btn-link" data-toggle="collapse" data-target="#collapse3" aria-expanded="true" aria-controls="collapseOne">
                          Créer un demandeur d'emploie
                      </button>
                    </h5>
                  </div>
                  <div id="collapse3" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                        <form method="POST" action="create_jobseeker">
                            @csrf
                            <p>
                              <input type="text" align="center" name="firstname_jobseeeker" placeholder="Nom"/>

                              <input type="text" align="center" name="lastname_jobseeeker" placeholder="Prénom"/>
                            </p>
                            
                            <p>
                              <input type="text" align="center" name="email_jobseeeker" placeholder="Adresse e-mail"/>

                              <input type="text" align="center" name="tel_jobseeeker" placeholder="Tel"/>
                            </p>

                            <p>
                              <input type="text" align="center" name="home_jobseeeker" placeholder="Lieux d'habitation"/>
                            </p>

                            <p>
                              <input type="text" align="center" name="description_jobseeeker" placeholder="Description de la demande"/>
                            </p>

                            <p>
                              <label for="pet-select">Dîplome le plus élever</label>
                              
                              <select id="pet-select" name="get_diplome">
                                  {{-- <option value="">--Please choose an option--</option> --}}
                                  @foreach($listdiplome as $value)
                                    <option  value="{{ $value['name'] }}">{{ $value['name'] }}</option>
                                  @endforeach
                              </select>
                              
                            </p>

                            <p>
                              <input type="file" align="center" name="cv_jobseeeker" placeholder="CV"/>
                            </p>
                            <p>
                              <input type="submit" value="Valider"/>
                            </p>
                            

                        </form>
                    </div>
                  </div>
                </div>
              </div> <!-- Fin accordion -->
            </div> <!-- Fin col -->

            {{-- LISTE JOBSEEKER --}}
            <div class="col-md-6">
              <div id="accordion">
                <div class="card">
                  <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                      <button class="btn btn-link" data-toggle="collapse" data-target="#collapse4" aria-expanded="true" aria-controls="collapseOne">
                          Liste des demandeur d'emploie
                      </button>
                    </h5>
                  </div>
                  <div id="collapse4" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                      <table>
                        <th>
                          iD
                        </th>

                        <th>
                          Nom
                        </th>

                        <th>
                          Description
                        </th>
                        
                        @foreach($listjobseeker as $value)
                          <tr>
                              <td>
                                <label>
                                  {{ $value['id'] }}
                                </label>
                              </td>
                              <td>
                                <label>
                                  
                                  {{ $value['firstname'] }}
                                </label>
                              </td>
                              <td>
                                <label>
                                  {{ $value['description'] }}
                                </label>
                              </td>
                              <td>
                                <form method="POST" action="/form_jobseeker">
                                  @csrf
                                  <input type="hidden" value="{{ $value['id'] }}" name="btn_update_idjobseeker"/>
                                  <input type="hidden" value="{{ $value['firstname'] }}" name="firstname_jobseeker"/>
                                  <input type="hidden" value="{{ $value['lastname'] }}" name="lastname_jobseeker"/>
                                  <input type="hidden" value="{{ $value['home'] }}" name="home_jobseeker"/>
                                  <input type="hidden" value="{{ $value['phone'] }}" name="phone_jobseeker"/>
                                  <input type="hidden" value="{{ $value['email'] }}" name="email_jobseeker"/>
                                  <input type="hidden" value="{{ $value['description'] }}" name="description_jobseeker"/>
                                  <input type="hidden" value="{{ $value['diplome'] }}" name="diplome_jobseeker"/>
                                  <input type="hidden" value="{{ $value['cv'] }}" name="cv_jobseeker"/>

                                  <input type="submit" value="Modifier"/>
                                </form>
                              </td>
                          </tr>
                        @endforeach
                      </table>
                    </div>
                  </div>
                </div>

              </div> <!-- Fin accordion -->
            </div> <!-- Fin col -->

          </div> <!-- Fin row -->


          @endif
        </div> <!-- Fin card-body -->
      </div> <!-- Fin card -->
    </div> <!-- Fin col -->
  </div> <!-- Fin row -->
</div> <!-- Fin container -->
@endsection

