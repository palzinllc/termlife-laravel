<?php

namespace App\Livewire\Pages;

use Livewire\Component;
use RalphJSmit\Laravel\SEO\Support\SEOData;

class About extends Component
{
    public function render()
    {
        $SEOData = new SEOData(
            title: 'About CostPlus Life Insurance - Our Mission & Values',
            description: 'Making term life insurance simple, affordable, and accessible for all Canadians. Owned & Operated by Immunis Financial Brokers Inc.',
        );

        return view('livewire.pages.about')
            ->layout('layouts.front', ['SEOData' => $SEOData]);
    }
}
