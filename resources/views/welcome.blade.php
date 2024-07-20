<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"">

<head>

  <meta charset='utf-8'>
  <meta content='width=device-width, initial-scale=1' name='viewport'>

  <title>Laravel</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <!-- Fonts -->
  <link href='https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap' rel='stylesheet'>

  <!-- Styles -->

  <style>
    body {
      font-family: 'Nunito', sans-serif;
    }
  </style>
</head>

<body class='antialiased max-w-lg m-auto'>
  <x-button class='px-10 py-10'>NAKED</x-button>
  <x-button class='mb-0 rounded-none' type='button' variant='success'>success</x-button>
  <x-button type='button' variant='primary'>primary</x-button>
  <x-button variant='secondary' pill>secondary</x-button>
  <x-button variant='danger'>danger</x-button>
  <x-button variant='warning'>warning</x-button>
  <x-button variant='info'>info</x-button>
  <x-button variant='light'>light</x-button>
  <x-button variant='dark'>dark</x-button>
  <x-button variant='outline-success'>outline-success</x-button>
  <x-button variant='outline-primary'>outline-primary</x-button>
  <x-button variant='outline-secondary'>outline-secondary</x-button>
  <x-button variant='outline-danger'>outline-danger</x-button>
  <x-button variant='outline-warning'>outline-warning</x-button>
  <x-button variant='outline-info'>outline-info</x-button>
  <x-button variant='outline-light'>outline-light</x-button>
  <x-button variant='outline-dark'>outline-dark</x-button>
  <x-alert variant='success' dismissable>success</x-alert>
  <x-alert variant='primary' icon-position="left" dismissable class="p-12 text-center w-1/2">primary y la alerta de la concha de su madre y la reputisima madre que lo remil parió</x-alert>
  <x-alert variant='secondary' class="p-6" dismissable>secondary</x-alert>
  <x-alert variant='info' dismissable>info</x-alert>
  <x-alert variant='danger' dismissable>danger</x-alert>
  <x-alert variant='warning' dismissable>warning</x-alert>
  <x-alert variant='light' dismissable>light</x-alert>
  <x-alert variant='dark' dismissable>dark</x-alert>
  <x-alert variant='success'>success</x-alert>
  <x-alert variant='primary'>primary</x-alert>
  <x-alert variant='secondary'>secondary</x-alert>
  <x-alert variant='info'>info</x-alert>
  <x-alert variant='danger'>danger</x-alert>
  <x-alert variant='warning'>warning</x-alert>
  <x-alert variant='light'>light</x-alert>
  <x-alert variant='dark'>dark</x-alert>
</body>
</html>

