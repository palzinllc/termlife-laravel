<?php

namespace App\Livewire\Pages\UseCases;

use Livewire\Component;
use RalphJSmit\Laravel\SEO\Support\SEOData;

class DentistsProfessionals extends Component
{
    public function render()
    {
        $SEOData = new SEOData(
            title: 'Term Life Insurance for Dentists Professionals - CostPlus Life Insurance',
            description: 'Learn how term life insurance can protect Dentists Professionals. Get personalized quotes from Canada\'s top providers.',
        );

        return view('livewire.pages.use-cases.dentists-professionals')
            ->layout('layouts.front', ['SEOData' => $SEOData]);
    }
}
