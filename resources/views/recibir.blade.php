

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>

<link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css')}} " >

<script src="{{ asset('js/jquery.min.js')}}"></script>

<!-- Latest compiled JavaScript -->
<script src="{{ asset('/js/bootstrap.min.js')}}"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>

</head>
<body>
<h1>Metodo Post</h1>
 
<div class="modal-dialog modal-md">
    <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
          <h4 class="modal-title" style="text-align: center;"></h4>
        </div>
        <div class="modal-body">
        {{ Form::open(['url' => '/recibir', 'method' => 'post']) }}
		    <div class="form-group">
		    {!! Form::token() !!}
		    </div>

		    <div class="form-group">
		    {!! Form::label('Nombre Usuario') !!}
		    {!! Form::text('nombre_prod', '' , array('required', 'class'=>'form-control', 'placeholder'=>'Nombre')) !!}
		    </div>

             <div class="form-group">
		    {!! Form::submit('Enviar Datos', array('class'=>'btn btn-primary')) !!}
			</div>	

            {{ Form::close() }}
        </div>
    </div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->

<div class="form-group">
<table class="table table-bordered">
	<tbody><tr>
	    <th>Nombre Producto</th>
	</tr>
 @if(isset($res))
 
  <tr>
<td>{{ $res }} </td>
    </tr>
 
@endif 


</tbody>
</table>
</div>


</body>
</html>