<?php

namespace App\Livewire\Pages\UseCases;

use Livewire\Component;
use RalphJSmit\Laravel\SEO\Support\SEOData;

class DivorceChildSupport extends Component
{
    public function render()
    {
        $SEOData = new SEOData(
            title: 'Term Life Insurance for Divorce Child Support - CostPlus Life Insurance',
            description: 'Learn how term life insurance can protect Divorce Child Support. Get personalized quotes from Canada\'s top providers.',
        );

        return view('livewire.pages.use-cases.divorce-child-support')
            ->layout('layouts.front', ['SEOData' => $SEOData]);
    }
}
