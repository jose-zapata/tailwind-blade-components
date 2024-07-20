<div
  x-data="{
    open: true,
    toggle() { 
      console.log('Toggle');
      this.open = !this.open
    }
  }"
>
  <div 
    @class([
      Arr::toCssClasses($classArray),
      'relative flex transition',
      'flex-row-reverse' => $dismissable && strpos($iconClass, 'left') !== false
    ])
    x-show='open'
    role="alert"
  >
    <div class="basis-full">{{ $slot }}</div>
    @if ($dismissable)
      <div class="inline-block size-6"></div>
    @endif
    @if ($dismissable)
      <div class="absolute inset-0">
        <x-button 
          x-on:click="toggle()"
          @class([
            "p-1 absolute transition-all my-auto opacity-70 hover:opacity-100",
            $iconClass
          ])
        >
          {!! str_replace('%%class%%', 'size-8', config('components.icons.close'))!!}
        </x-button>
      </div>
    @endif
  </div>
</div>
