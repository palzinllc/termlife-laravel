<?php

namespace App\Livewire\Pages;

use Livewire\Component;
use RalphJSmit\Laravel\SEO\Support\SEOData;

class Terms extends Component
{
    public function render()
    {
        $SEOData = new SEOData(
            title: 'Terms of Service - CostPlus Life Insurance',
            description: 'Terms and conditions for using our website and insurance comparison services.',
        );

        return view('livewire.pages.terms')
            ->layout('layouts.front', ['SEOData' => $SEOData]);
    }
}
