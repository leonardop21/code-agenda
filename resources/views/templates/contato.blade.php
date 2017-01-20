<div class="panel panel-default">
  <div class="panel-heading">
	  <h3 class="painel-title">
		  {{ $person->name }}

		  <span class="pull-right">
			  <a href="#" class="btn btn-success btn-xs" data-toggle="tooltip" data-placement="top" title="Editar" ><i class="fa fa-edit"></i></a>
			  <a href="#" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Apagar"><i class="fa fa-minus-circle"></i></a>
		  </span>

	  </h3>

  </div>

  <div class="painel-body">
	<h3>
		{{ $person->nick_name  }}
	</h3>

  	<table class="table table-hover">
  		@foreach($person->phones as $phone)
  			<tr>
  				<td>
  					{{ $phone->description }}
  				</td>
  				<td>
  					{{ $phone->number  }}
  				</td>
  				<td>
  					<a href="" class="text-danger" data-toggle="tooltip" data-placement="top" title="Apagar">
  						<i class="fa fa-minus-circle"></i>
  					</a>
  				</td>
  			</tr>
  		@endforeach
  	</table>
  </div>
</div>