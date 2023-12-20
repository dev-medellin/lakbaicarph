<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="assets/img/favicon.png">
        <title>{{ $title ?? 'Page Title' }} | Page</title>
        @isset($style)
        @foreach ($style['css'] as $item)
            <link rel="stylesheet" type="text/css" href="{{url('/assets/'.$item)}}"/>
        @endforeach
    @endisset
    </head>
    <body>
        <div class="main-wrapper">
            @include('layouts.templates.header')
            {{ $slot }}
            @include('layouts.templates.footer')
            <div class="progress-wrap active-progress">
                <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919px, 307.919px; stroke-dashoffset: 228.265px;"></path>
                </svg>
            </div>
        </div>
        <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
        @isset($style)
            @foreach ($style['js'] as $item)
                <script type="text/javascript" src="{{url('/assets/'.$item)}}"></script>
            @endforeach
        @endisset
        @livewireScripts
    </body>
</html>
