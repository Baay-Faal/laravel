@extends('layouts.auth')

@section('title', 'Connexion - Mediplus')

@section('content')
<div class="row justify-content-center">
  <div class="col-md-6">
    <h2 class="mb-4 text-center">Connexion</h2>

    <form method="POST" action="#" class="bg-light p-4 p-md-5">
      <div class="form-group">
        <label for="email">Adresse email</label>
        <input type="email" name="email" id="email" class="form-control" placeholder="vous@example.com">
      </div>

      <div class="form-group">
        <label for="password">Mot de passe</label>
        <input type="password" name="password" id="password" class="form-control" placeholder="Mot de passe">
      </div>

      <div class="form-group form-check">
        <input type="checkbox" name="remember" id="remember" class="form-check-input">
        <label for="remember" class="form-check-label">Se souvenir de moi</label>
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block py-3">Se connecter</button>
      </div>

      <div class="form-group d-flex justify-content-between mb-0">
        <a href="{{ route('forgot_password') }}">Mot de passe oublié ?</a>
        <a href="{{ route('register') }}">Créer un compte</a>
      </div>
    </form>
  </div>
</div>
@endsection