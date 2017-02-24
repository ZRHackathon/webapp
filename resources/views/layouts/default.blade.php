<!DOCTYPE HTML>
<html>
<head>
  @include('includes.head')
</head>
<body>
  <header class="row">
    @include('includes.header')
  </header>

  <div class="container">

    <div id="main"class="row">
      @yield('content')
    </div>

    <footer class="row">
      @include('includes.footer')
    </footer>
  </div>
</body>
</html>
