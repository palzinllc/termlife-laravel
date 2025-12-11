<?php

namespace App\Livewire\Pages;

use Livewire\Component;
use RalphJSmit\Laravel\SEO\Support\SEOData;

class WhoNeedsThis extends Component
{
    public function render()
    {
        $SEOData = new SEOData(
            title: 'Who Needs Term Life Insurance? - CostPlus Life Insurance',
            description: 'Term life insurance is essential for anyone who has people depending on their income. Learn if you need coverage.',
        );

        return view('livewire.pages.who-needs-this')
            ->layout('layouts.front', ['SEOData' => $SEOData]);
    }
}
