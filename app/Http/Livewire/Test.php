<?php

namespace App\Http\Livewire;

use Closure;
use Filament\Forms;
use Livewire\Component;

class Test extends Component implements Forms\Contracts\HasForms
{

    use Forms\Concerns\InteractsWithForms;

    public $date, $title;

    protected function getFormSchema(): array
    {
        return [
            Forms\Components\DateTimePicker::make('date')->reactive(),
            Forms\Components\TextInput::make('title')->visible(fn(Closure $get) => $get('date')),
        ];
    }

    public function render()
    {
        return view('livewire.test');
    }
}
