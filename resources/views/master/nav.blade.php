<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #FFE4B5">
 
    <a class="navbar-brand" href="#"></a>
    <img src="/bg/smk1.png" width="45" height="30" class="d-inline-block align-top"></a>
 
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
 
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
 
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/about">Tentang</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/datasiswa">Data Murid</a>
        </li>
      </ul>
 
      <a href="{{route('login')}}" class="btn btn-outline-success mr-3" style="font-size: 10px">Login</a>
      <a href="{{route('logout')}}" class="btn btn-outline-danger" style="font-size: 10px">Logout</a>
 
   </div>
 
</nav>