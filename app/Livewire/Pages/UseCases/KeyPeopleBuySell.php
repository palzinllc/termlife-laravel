<?php

namespace App\Livewire\Pages\UseCases;

use Livewire\Component;
use RalphJSmit\Laravel\SEO\Support\SEOData;

class KeyPeopleBuySell extends Component
{
    public function render()
    {
        $SEOData = new SEOData(
            title: 'Term Life Insurance for Key People Buy Sell - CostPlus Life Insurance',
            description: 'Learn how term life insurance can protect Key People Buy Sell. Get personalized quotes from Canada\'s top providers.',
        );

        return view('livewire.pages.use-cases.key-people-buy-sell')
            ->layout('layouts.front', ['SEOData' => $SEOData]);
    }
}
