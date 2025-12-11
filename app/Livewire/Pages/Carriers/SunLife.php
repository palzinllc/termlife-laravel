<?php

namespace App\Livewire\Pages\Carriers;

use Livewire\Component;
use RalphJSmit\Laravel\SEO\Support\SEOData;

class SunLife extends Component
{
    public function render()
    {
        $SEOData = new SEOData(
            title: 'Sun Life Term Life Insurance - CostPlus Life Insurance',
            description: 'Compare Sun Life term life insurance rates and features. Get transparent pricing on Sun Life policies.',
        );

        return view('livewire.pages.carriers.sun-life')
            ->layout('layouts.front', ['SEOData' => $SEOData]);
    }
}
