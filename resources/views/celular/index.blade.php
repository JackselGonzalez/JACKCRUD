@if(Session::has('Mensaje')){{
        Session::get('Mensaje')
}}
@endif
<a href={{ URL('/celular/create')}}>Agregar Nueva Venta</a>
<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>id</th>
            <th>Nombre</th>
            <th>Marca</th>
            <th>Color</th>
            <th>IMEI</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
       @foreach ($datos as $cel)
        
              
                    <td>{{$cel->id}}</td>
                    <td>{{$cel->nom_cli}}</td>
                    <td>{{$cel->marca}}</td>
                    <td>{{$cel->color}}</td>
                    <td>{{$cel->imei}}</td>
                    <td>
                    
                      <a href="{{URL::action('celularcontroller@editar',$cel->id)}}" type="button" class="btn bt-succes">Editar</a> 
                     | 
                        <a href="{{URL::action('celularcontroller@eliminar',$cel->id)}}" type="button" class="btn btn-danger">Eliminar</a>
                    
                    </td>
               
        </tr>
    @endforeach
    
        
    </tbody>
</table>