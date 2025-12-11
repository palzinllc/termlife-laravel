<?php

namespace App\Livewire;

use Livewire\Component;

class InsurancePartners extends Component
{
    public $partners = [
        ['name' => 'Manulife', 'logo' => 'manulife.png'],
        ['name' => 'Canada Life', 'logo' => 'canada-life.png'],
        ['name' => 'Industrial Alliance', 'logo' => 'industrial-alliance.png'],
        ['name' => 'RBC Insurance', 'logo' => 'rbc-insurance.png'],
        ['name' => 'Empire Life', 'logo' => 'empire-life.png'],
        ['name' => 'Desjardins', 'logo' => 'desjardins.png'],
        ['name' => 'Equitable', 'logo' => 'equitable.png'],
        ['name' => 'BMO Insurance', 'logo' => 'bmo-insurance.png'],
        ['name' => 'Beneva', 'logo' => 'beneva.png'],
    ];

    public function render()
    {
        return view('livewire.insurance-partners');
    }
}
