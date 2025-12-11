<?php

namespace App\Livewire\Pages\UseCases;

use Livewire\Component;
use RalphJSmit\Laravel\SEO\Support\SEOData;

class SinglesYoungPros extends Component
{
    public function render()
    {
        $SEOData = new SEOData(
            title: 'Term Life Insurance for Singles Young Pros - CostPlus Life Insurance',
            description: 'Learn how term life insurance can protect Singles Young Pros. Get personalized quotes from Canada\'s top providers.',
        );

        return view('livewire.pages.use-cases.singles-young-pros')
            ->layout('layouts.front', ['SEOData' => $SEOData]);
    }
}
