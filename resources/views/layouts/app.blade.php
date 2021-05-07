
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel | Livewire</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
        integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />
        <link rel="stylesheet" href="{{url('css/app.css')}}">
        <livewire:styles />

    </head>
    <body  class="flex flex-wrap justify-center">
        <div class="flex justify-between w-full px-4 bg-purple-900 text-white">
            <a class="mx-3 py-4" href="{{ url('/') }}">Home</a>
            <div class="py-4">
                @if(Auth::check())
                    <livewire:logout />
                @else 
                    <a class="mx-3" href="{{ url('/login') }}">Login</a>
                    <a class="mx-3" href="{{ url('/register') }}">Register</a>
                @endif

                <!-- <a class="mx-3" href="{{ url('/comments') }}">comments</a> -->
            </div>
        </div>
        <div class="w-full justify-center my-10 flex">
            {{ $slot }}
        </div>
        
        <livewire:scripts />
        <script src="{{url('js/app.js')}}"></script>
    </body>
</html>
