<?php

namespace App\Livewire\Pages\UseCases;

use Livewire\Component;
use RalphJSmit\Laravel\SEO\Support\SEOData;

class SpecialNeedsDependants extends Component
{
    public function render()
    {
        $SEOData = new SEOData(
            title: 'Term Life Insurance for Special Needs Dependants - CostPlus Life Insurance',
            description: 'Learn how term life insurance can protect Special Needs Dependants. Get personalized quotes from Canada\'s top providers.',
        );

        return view('livewire.pages.use-cases.special-needs-dependants')
            ->layout('layouts.front', ['SEOData' => $SEOData]);
    }
}
