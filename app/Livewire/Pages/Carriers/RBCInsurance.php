<?php

namespace App\Livewire\Pages\Carriers;

use Livewire\Component;
use RalphJSmit\Laravel\SEO\Support\SEOData;

class RBCInsurance extends Component
{
    public function render()
    {
        $SEOData = new SEOData(
            title: 'R B C Insurance Term Life Insurance - CostPlus Life Insurance',
            description: 'Compare R B C Insurance term life insurance rates and features. Get transparent pricing on R B C Insurance policies.',
        );

        return view('livewire.pages.carriers.rbc-insurance')
            ->layout('layouts.front', ['SEOData' => $SEOData]);
    }
}
