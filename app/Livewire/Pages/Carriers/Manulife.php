<?php

namespace App\Livewire\Pages\Carriers;

use Livewire\Component;
use RalphJSmit\Laravel\SEO\Support\SEOData;

class Manulife extends Component
{
    public function render()
    {
        $SEOData = new SEOData(
            title: 'Manulife Term Life Insurance - CostPlus Life Insurance',
            description: 'Compare Manulife term life insurance rates and features. Get transparent pricing on Manulife policies.',
        );

        return view('livewire.pages.carriers.manulife')
            ->layout('layouts.front', ['SEOData' => $SEOData]);
    }
}
