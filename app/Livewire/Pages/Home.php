<?php

namespace App\Livewire\Pages;

use Livewire\Component;
use RalphJSmit\Laravel\SEO\Support\SEOData;

class Home extends Component
{
    public function render()
    {
        $SEOData = new SEOData(
            title: 'Compare Term Life Insurance At True Cost - CostPlus Life Insurance',
            description: 'Term Life at True Cost is fully online, fully transparent, and built for the next generation of Canadians.',
        );

        return view('livewire.pages.home')
            ->layout('layouts.front', ['SEOData' => $SEOData]);
    }
}
