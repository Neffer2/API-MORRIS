<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Home</title>
</head>
<body>
    <div class="container">
        <div class="row my-5"> 
            <div class="col-md-6">
                <label for=""><h3>M&eacute;tricas</h3></label>
            </div>
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Punto</th>
                            <th scope="col">Novedades</th>
                            <th scope="col">Fecha visita</th>
                            <th scope="col">Fecha cierre</th>
                            <th scope="col">Ubicaci&oacute;n</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($dataModulo1 as $key => $item)
                                <tr>
                                    <th scope="row">{{ $key+=1 }}</th>
                                    <td>{{ $item->user_info->name }}</td>
                                    <td>{{ $item->pdv }}</td>
                                    <td>{{ $item->novedades }}</td>
                                    <td>{{ $item->fechaVisita }}</td>
                                    <td>{{ $item->created_at }}</td>
                                    <td>
                                        <a href="https://www.google.com/maps/?q={{ $item->latitude }},{{ $item->longitude }}" target="_blank">Ubicaci&oacute;n</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html> 