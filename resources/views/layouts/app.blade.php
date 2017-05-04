<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TodoMVC - @yield('title')</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
  @section('navbar')
      <nav class="navbar navbar-inverse" role="navigation">
    <div class="navbar-header">
      
       <a class="navbar-brand" ui-sref="home" href="https://laravel-michaelgermini.c9users.io">TodoMVC</a> 
      
    </div>
    <ul class="nav navbar-nav">
    </ul>
            <ul class="nav navbar-nav">
          <li ui-sref-active="active"><a href="{{ url('contact') }}" ui-sref="contacts">Contacts</a></li>
          <li ui-sref-active="active"><a href="https://laravel-michaelgermini.c9users.io/read" ui-sref="read">Read</a></li>
          <li ui-sref-active="active"><a href="https://laravel-michaelgermini.c9users.io/post" ui-sref="post">Post</a></li>
          <li ui-sref-active="active"><a href="https://laravel-michaelgermini.c9users.io/index" ui-sref="index">Index</a></li>
          <li ui-sref-active="active"><a href="https://laravel-michaelgermini.c9users.io/tasks" ui-sref="tasks">Tasks</a></li>
        </ul>
        <div class="collpase navbar-collapse navbar-right">
        </div>
    <!--/.navbar-collapse -->
  </nav>
  @show

  
  
  
      <div class="container-fluid">
<div class="row">
    <div class="col-lg-8">
      
      
        
         @yield('content')
        
    </div>  </div>  </div>
    
     @yield('footer')
     
    <footer class="navbar navbar-inverse navbar-fixed-bottom">
    <div class="container" style="text-align:center;">
      <p class="navbar-text">&copy; 2017 - Michael Germini</p>
    </div>
  </footer>
</body>
</html>