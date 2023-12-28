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
    <div class="row m-5"> 
        <div class="col-md-12 p-0">
            <label for=""><h3>{{ $dataModulo1->user_info->name }} - {{ $dataModulo1->user_info->ciudad }}</h3></label>
        </div>
        <hr>
        <div class="col-md-12 p-0 my-2">
            <h5>
                <b>MODULO EJECUCION DE LA ACTIVIDAD:</b>
            </h5>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Punto</th>
                        <th scope="col">Novedades</th> 
                        <th scope="col">Fecha visita</th>
                        <th scope="col">Fecha cierre</th>
                        <th scope="col">Semana</th>
                        <th scope="col">Estrato</th>
                        <th scope="col">Barrio</th>
                        <th scope="col">Selfie Punto</th>
                        <th scope="col">Foto fachada</th>
                        <th scope="col">Foto cierre</th>
                        <th scope="col">Ubicaci&oacute;n</th>
                      </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $dataModulo1->pdv }}</td>
                            <td>{{ $dataModulo1->novedades }}</td>
                            <td>{{ $dataModulo1->fechaVisita }}</td>
                            <td>{{ $dataModulo1->created_at }}</td>
                            <td>{{ $dataModulo1->semana }}</td>
                            <td>{{ $dataModulo1->estrato }}</td>
                            <td>{{ $dataModulo1->barrio }}</td>
                            <td>
                                <img src="data:image/png;{{ $dataModulo1->selfiePDV }}" height="100"/>
                            </td>
                            <td>
                                <img src="data:image/png;{{ $dataModulo1->foto_fachada }}" height="100"/>
                            </td>
                            <td>
                                <img src="data:image/png;{{ $dataModulo1->foto_cierre }}" height="100"/>
                            </td>
                            <td>
                                <a href="https://www.google.com/maps/?q={{ $dataModulo1->latitude }},{{ $dataModulo1->longitude }}" target="_blank">Ubicaci&oacute;n</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div> 
        <hr>
        <div class="col-md-12 p-0 my-2">
            <h5>
                <b>MODULO VISIBILIDAD:</b>
            </h5>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                      <tr>
                        <th>Visibilidad</th>
                        <th>Tipo visibilidad</th> 
                        <th>Visibilidad competencia</th>
                        <th>Tipo visibilidad competencia</th>
                        <th>Foto visibilidad marca</th>
                        <th>Foto visibilidad competencia</th>
                      </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $dataModulo3->visibilidad }}</td>
                            <td>{{ $dataModulo3->tipo_visibilidad }}</td>
                            <td>{{ $dataModulo3->visibilidad_competencia }}</td>
                            <td>{{ $dataModulo3->tipo_visibilidad_competencia }}</td>
                            <td>
                                <img src="data:image/png;{{ $dataModulo3->foto_visibilidad_marca }}" height="100"/>
                            </td>
                            <td>
                                <img src="data:image/png;{{ $dataModulo3->foto_visibilidad_competencia }}" height="100"/>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        {{-- <hr> --}}
        {{-- <div class="col-md-12 p-0 my-2">
            <h5>
                <b>MODULO DISPONIBILIDA DE PRODUCTO:</b>
            </h5> 
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-12 text-center"><b>DISPONIBILIDAD</b></div>
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>Producto</th>
                                <th>Presentaci&oacute;n</th>
                                <th>Precio</th>
                                <th>Stock</th>
                            </tr>
                            @foreach ($dataModulo4->disponibilidades as $disponibilidad)
                                @if (!$disponibilidad->competencia)
                                    <tr>
                                        <td>{{ $disponibilidad->producto }}</td>
                                        <td>{{ $disponibilidad->presentacion }}</td>
                                        @if ($disponibilidad->precio)
                                            <td>$ {{ number_format($disponibilidad->precio) }}</td>                                            
                                        @else                                          
                                            <td>No registra</td>  
                                        @endif
                                        <td>{{ $disponibilidad->stock }}</td>
                                    </tr>
                                @endif
                            @endforeach
                        </table>
                    </div>
                </div>
                
                <div class="col-md-12">
                    <div class="col-md-12 text-center"><b>DISPONIBILIDAD COMPETENCIA</b></div>
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>Producto</th>
                                <th>Presentaci&oacute;n</th>
                                <th>Precio</th>
                                <th>Stock</th>
                            </tr>
                            @foreach ($dataModulo4->disponibilidades as $disponibilidad)
                                @if ($disponibilidad->competencia)
                                    <tr>
                                        <td>{{ $disponibilidad->producto }}</td>
                                        <td>{{ $disponibilidad->presentacion }}</td>
                                        @if ($disponibilidad->precio)
                                            <td>$ {{ number_format($disponibilidad->precio) }}</td>  
                                        @else                                          
                                            <td>No registra</td>  
                                        @endif
                                        <td>{{ $disponibilidad->stock }}</td>
                                    </tr>
                                @endif
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div> --}}
        <hr>
        <div class="col-md-12 p-0 my-2">
            <h5>
                <b>MODULO VENTAS ABORDAJE:</b>
            </h5>
            <div class="row">
                <div class="col-md-12">
                    <label for="">Personas abordadas: {{ $dataModulo2->abordadas }}.</label>
                </div>
                <div class="col-md-12">
                    <div class="col-md-12 text-center"><b>VENTAS</b></div>
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>Producto</th>
                                <th>Presentaci&oacute;n</th>
                                <th>G&eacute;nero</th>
                                <th>Edad</th>
                                <th>Cantidad</th> 
                                <th>Inter&eacute;s inicial</th>
                            </tr>
                            @foreach ($dataModulo2->ventas as $venta)
                                <tr>
                                    <td>{{ $venta->producto }}</td>
                                    <td>{{ $venta->presentacion }}</td>
                                    <td>{{ $venta->genero }}</td>
                                    <td>{{ $venta->edad }}</td>
                                    <td>{{ $venta->cantidad }}</td>
                                    <td>{{ $venta->interes_inicial }}</td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="col-md-12 text-center"><b>GIFUS</b></div>
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>Gifu</th>
                                <th>G&eacute;nero</th>
                                <th>Edad</th>
                            </tr>
                            @foreach ($dataModulo2->gifus as $gifu)
                                <tr>
                                    <td>{{ $gifu->gifu }}</td>
                                    <td>{{ $gifu->genero_gifu }}</td>
                                    <td>{{ $gifu->edad_gifu }}</td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html> 