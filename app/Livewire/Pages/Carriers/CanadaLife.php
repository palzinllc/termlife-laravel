<?php

namespace App\Livewire\Pages\Carriers;

use Livewire\Component;
use RalphJSmit\Laravel\SEO\Support\SEOData;

class CanadaLife extends Component
{
    public function render()
    {
        $SEOData = new SEOData(
            title: 'Canada Life Term Life Insurance - CostPlus Life Insurance',
            description: 'Compare Canada Life term life insurance rates and features. Get transparent pricing on Canada Life policies.',
        );

        return view('livewire.pages.carriers.canada-life')
            ->layout('layouts.front', ['SEOData' => $SEOData]);
    }
}
