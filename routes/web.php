<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;

// Public Frontend Routes
Route::get('/', App\Livewire\Pages\Home::class)->name('home');
Route::get('/what-is-term-life', App\Livewire\Pages\WhatIsTermLife::class)->name('what-is-term-life');
Route::get('/who-needs-this', App\Livewire\Pages\WhoNeedsThis::class)->name('who-needs-this');
Route::get('/how-to-choose', App\Livewire\Pages\HowToChoose::class)->name('how-to-choose');
Route::get('/about', App\Livewire\Pages\About::class)->name('about');
Route::get('/blog', App\Livewire\Pages\Blog::class)->name('blog');
Route::get('/contact', App\Livewire\Pages\Contact::class)->name('contact');
Route::get('/code-of-conduct', App\Livewire\Pages\CodeOfConduct::class)->name('code-of-conduct');
Route::get('/disclosures', App\Livewire\Pages\Disclosures::class)->name('disclosures');
Route::get('/privacy-policy', App\Livewire\Pages\PrivacyPolicy::class)->name('privacy-policy');
Route::get('/terms', App\Livewire\Pages\Terms::class)->name('terms');

// Carrier Pages
Route::get('/carriers/canada-life', App\Livewire\Pages\Carriers\CanadaLife::class)->name('carriers.canada-life');
Route::get('/carriers/manulife', App\Livewire\Pages\Carriers\Manulife::class)->name('carriers.manulife');
Route::get('/carriers/sun-life', App\Livewire\Pages\Carriers\SunLife::class)->name('carriers.sun-life');
Route::get('/carriers/rbc-insurance', App\Livewire\Pages\Carriers\RBCInsurance::class)->name('carriers.rbc-insurance');
Route::get('/carriers/equitable-life', App\Livewire\Pages\Carriers\EquitableLife::class)->name('carriers.equitable-life');
Route::get('/carriers/canada-protection-plan', App\Livewire\Pages\Carriers\CanadaProtectionPlan::class)->name('carriers.canada-protection-plan');
Route::get('/carriers/empire-life', App\Livewire\Pages\Carriers\EmpireLife::class)->name('carriers.empire-life');
Route::get('/carriers/industrial-alliance', App\Livewire\Pages\Carriers\IndustrialAlliance::class)->name('carriers.industrial-alliance');

// Use Case Pages
Route::get('/use-cases/families', App\Livewire\Pages\UseCases\Families::class)->name('use-cases.families');
Route::get('/use-cases/singles-young-pros', App\Livewire\Pages\UseCases\SinglesYoungPros::class)->name('use-cases.singles-young-pros');
Route::get('/use-cases/homeowners', App\Livewire\Pages\UseCases\Homeowners::class)->name('use-cases.homeowners');
Route::get('/use-cases/business-owners', App\Livewire\Pages\UseCases\BusinessOwners::class)->name('use-cases.business-owners');
Route::get('/use-cases/dentists-professionals', App\Livewire\Pages\UseCases\DentistsProfessionals::class)->name('use-cases.dentists-professionals');
Route::get('/use-cases/key-people-buy-sell', App\Livewire\Pages\UseCases\KeyPeopleBuySell::class)->name('use-cases.key-people-buy-sell');
Route::get('/use-cases/debt-loans', App\Livewire\Pages\UseCases\DebtLoans::class)->name('use-cases.debt-loans');
Route::get('/use-cases/divorce-child-support', App\Livewire\Pages\UseCases\DivorceChildSupport::class)->name('use-cases.divorce-child-support');
Route::get('/use-cases/newcomers-immigrants', App\Livewire\Pages\UseCases\NewcomersImmigrants::class)->name('use-cases.newcomers-immigrants');
Route::get('/use-cases/special-needs-dependants', App\Livewire\Pages\UseCases\SpecialNeedsDependants::class)->name('use-cases.special-needs-dependants');

// 404 Page
Route::fallback(App\Livewire\Pages\NotFound::class);

// Authentication Routes (Login only - Registration disabled)
Route::middleware('guest')->group(function () {
    Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('login', [LoginController::class, 'login']);
});

Route::post('logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');

// Protected Routes
Route::middleware('auth')->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
});
