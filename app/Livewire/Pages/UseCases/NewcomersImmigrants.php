<?php

namespace App\Livewire\Pages\UseCases;

use Livewire\Component;
use RalphJSmit\Laravel\SEO\Support\SEOData;

class NewcomersImmigrants extends Component
{
    public function render()
    {
        $SEOData = new SEOData(
            title: 'Term Life Insurance for Newcomers Immigrants - CostPlus Life Insurance',
            description: 'Learn how term life insurance can protect Newcomers Immigrants. Get personalized quotes from Canada\'s top providers.',
        );

        return view('livewire.pages.use-cases.newcomers-immigrants')
            ->layout('layouts.front', ['SEOData' => $SEOData]);
    }
}
