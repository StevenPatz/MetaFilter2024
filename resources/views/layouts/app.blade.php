<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>{{ $title ?? 'Untitled' }}</title>

@include('layouts.partials.styles')
@include('layouts.partials.social-media-meta-tags')
@include('layouts.partials.favicons')

</head>
<body>

@include('layouts.partials.skip-navigation')

@include('layouts.partials.site-header')
@include('layouts.navigation.global-navigation')
@include('layouts.navigation.primary-navigation')
@include('layouts.navigation.secondary-navigation')

<div class="columns container">
    <!-- He's the DJ; I'm the wrapper -->
    <main class="main-contents column is-four-fifths" id="main-contents">
        @include('layouts.partials.flash-messages')
        @yield('contents')
    </main>
    <aside class="column sidebar">
        sidebar
    </aside>
</div>

@include('layouts.partials.site-footer')
@include('layouts.partials.scripts')

</body>
</html>
