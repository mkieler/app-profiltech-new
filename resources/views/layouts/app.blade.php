<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" {{ Auth::user()->theme == 'auto' ? '' : 'data-theme=' . Auth::user()->theme }}>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="color-scheme" content="light dark">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="robots" content="noindex, nofollow">

        <title>@hasSection('page_title') @yield('page_title') - @endif {{ config('app.name', 'GoLearn Toolbox') }}</title>

        @vite(['resources/scss/global/app.scss', 'resources/js/app.js', 'resources/scss/alert.scss'])

        @stack('styles')
        @stack('scripts-head')
    </head>
    <body>
        <div class="application-container">
            <aside class="sidebar">

            </aside>

            <div class="content">
                @include('layouts.partials.header')                
                <main>

                    @yield( 'content' )
                </main>
            </div>
            
        </div>

        @stack('styles-footer')
        @stack('scripts')

    </body>
</html>
</html>
