<?php

namespace App\Livewire\Pages;

use Livewire\Component;
use RalphJSmit\Laravel\SEO\Support\SEOData;

class HowToChoose extends Component
{
    public function render()
    {
        $SEOData = new SEOData(
            title: 'How to Choose the Right Term Life Insurance Policy - CostPlus Life Insurance',
            description: 'Follow these steps to find the perfect term life insurance policy for your needs. Expert guidance for Canadian families.',
        );

        return view('livewire.pages.how-to-choose')
            ->layout('layouts.front', ['SEOData' => $SEOData]);
    }
}
