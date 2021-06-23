@extends('layouts.app')

@section('content')
 
<div class="container">

  <form method="POST" action="update_user">
    @csrf
    <input type="hidden" align="center" name="btn_update_iduser" placeholder="id" value={{ $_POST['btn_update_iduser'] }}>
    <p>
      <label>Nom: </label>
      <input type="text" align="center" name="name_user" placeholder="Nom" value={{ $_POST['name_user'] }}>
    </p>
    
    <p>
      <label>Email: </label>
      <input type="text" align="center" name="email_user" placeholder="Adresse e-mail" value={{ $_POST['email_user'] }}>
    </p>

    <p>
      <label>Mot de passe: </label>
      <input type="password" align="center" name="password_user" placeholder="Mot de passe" value={{ $_POST['password_user'] }}>
    </p>


    <p>
      <form action="/update_user" method="POST">
        @csrf
        <input type="submit" value="Modifier"/>
      </form>

      <form method="POST" action="/delete_user">
        @csrf
        <input type="hidden" value="{{ $_POST['btn_update_iduser'] }}" name="btn_delete_iduser"/>
        <input type="submit" value="Supprimer"/>
      </form>
    </p>

  </form> 
</div>
@endsection

