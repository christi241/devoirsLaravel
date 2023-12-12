
<!-- resources/views/apprenant.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formations</title>
    <link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}">
    <script src="{{url('js/bootstrap.bundle.min.js')}}" ></script>
                  <!-- END Bootstrap -->

                  <!-- additional  CSS  -->
    <link rel="stylesheet" href="{{url('css/style.css')}}">
</head>
<body>

           <!--  Header -->
           <div class="container-fluid p-0">
    <img src = "{{url('img/banner.jpg')}}" style="width: 100%;" >
</div>
             <!-- End Header -->

            <!--   Navbar -->
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                          <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">About Us</a>
                        </li>

                                <li class="nav-item">
                          <a class="nav-link" href="#">Archives</a>
                        </li>
                                <li class="nav-item">
                          <a class="nav-link" href="#">Courses</a>
                        </li>
                                <li class="nav-item">
                          <a class="nav-link" href="#">Projects</a>
                        </li>
                                        <li class="nav-item">
                          <a class="nav-link" href="#">News</a>
                        </li>

                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Formations
                          </a>
                          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Web Developpement</a></li>
                            <li><a class="dropdown-item" href="#">Mobile Developpement</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Desktop Developpement</a></li>
                            <li><a class="dropdown-item" href="#">Data Sciences</a></li>

                          </ul>
                        </li>
                                    <li class="nav-item">
                          <a class="nav-link" href="#">Contact Us</a>
                        </li>
                      </ul>
                      <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                      </form>
                    </div>
                  </div>
              </nav>
            <!--  End Navbar-->


            <h1 class="text-center">Liste des formation</h1>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">nom-formation</th>
      <th scope="col">lieu-formation</th>
      <th scope="col">date-formation</th>
      <th scope="col">modifier</th>
      <th scope="col">ajouter</th>
      <th scope="col">suprimer</th>
    </tr>
  </thead>
  <tbody>
  @foreach($listes as $formation)
  <tr>
      <th scope="row">#</th>
      <td>{{ $formation->nom_for}}</td>
     <td>{{ $formation->lieu_for}}</td>
     <td>{{ $formation->date}}</td>
     <td><button class="btn btn-success">modifier</button></td>
     <td><button class="btn btn-danger">ajouter</button></td>
     <td><button class="btn btn-info">suprimer</button></td>
</tr>
@endforeach

</tbody>
</table>

<br>


<div class = "container-fluid p-0" >
 <div class ="row" style = "margin-top: 20px;">
<footer class="bg-dark text-center text-white">
  <!-- Grid container -->
  <div class="container p-4 pb-0">
    <!-- Section: Form -->
    <section class="">
      <form action="">
        <!--Grid row-->
        <div class="row d-flex justify-content-center">
          <!--Grid column-->
          <div class="col-auto">
            <p class="pt-2">
              <strong>Sign up for our newsletter</strong>
            </p>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-5 col-12">
            <!-- Email input -->
            <div class="form-outline form-white mb-4">
              <input type="email" id="form5Example2" class="form-control" />
              <label class="form-label" for="form5Example2">Email address</label>
            </div>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-auto">
            <!-- Submit button -->
            <button type="submit" class="btn btn-outline-light mb-4">
              Subscribe
            </button>
          </div>
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </form>
    </section>
    <!-- Section: Form -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2020 Copyright:
    <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
  </div>
  <!-- Copyright -->
</footer>
</div>
</div>



</body>
</html>
