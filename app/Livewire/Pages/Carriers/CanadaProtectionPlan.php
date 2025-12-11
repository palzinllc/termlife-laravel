<?php

namespace App\Livewire\Pages\Carriers;

use Livewire\Component;
use RalphJSmit\Laravel\SEO\Support\SEOData;

class CanadaProtectionPlan extends Component
{
    public function render()
    {
        $SEOData = new SEOData(
            title: 'Canada Protection Plan Term Life Insurance - CostPlus Life Insurance',
            description: 'Compare Canada Protection Plan term life insurance rates and features. Get transparent pricing on Canada Protection Plan policies.',
        );

        return view('livewire.pages.carriers.canada-protection-plan')
            ->layout('layouts.front', ['SEOData' => $SEOData]);
    }
}
