<?php

namespace App\Livewire\Pages\Carriers;

use Livewire\Component;
use RalphJSmit\Laravel\SEO\Support\SEOData;

class EquitableLife extends Component
{
    public function render()
    {
        $SEOData = new SEOData(
            title: 'Equitable Life Term Life Insurance - CostPlus Life Insurance',
            description: 'Compare Equitable Life term life insurance rates and features. Get transparent pricing on Equitable Life policies.',
        );

        return view('livewire.pages.carriers.equitable-life')
            ->layout('layouts.front', ['SEOData' => $SEOData]);
    }
}
