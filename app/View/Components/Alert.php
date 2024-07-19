<?php

namespace App\View\Components;

use Illuminate\Support\Arr;
use Illuminate\View\Component;

class Alert extends Component
{
    private $class;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        public string $variant = '',
        public string $iconPosition = '',
        public bool $dismissable = false
    ) {
        $variants = config('components.alert.variants');
        $this->class = $variants[$variant] ?? '';
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $data = $this->data();
        $iconClass = match ($data['iconPosition']) {
            'right top', 'top', 'right' => 'right-0 top-0',
            'right bottom', 'bottom' => 'right-0 bottom-0',
            'right center', 'center' => 'right-0 inset-x-0',
            'left top', 'left' => 'left-0 top-0',
            'left bottom' => 'left-0 bottom-0',
            'left center' => 'left-0 inset-x-0',
            default => 'right-0 top-0',
        };
        $classArray = explode(' ', $data['attributes']['class']);
        $classArray[] = $this->class;
        $classArray[config('components.alert.padding.x')] = empty(Arr::where($classArray, fn ($value) => substr($value, 0, 2) == 'p-' || in_array(substr($value, 0, 3), ['px-', 'pl-', 'pr-'])));
        $classArray[config('components.alert.padding.y')] = empty(Arr::where($classArray, fn ($value) => substr($value, 0, 2) == 'p-' || in_array(substr($value, 0, 3), ['py-', 'pt-', 'pb-'])));
        $classArray[config('components.alert.margin.bottom')] = empty(Arr::where($classArray, fn ($value) => substr($value, 0, 2) == 'm-' || in_array(substr($value, 0, 3), ['my-', 'mb-'])));
        $classArray[config('components.alert.rounded')] = empty(Arr::where($classArray, fn ($value) => substr($value, 0, 7) == 'rounded'));
        return view('components.alert', ['iconClass' => $iconClass, 'classArray' => $classArray]);
    }
}
