<?php

namespace App\Livewire\Pages;

use Livewire\Component;
use RalphJSmit\Laravel\SEO\Support\SEOData;

class PrivacyPolicy extends Component
{
    public function render()
    {
        $SEOData = new SEOData(
            title: 'Privacy Policy - CostPlus Life Insurance',
            description: 'How we collect, use, and protect your personal information when you use our services.',
        );

        return view('livewire.pages.privacy-policy')
            ->layout('layouts.front', ['SEOData' => $SEOData]);
    }
}
