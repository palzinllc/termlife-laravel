<?php

namespace App\Livewire\Pages;

use Livewire\Component;
use RalphJSmit\Laravel\SEO\Support\SEOData;

class CodeOfConduct extends Component
{
    public function render()
    {
        $SEOData = new SEOData(
            title: 'Code of Conduct - CostPlus Life Insurance',
            description: 'Our commitment to ethical practices and professional standards in serving Canadian families.',
        );

        return view('livewire.pages.code-of-conduct')
            ->layout('layouts.front', ['SEOData' => $SEOData]);
    }
}
