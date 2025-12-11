<?php

namespace App\Livewire\Pages\UseCases;

use Livewire\Component;
use RalphJSmit\Laravel\SEO\Support\SEOData;

class Homeowners extends Component
{
    public function render()
    {
        $SEOData = new SEOData(
            title: 'Term Life Insurance for Homeowners - CostPlus Life Insurance',
            description: 'Learn how term life insurance can protect Homeowners. Get personalized quotes from Canada\'s top providers.',
        );

        return view('livewire.pages.use-cases.homeowners')
            ->layout('layouts.front', ['SEOData' => $SEOData]);
    }
}
