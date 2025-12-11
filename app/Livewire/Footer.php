<?php

namespace App\Livewire;

use Livewire\Component;

class Footer extends Component
{
    public $useCases = [
        ['name' => 'Families', 'path' => '/use-cases/families'],
        ['name' => 'Singles & Young Pros', 'path' => '/use-cases/singles-young-pros'],
        ['name' => 'Homeowners', 'path' => '/use-cases/homeowners'],
        ['name' => 'Business Owners', 'path' => '/use-cases/business-owners'],
        ['name' => 'Dentists & Professionals', 'path' => '/use-cases/dentists-professionals'],
        ['name' => 'Key People & Buy-Sell', 'path' => '/use-cases/key-people-buy-sell'],
        ['name' => 'Debt & Loans', 'path' => '/use-cases/debt-loans'],
        ['name' => 'Divorce & Child Support', 'path' => '/use-cases/divorce-child-support'],
        ['name' => 'Newcomers & Immigrants', 'path' => '/use-cases/newcomers-immigrants'],
        ['name' => 'Special-Needs Dependants', 'path' => '/use-cases/special-needs-dependants'],
    ];

    public function render()
    {
        return view('livewire.footer');
    }
}
