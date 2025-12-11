<?php

namespace App\Livewire\Pages\UseCases;

use Livewire\Component;
use RalphJSmit\Laravel\SEO\Support\SEOData;

class BusinessOwners extends Component
{
    public function render()
    {
        $SEOData = new SEOData(
            title: 'Term Life Insurance for Business Owners - CostPlus Life Insurance',
            description: 'Learn how term life insurance can protect Business Owners. Get personalized quotes from Canada\'s top providers.',
        );

        return view('livewire.pages.use-cases.business-owners')
            ->layout('layouts.front', ['SEOData' => $SEOData]);
    }
}
