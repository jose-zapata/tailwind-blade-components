@props([
  'type' => 'black',
  'id' => 'dropdown',
  'label'
])
<div
  id="{{ $id }}"
  class="relative"
  x-data="{ 
    open: false,
    get isOpen() { return this.open },
    toggle() { 
      this.open = !this.open 
    }
  }"
>
  <x-header.navbar.item @class([$attributes['class']]) x-on:click.stop="toggle()" :type="$type">
    <div class="flex">
      <div class="mr-2">{{ $label }}</div>
      <div :class="{ 'rotate-90': isOpen }" class="ml-auto transition-transform"><i class="fa-solid fa-caret-right"></i></div>
    </div>
  </x-header.navbar.item>
  <template x-if="isOpen">
    <x-header.navbar class="static md:absolute top-[102%] border flex-col">
      {{ $slot }}
    </x-header.navbar>
  </template>
</div>
