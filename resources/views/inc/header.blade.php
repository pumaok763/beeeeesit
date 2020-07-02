
<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
  <h5 class="my-0 mr-md-auto font-weight-normal">Home Work</h5>
  <nav class="my-2 my-md-0 mr-md-3">
    <a class="p-2 text-dark" href="{{route ('home')}}">Home</a>
    <a class="p-2 text-dark" href="{{route ('forms')}}">Forms</a>
    @if(Request::is('/'))
    <a class="p-2 text-dark" href="{{route ('login')}}">Login</a>
    @endif
    @if(Request::is('/'))  
    <a class="p-2 text-dark" href="{{route ('register')}}">Register</a>
    @endif


     <a class="p-2 text-dark" href="{{route ('navba')}}">menu</a>
  </nav>
  
 <!-- <div class="dropdown">
    <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Menu
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li class="dropdown-header">Авторизация</li>
      <li><a href="#">Register</a></li>
      <li><a href="#">Login</a></li>
      <li class="divider"></li>      
    </ul>
  </div>-->

</div>