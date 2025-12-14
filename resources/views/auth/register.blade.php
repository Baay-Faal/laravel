@extends('layouts.auth')

@section('title', 'Inscription - Mediplus')

@section('content')
<div class="row justify-content-center">
  <div class="col-md-6">
    <h2 class="mb-4 text-center">Créer un compte</h2>

    <form method="POST" action="#" class="bg-light p-4 p-md-5">
      {{-- Pour l’instant on ne fait rien côté backend, donc action="#" --}}
      <div class="form-group">
        <label for="name">Nom complet</label>
        <input type="text" name="name" id="name" class="form-control" placeholder="Votre nom">
      </div>

      <div class="form-group">
        <label for="email">Adresse email</label>
        <input type="email" name="email" id="email" class="form-control" placeholder="vous@example.com">
      </div>

      <div class="form-group">
        <label for="password">Mot de passe</label>
        <input type="password" name="password" id="password" class="form-control" placeholder="Mot de passe">
      </div>

      <div class="form-group">
        <label for="password_confirmation">Confirmer le mot de passe</label>
        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Confirmer">
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block py-3">S'inscrire</button>
      </div>

      <div class="form-group text-center mb-0">
        <a href="{{ route('login') }}">Déjà un compte ? Se connecter</a>
      </div>
    </form>
  </div>
</div>
@endsection