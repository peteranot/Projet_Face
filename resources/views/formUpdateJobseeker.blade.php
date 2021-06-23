@extends('layouts.app')

@section('content')
 
<div class="container">

  <form method="POST" action="update_jobseeker">
    @csrf

    <p>
      <input type="hidden" align="center" name="btn_update_idjobseeker" placeholder="id" value={{ $_POST['btn_update_idjobseeker'] }}>
      <label>Nom: <label>
      <input type="text" align="center" name="firstname_jobseeeker" placeholder="Nom" value={{ $_POST['firstname_jobseeker'] }}>
      <label>Prénom: <label>
      <input type="text" align="center" name="lastname_jobseeeker" placeholder="Prénom" value={{ $_POST['lastname_jobseeker'] }}>
    </p>
    
    <p>
      <label>E-mail: <label>
      <input type="text" align="center" name="email_jobseeeker" placeholder="Adresse e-mail" value={{ $_POST['email_jobseeker'] }}>
      <label>Tél: <label>
      <input type="text" align="center" name="tel_jobseeeker" placeholder="Tel" value={{ $_POST['phone_jobseeker'] }}>
    </p>

    <p>
      <label>Lieu d'habitation: <label>
      <input type="text" align="center" name="home_jobseeeker" placeholder="Lieux d'habitation" value={{ $_POST['home_jobseeker'] }}>
    </p>

    <p>
      <label>Description de la demande: <label>
      <textarea name="description_jobseeeker">{{ $_POST['description_jobseeker'] }}</textarea>
      {{-- <input type="text" align="center" name="description_jobseeeker" placeholder="Description de la demande" value={{ $_POST['description_jobseeker'] }}> --}}
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
      <form action="/update_jobseeker">
        @csrf
        <input type="submit" value="Modifier"/>
      </form>

      <form method="POST" action="/delete_jobseeker">
        @csrf
        <input type="hidden" value="{{ $_POST['btn_update_idjobseeker'] }}" name="btn_delete_iduser"/>
        <input type="submit" value="Supprimer"/>
      </form>
    </p>

  </form> 
</div>
@endsection

