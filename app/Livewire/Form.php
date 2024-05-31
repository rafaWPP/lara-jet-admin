<?php

namespace App\Livewire;

use Livewire\Component;
use Laravel\Jetstream\InteractsWithBanner;

class Form extends Component
{
         public $confirmingUserDeletion = false;

    public function confirmUserDeletion()
    {
        $this->confirmingUserDeletion = true;
    }

public $showModal = false;
    public $name;

    public function openModal()
    {
        $this->showModal = true;
    }

    public function closeModal()
    {
        $this->showModal = false;
    }
    
      public function alertSuccess()
    {
        $this->dispatch("saved");
    }
      public function alertWarning()
    {
           $this->dispatch("saved-atemp");
    }
      public function alertError()
    {
           $this->dispatch("saved-error");
    }

    public function render()
    {
        return view('livewire.form');
    }
}
