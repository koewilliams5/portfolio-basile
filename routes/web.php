<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;

/*
|--------------------------------------------------------------------------
| Routes du Portfolio — Koe Bi Suy Basile
|--------------------------------------------------------------------------
|
| Route principale : affiche la page d'accueil du portfolio
| Route contact    : reçoit et traite le formulaire de contact (POST)
|
*/

// Page d'accueil du portfolio
Route::get('/', [PortfolioController::class, 'home'])->name('home');

// Traitement du formulaire de contact
Route::post('/contact', [PortfolioController::class, 'sendContact'])->name('contact.send');
