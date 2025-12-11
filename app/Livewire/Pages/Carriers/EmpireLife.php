<?php

namespace App\Livewire\Pages\Carriers;

use Livewire\Component;
use RalphJSmit\Laravel\SEO\Support\SEOData;

class EmpireLife extends Component
{
    public function render()
    {
        $SEOData = new SEOData(
            title: 'Empire Life Term Life Insurance - CostPlus Life Insurance',
            description: 'Compare Empire Life term life insurance rates and features. Get transparent pricing on Empire Life policies.',
        );

        return view('livewire.pages.carriers.empire-life')
            ->layout('layouts.front', ['SEOData' => $SEOData]);
    }
}
