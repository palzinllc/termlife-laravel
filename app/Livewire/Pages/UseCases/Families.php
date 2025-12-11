<?php

namespace App\Livewire\Pages\UseCases;

use Livewire\Component;
use RalphJSmit\Laravel\SEO\Support\SEOData;

class Families extends Component
{
    public function render()
    {
        $SEOData = new SEOData(
            title: 'Term Life Insurance for Families - CostPlus Life Insurance',
            description: 'Learn how term life insurance can protect Families. Get personalized quotes from Canada\'s top providers.',
        );

        return view('livewire.pages.use-cases.families')
            ->layout('layouts.front', ['SEOData' => $SEOData]);
    }
}
