<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('website.includes.style')
    <title>@yield('title')</title>
</head>
<body>
  @include('website.includes.header')
  @yield('page-contet')
  @include('website.includes.footer')
  @include('website.includes.script')
</body>
</html>