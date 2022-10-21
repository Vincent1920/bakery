<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
  <link rel="stylesheet" href="css/dashboard.css">  
   
  <!-- Bootstrap core CSS --><!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

 {{-- trix editor --}}
 <link rel="stylesheet" type="text/css" href="/css/trix.css">
 <script type="text/javascript" src="/js/trix.js"></script>
 
   <!-- Custom styles for this template -->
   <link href="dashboard.css" rel="stylesheet">

    <title>bakery</title>
   
  </head>
  <body>
 @include('dashboard.sidebar')
 <div class="container-fluid">
   <div class="row">
     <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">
              <span data-feather="home"></span>
              Dashboard
            </a>
          </li>   
          <li class="nav-item">
            <a class="nav-link" href="/posts">
              <span data-feather="file"></span>
              post
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="shopping-cart"></span>
              menu
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/news">
              <span data-feather="file-text"></span>
              news 
            </a>
          </li>
        </ul>
      </div>
    </nav>
    
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      
      
      <table class="table table-striped table-sm">
          @yield('container')
          
        </table>
      </div>
    </main>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/bob/bob.js"></script>
  </body>
</html>
