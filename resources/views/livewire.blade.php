<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel | Livewire</title>
        <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
        integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" /> -->
        <link rel="stylesheet" href="{{url('css/app.css')}}">
        <livewire:styles />
    </head>
    <body  class="flex justify-center">
        
        <!-- @livewire('counter') -->
        <livewire:comments  />
        <!-- <script src="{{ url('vendor/livewire/livewire.js') }}"></script> -->
        <livewire:scripts />
    </body>
</html>
