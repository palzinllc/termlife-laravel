<?php

namespace App\Livewire\Pages;

use Livewire\Component;
use RalphJSmit\Laravel\SEO\Support\SEOData;

class WhatIsTermLife extends Component
{
    public function render()
    {
        $SEOData = new SEOData(
            title: 'What is Term Life Insurance? - CostPlus Life Insurance',
            description: 'Simple, affordable protection for your loved ones when they need it most. Learn about term life insurance coverage in Canada.',
        );

        return view('livewire.pages.what-is-term-life')
            ->layout('layouts.front', ['SEOData' => $SEOData]);
    }
}
