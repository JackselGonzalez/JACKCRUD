

<label for="ID">{{'ID'}}</label>
<input type="text" name="ID" id="ID" value="{{ isset($celular->id)?$celular->id:''}}">
<br>
<label for="nom_cli">{{'nom_cli'}}</label>
<input type="text" name="nom_cli" id="nom_cli"

 value="{{ isset($celular->nom_cli)?$celular->nom_cli:'' }}">
<br>

<label for="marca">{{'marca'}}</label>
<input type="text" name="marca" id="marca"
 value="{{ isset($celular->marca)?$celular->marca:'' }}">
<br>

<label for="color">{{'color'}}</label>
<input type="text" name="color" id="color" 
value="{{ isset($celular->color)?$celular->color:'' }}">
<br>

<label for="imei">{{'imei'}}</label>
<input type="text" name="imei" id="imei" 
value="{{ isset($celular->imei)?$celular->imei:'' }}">
<br>

<input type="submit" value="{{$Modo=='crear'? 'Agregar':'Modificar'}}">

<a href={{ URL('/celular/index')}}>Regresar</a>