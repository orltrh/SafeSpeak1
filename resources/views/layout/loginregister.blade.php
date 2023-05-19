<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'SafeSpeaks')</title>
    <!-- Font Icon -->
    <link rel="stylesheet" href="{{ url('assets/fonts/material-icon/css/material-design-iconic-font.min.css') }}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{ url('assets/css/style_login.css') }}">

    @section('head')

</head>
@section('body')
<body>
  {{-- Content --}}
  @section('content')
  @show
</body>
</html>
