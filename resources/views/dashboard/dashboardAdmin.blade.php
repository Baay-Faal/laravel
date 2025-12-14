@extends('layouts.admin')

@section('title', 'Dashboard - Mediplus Admin')
@section('page_title', 'Dashboard')
@section('page_subtitle', 'Vue d’ensemble de votre clinique')

@section('content')

    {{-- KPIs principaux --}}
    <!-- <div class="row mb-4">
        <div class="col-md-3">
            <div class="card p-4 text-center shadow-sm">
                <h3 class="h6 text-uppercase text-muted mb-2">Patients</h3>
                <span class="d-block display-4 font-weight-bold">1 245</span>
                <small class="text-success">+ 12% ce mois</small>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card p-4 text-center shadow-sm">
                <h3 class="h6 text-uppercase text-muted mb-2">Rendez-vous à venir</h3>
                <span class="d-block display-4 font-weight-bold">58</span>
                <small class="text-info">24h prochaines</small>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card p-4 text-center shadow-sm">
                <h3 class="h6 text-uppercase text-muted mb-2">Médecins</h3>
                <span class="d-block display-4 font-weight-bold">18</span>
                <small class="text-muted">Spécialités multiples</small>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card p-4 text-center shadow-sm">
                <h3 class="h6 text-uppercase text-muted mb-2">Messages non lus</h3>
                <span class="d-block display-4 font-weight-bold">7</span>
                <small class="text-danger">À traiter rapidement</small>
            </div>
        </div>
    </div>

    <div class="row">
        {{-- Tableau des prochains rendez-vous --}}
        <div class="col-md-8 mb-4">
            <div class="card p-4 shadow-sm">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h3 class="h5 mb-0">Prochains rendez-vous</h3>
                    <a href="#" class="btn btn-sm btn-primary">Voir tous</a>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped table-hover mb-0">
                        <thead class="thead-light">
                            <tr>
                                <th>Patient</th>
                                <th>Médecin</th>
                                <th>Service</th>
                                <th>Date</th>
                                <th>Heure</th>
                                <th>Statut</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>John Doe</td>
                                <td>Dr. Lloyd Wilson</td>
                                <td>Cardiology</td>
                                <td>2025-12-13</td>
                                <td>10:30</td>
                                <td><span class="badge badge-success">Confirmé</span></td>
                            </tr>
                            <tr>
                                <td>Jane Smith</td>
                                <td>Dr. Rachel Parker</td>
                                <td>Ophthalmology</td>
                                <td>2025-12-13</td>
                                <td>11:15</td>
                                <td><span class="badge badge-warning">En attente</span></td>
                            </tr>
                            <tr>
                                <td>Paul Martin</td>
                                <td>Dr. Ian Smith</td>
                                <td>Dental</td>
                                <td>2025-12-13</td>
                                <td>14:00</td>
                                <td><span class="badge badge-info">Reprogrammé</span></td>
                            </tr>
                            <tr>
                                <td>Sarah Lopez</td>
                                <td>Dr. Alicia Henderson</td>
                                <td>Pediatrics</td>
                                <td>2025-12-14</td>
                                <td>09:00</td>
                                <td><span class="badge badge-secondary">Nouveau</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        {{-- Actions rapides + activité récente --}}
        <div class="col-md-4 mb-4">
            <div class="card p-4 shadow-sm mb-4">
                <h3 class="h6 text-uppercase text-muted mb-3">Actions rapides</h3>
                <div class="d-flex flex-column">
                    <a href="#" class="btn btn-primary btn-block mb-2">+ Nouveau rendez-vous</a>
                    <a href="#" class="btn btn-outline-primary btn-block mb-2">Ajouter un patient</a>
                    <a href="#" class="btn btn-outline-secondary btn-block">Ajouter un médecin</a>
                </div>
            </div>

            <div class="card p-4 shadow-sm">
                <h3 class="h6 text-uppercase text-muted mb-3">Activité récente</h3>
                <ul class="list-unstyled mb-0">
                    <li class="mb-2">
                        <span class="badge badge-success mr-2">Rendez-vous</span>
                        <strong>John Doe</strong> confirmé avec <strong>Dr. Wilson</strong>
                        <br><small class="text-muted">Il y a 12 minutes</small>
                    </li>
                    <li class="mb-2">
                        <span class="badge badge-info mr-2">Patient</span>
                        <strong>Nouvelle fiche patient</strong> : Marie Dupont
                        <br><small class="text-muted">Il y a 35 minutes</small>
                    </li>
                    <li class="mb-2">
                        <span class="badge badge-warning mr-2">Message</span>
                        Nouveau message via le formulaire de contact
                        <br><small class="text-muted">Il y a 1 heure</small>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    {{-- Répartition par service + messages récents --}}
    <div class="row">
        <div class="col-md-6 mb-4">
            <div class="card p-4 shadow-sm">
                <h3 class="h5 mb-3">Répartition des rendez-vous par service</h3>

                <div class="mb-3">
                    <div class="d-flex justify-content-between">
                        <span>Cardiology</span>
                        <span class="text-muted">40%</span>
                    </div>
                    <div class="progress">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 40%"></div>
                    </div>
                </div>

                <div class="mb-3">
                    <div class="d-flex justify-content-between">
                        <span>Dental</span>
                        <span class="text-muted">25%</span>
                    </div>
                    <div class="progress">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 25%"></div>
                    </div>
                </div>

                <div class="mb-3">
                    <div class="d-flex justify-content-between">
                        <span>Neurology</span>
                        <span class="text-muted">20%</span>
                    </div>
                    <div class="progress">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 20%"></div>
                    </div>
                </div>

                <div class="mb-0">
                    <div class="d-flex justify-content-between">
                        <span>Autres</span>
                        <span class="text-muted">15%</span>
                    </div>
                    <div class="progress">
                        <div class="progress-bar bg-secondary" role="progressbar" style="width: 15%"></div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Messages récents --}}
        <div class="col-md-6 mb-4">
            <div class="card p-4 shadow-sm">
                <h3 class="h5 mb-3">Derniers messages</h3>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item px-0">
                        <div class="d-flex justify-content-between">
                            <div>
                                <strong>Marc Dubois</strong>  
                                <div class="text-muted small">Demande d’informations sur la cardiologie</div>
                            </div>
                            <span class="badge badge-danger align-self-start">Non lu</span>
                        </div>
                    </li>
                    <li class="list-group-item px-0">
                        <div class="d-flex justify-content-between">
                            <div>
                                <strong>Claire Martin</strong>  
                                <div class="text-muted small">Modification de rendez-vous</div>
                            </div>
                            <span class="badge badge-warning align-self-start">En cours</span>
                        </div>
                    </li>
                    <li class="list-group-item px-0">
                        <div class="d-flex justify-content-between">
                            <div>
                                <strong>Ahmed Ben</strong>  
                                <div class="text-muted small">Remerciements pour la consultation</div>
                            </div>
                            <span class="badge badge-success align-self-start">Traité</span>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div> -->
    <div>
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Bienvenue sur votre tableau de bord Médecin</h5>
                <p class="card-text">Ici, vous pouvez gérer les informations des médecin </p>  
              </div>
            </div>
          </div>
        </div>
    </div>
@endsection