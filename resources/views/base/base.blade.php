<!DOCTYPE html>
<html lang="ru">
@include('base.head')
<body>
    <div class="flex flex-col justify-between min-h-screen">
        
        @include('includes.header')

        <main class="grow">
            @yield('content')
        </main>

        @include('includes.footer')
    </div>
    @livewireScripts
</body>
</html>