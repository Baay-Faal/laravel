@extends('layouts.auth')

@section('title', 'Mot de passe oublié - Mediplus')

@section('content')
<div class="row justify-content-center">
  <div class="col-md-6">
    <h2 class="mb-4 text-center">Mot de passe oublié</h2>
    <p class="text-center mb-4">
      Saisis ton adresse email, nous t’enverrons un lien pour réinitialiser ton mot de passe.
    </p>

    <form method="POST" action="#" class="bg-light p-4 p-md-5">
      <div class="form-group">
        <label for="email">Adresse email</label>
        <input type="email" name="email" id="email" class="form-control" placeholder="vous@example.com">
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block py-3">Envoyer le lien</button>
      </div>

      <div class="form-group text-center mb-0">
        <a href="{{ route('login') }}">Retour à la connexion</a>
      </div>
    </form>
  </div>
</div>
@endsection