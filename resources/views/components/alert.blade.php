<div
  x-data="{
    open: true
  }"
>
  <div>Jora jora: {{ $iconPosition }}</div>
  <div 
    @class([
      Arr::toCssClasses($classArray),
      'relative flex',
      'flex-row-reverse' => $dismissable && strpos($iconClass, 'left') !== false
    ])
    role="alert"
  >
    <div class="basis-full">{{ $slot }}</div>
    @if ($dismissable)
      <div class="inline-block size-6"></div>
    @endif
    @if ($dismissable)
      <div class="absolute inset-0">
        <x-button 
          @class([
            "p-2 absolute transition-all my-auto",
            $iconClass
          ])
        >
          {!! str_replace('%%class%%', 'size-6', config('components.icons.close'))!!}
        </x-button>
      </div>
    @endif
  </div>
</div>

</div>