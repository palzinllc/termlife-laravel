<?php

namespace App\Livewire\Pages;

use Livewire\Component;
use RalphJSmit\Laravel\SEO\Support\SEOData;

class Disclosures extends Component
{
    public function render()
    {
        $SEOData = new SEOData(
            title: 'Disclosures - CostPlus Life Insurance',
            description: 'Important information about our insurance comparison services and regulatory compliance.',
        );

        return view('livewire.pages.disclosures')
            ->layout('layouts.front', ['SEOData' => $SEOData]);
    }
}
