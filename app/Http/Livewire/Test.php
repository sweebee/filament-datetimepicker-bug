<?php

namespace App\Http\Livewire;

use Closure;
use Filament\Forms;
use Livewire\Component;

class Test extends Component implements Forms\Contracts\HasForms
{

    use Forms\Concerns\InteractsWithForms;

    public $items = [];

    protected function getFormSchema(): array
    {
        return [
            Forms\Components\Repeater::make('items')->schema([
                Forms\Components\FileUpload::make('image')
            ])->cloneable()
        ];
    }

    public function submit()
    {
            dd($this->form->getState());
    }

    public function render()
    {
        return view('livewire.test');
    }
}
