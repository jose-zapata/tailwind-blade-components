<?php

namespace App\View\Components;

use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Illuminate\View\Component;

class Button extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    private $class;
    private $isPill;
    public function __construct($variant = '', $pill = false)
    {
        $variants = config('components.button.variants');
        $this->class = $variants[$variant] ?? '';
        $this->isPill = (bool)$pill;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        // return view('components.button', ['class' => $this->class]);
        return function (array $data) {
            $classArray = explode(' ', $data['attributes']['class']);
            $classArray[] = $this->class;
            $classArray[config('components.button.padding.x')] = empty(Arr::where($classArray, fn ($value) => substr($value, 0, 2) == 'p-' || in_array(substr($value, 0, 3), ['px-', 'pl-', 'pr-'])));
            $classArray[config('components.button.padding.y')] = empty(Arr::where($classArray, fn ($value) => substr($value, 0, 2) == 'p-' || in_array(substr($value, 0, 3), ['py-', 'pt-', 'pb-'])));
            $classArray[config('components.button.margin.bottom')] = empty(Arr::where($classArray, fn ($value) => substr($value, 0, 2) == 'm-' || in_array(substr($value, 0, 3), ['my-', 'mb-'])));
            $classArray[config('components.button.rounded')] = !$this->isPill && empty(Arr::where($classArray, fn ($value) => substr($value, 0, 7) == 'rounded'));
            $classArray[config('components.button.pill')] = $this->isPill;
            $classArray[config('components.button.transition')] = empty(Arr::where($classArray, fn ($value) => substr($value, 0, 10) == 'transition'));
            $data['attributes']['class'] = trim(Arr::toCssClasses($classArray));

            return 'components.button';
        };
    }
}
