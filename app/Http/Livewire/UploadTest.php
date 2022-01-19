<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Filament\Forms;

class UploadTest extends Component implements Forms\Contracts\HasForms
{
    use Forms\Concerns\InteractsWithForms;

    public function render()
    {
        return view('livewire.upload-test');
    }

    protected function getFormSchema(): array
    {
        return [
            Forms\Components\TextInput::make('name'),
            Forms\Components\FileUpload::make('attachment')
        ];
    }
}
