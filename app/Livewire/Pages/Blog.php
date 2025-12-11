<?php

namespace App\Livewire\Pages;

use Livewire\Component;
use RalphJSmit\Laravel\SEO\Support\SEOData;

class Blog extends Component
{
    public function render()
    {
        $SEOData = new SEOData(
            title: 'Life Insurance Insights & Tips - CostPlus Blog',
            description: 'Expert advice, tips, and guides to help you make informed decisions about term life insurance in Canada.',
        );

        return view('livewire.pages.blog')
            ->layout('layouts.front', ['SEOData' => $SEOData]);
    }
}
