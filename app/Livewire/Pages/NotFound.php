<?php

namespace App\Livewire\Pages;

use Livewire\Component;
use RalphJSmit\Laravel\SEO\Support\SEOData;

class NotFound extends Component
{
    public function render()
    {
        $SEOData = new SEOData(
            title: '404 - Page Not Found - CostPlus Life Insurance',
            description: 'The page you\'re looking for doesn\'t exist.',
        );

        return view('livewire.pages.not-found')
            ->layout('layouts.front', ['SEOData' => $SEOData]);
    }
}
