<h1 style="text-align:center;">Editar Venta</h1>
<br>
<form action="{{ URL::action('celularcontroller@editar',$celular->id)}}" method="post" >
{{csrf_field()}}
{{method_field('PATCH')}}
@include('/celular/form',['Modo'=>'editar'])
</form>