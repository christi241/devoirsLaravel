<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}">
    <script src="{{url('js/bootstrap.bundle.min.js')}}" ></script>
                  <!-- END Bootstrap -->

                  <!-- additional  CSS  -->
    <link rel="stylesheet" href="{{url('css/style.css')}}">
</head>
<body>
    <h1>candidats</h1>
<tbody>
  @foreach($listes_Ca as $candidats)
  <tr>
      <th scope="row">#</th>
      <td>{{ $candidats->prenom}}</td>
     <td>{{ $candidats->nom}}</td>
     <td>{{ $candidats->parti}}</td>
     <td><button class="btn btn-success">modifier</button></td>
     <td><button class="btn btn-danger">ajouter</button></td>
     <td><button class="btn btn-info">suprimer</button></td>

</tr>
@endforeach

</body>
</html>




