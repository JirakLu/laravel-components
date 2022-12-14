<?php

namespace App\View\Components\Form;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FormGroup extends Component
{
    public function __construct(public string $legend)
    {
    }

    public function render(): View
    {
        return view('components.form.form-group');
    }
}
