<!DOCTYPE html>
<html lang="{{$language}}">

<head>
   <meta charset="{{$charset}}">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   @section("metadata")

   <meta name="csrf-token" content="{{ csrf_token() }}">
   @show

   <title>{{$title}}</title>
   @section("css")

   <link href="{{__url('__one/css/bootstrap.min.css')}}" rel="stylesheet">
   <link href="{{__url('__one/css/materialdesignicons.min.css')}}" rel="stylesheet">
   <link href="{{__url('__one/css/layout-ui.css')}}" rel="stylesheet">
   @show
</head>

<body>
   <main role="one" class="{{$one->skin["layout"]}} {{$one->skin["media"]}} {{$one->skin["style"]}}">

      @yield("body", 'Content Page')
   </main>

   @section("js")

   <script src="{{__url('__one/js/jquery-360.min.js')}}"></script>
   <script src="{{__url('__one/js/bootstrap.bundle.min.js')}}"></script>
   <script src="{{__url('__one/js/layout-ui.js')}}"></script>
   @show
</body>
</html>
