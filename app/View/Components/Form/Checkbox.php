<?php

namespace App\View\Components\Form;

use App\Exceptions\MissingArgumentException;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Checkbox extends Component
{
    /**
     * @throws MissingArgumentException
     */
    public function __construct(
        public string $label,
        public ?string $name = null,
        public ?string $id = null,
        public mixed $value = null,
        public bool $remember = false,
        public string $labelClass = '',

        public bool $hideLabel = false,
        public bool $noName = false,
    ) {
        if (is_null($this->id)) {
            $this->id = rand();
        }

        if (is_null($this->name) && !$this->noName) {
            throw new MissingArgumentException("Missing argument $name, either pass it or set noName to true.");
        }
    }

    public function getValue()
    {
        if ($this->remember && !is_null($this->name) && !is_null(old($this->name))) {
            return old($this->name);
        }

        return $this->value;
    }

    public function render(): View
    {
        return view('components.form.checkbox');
    }
}
