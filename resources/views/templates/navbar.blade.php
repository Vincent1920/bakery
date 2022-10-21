<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>bob</title>
  <link rel="stylesheet" href="css/navbaratas.css">
  <link rel="stylesheet" href="css/navbar.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  <link rel="shortcut icon" href="img/icon1.svg">
  <link rel="stylesheet" href="css/style.css">  
  <link rel="stylesheet" href="css/login_register.css">  


      {{-- bootstrap icons --}}
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
      <!-- Bootstrap core CSS --><!-- CSS only -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
      <!-- Custom styles for this template -->
<link href="dashboard.css" rel="stylesheet">
</head>
<body>

  <nav>
    <a href="/">
      <img class="Logo1" src="img/icon1.svg" alt="Logo Image"> 
    </a>
    <ul>
       <li><a href="/news">news</a></li>
      <li><a href="/roti" >menu</a></li>
      
      <li>
        <a class="nav-link " href="/login" class="nav-link"><i class="bi bi-box-arrow-in-right"></i>login</a>
      </li>

    </ul>
   </nav>
   
  
@yield('body')
  
<div class="bob4">
  <div class=" bob_flex">

          <div class="ig">
            <a href="https://www.instagram.com/vincent_6010/">
              <img class="img_ig" src="img/instagram.png">
            </a>
          </div>
           <div class="igfb">

           </div>
          <div class="fb">
            <a href="">
              <img class="bob_fb" src="img/fb.png">
            </a>
          </div>         
        </div>
  </div>
</div>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<script src="/js/dashboard.js"></script>
</body>
 
</html>

 
