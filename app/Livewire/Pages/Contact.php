<?php

namespace App\Livewire\Pages;

use Livewire\Component;
use RalphJSmit\Laravel\SEO\Support\SEOData;

class Contact extends Component
{
    public function render()
    {
        $SEOData = new SEOData(
            title: 'Contact Us - CostPlus Life Insurance',
            description: 'Have questions? We\'re here to help you find the perfect coverage for your needs. Contact our team today.',
        );

        return view('livewire.pages.contact')
            ->layout('layouts.front', ['SEOData' => $SEOData]);
    }
}
