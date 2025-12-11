<?php

namespace App\Livewire\Pages\Carriers;

use Livewire\Component;
use RalphJSmit\Laravel\SEO\Support\SEOData;

class IndustrialAlliance extends Component
{
    public function render()
    {
        $SEOData = new SEOData(
            title: 'Industrial Alliance Term Life Insurance - CostPlus Life Insurance',
            description: 'Compare Industrial Alliance term life insurance rates and features. Get transparent pricing on Industrial Alliance policies.',
        );

        return view('livewire.pages.carriers.industrial-alliance')
            ->layout('layouts.front', ['SEOData' => $SEOData]);
    }
}
