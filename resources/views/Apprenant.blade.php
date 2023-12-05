





<!DOCTYPE html>
<html>
<head>
    <title>Liste des apprenant</title>
</head>
<link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}">
    <script src="{{url('js/bootstrap.bundle.min.js')}}" ></script>
                  <!-- END Bootstrap -->

                  <!-- additional  CSS  -->
    <link rel="stylesheet" href="{{url('css/style.css')}}">
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

    <h1 class="text-center">Liste des Apprenants</h1>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">prenom</th>
      <th scope="col">nom</th>
      <th scope="col">age</th>
    </tr>
  </thead>
  <tbody>
  @foreach($listes as $formation)
  <tr>
      <th scope="row">#</th>
      <td>{{ $formation->prenom}}</td>
     <td>{{ $formation->nom}}</td>
     <td>{{ $formation->age}}</td>
</tr>
@endforeach

</tbody>
</table>

</body>
</html>
