<h1 style="text-align:center;">Nueva Venta</h1>
<br>
<form action=" /celular/store " , method="post">
{{ csrf_field() }}
@include('/celular/form',['Modo'=>'crear'])
</form>