@props([
  'type' => '',
  'noborder' => false,
  'link' => false
])
@switch($type)
  @case('primary')
    @php 
      $bgcolor = 'bg-blue-500 hover:bg-blue-700 text-white';
    @endphp
  @break
  @case('primary-outline')
    @php 
      $bordercolor = 'border-blue-500';
      $textcolor = 'text-blue-500';
      $bghovercolor = 'hover:bg-blue-500';
      $texthovercolor = 'hover:text-white';
    @endphp
  @break
  @case('success')
    @php 
      $bgcolor = 'bg-green-500';
      $bghovercolor = 'hover:bg-green-700';
      $textcolor = 'text-white';
    @endphp
  @break
  @case('success-outline')
    @php 
      $bordercolor = 'border-green-500';
      $textcolor = 'text-green-500';
      $bghovercolor = 'hover:bg-green-500';
      $texthovercolor = 'hover:text-white';
    @endphp
  @break
  @case('danger')
    @php 
      $bgcolor = 'bg-red-500';
      $bghovercolor = 'hover:bg-red-700';
      $textcolor = 'text-white';
    @endphp
  @break
  @case('danger-outline')
    @php 
      $bordercolor = 'border-red-500';
      $textcolor = 'text-red-500';
      $bghovercolor = 'hover:bg-red-500';
      $texthovercolor = 'hover:text-white';
    @endphp
  @break
  @case('warning')
    @php 
      $bgcolor = 'bg-orange-500';
      $bghovercolor = 'hover:bg-orange-700';
      $textcolor = 'text-white';
    @endphp
  @break
  @case('warning-outline')
    @php 
      $bordercolor = 'border-orange-500';
      $textcolor = 'text-orange-500';
      $bghovercolor = 'hover:bg-orange-500';
      $texthovercolor = 'hover:text-white';
    @endphp
  @break
@endswitch
@php
  $border = $noborder ? '' : 'border';
@endphp
@if ($link)
  <a 
    href="#"  
    @class([
      $attributes['class'],
      "inline-block py-2 px-4 rounded {$bgcolor} {$textcolor} {$bordercolor} {$bghovercolor} {$texthovercolor} {$borderhovercolor} {$border}"
    ])
  >{{ $slot }}</a> 
@else
  <button @class([
    $attributes['class'],
    "inline-block py-2 px-4 rounded {$bgcolor} {$textcolor} {$bordercolor} {$bghovercolor} {$texthovercolor} {$borderhovercolor} {$border}"
  ])>{{ $slot }}</button> 
@endif