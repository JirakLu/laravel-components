<?php

namespace App\View\Components\Form;

use App\Enums\FormMethods;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Form extends Component
{

    public function __construct(
        public string      $action,
        public FormMethods $method = FormMethods::POST,
        public ?bool        $noCsrf = null,
    )
    {
    }

    public function isBasicMethod(): bool
    {
        return $this->method === FormMethods::POST || $this->method === FormMethods::GET;
    }

    public function render(): View
    {
        return view('components.form.form');
    }
}
