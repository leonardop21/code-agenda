<div class="panel panel-default">
  <div class="panel-heading">
  	Panel heading without title
  </div>
  	<h3 class="panel-title">{{ $person->nick_name }}</h3>
  <div class="painel-body">
  	<h3>{{ $person->name }}</h3>

  	<table class="table table-hover">
  		@foreach($person->phones as $phone)
  			<tr>
  				<td>
  					{{ $phone->description }}
  				</td>
  				<td>
  					({{ $phone->ddd }}) {{$phone->prefix}}-{{$phone->sufix}}
  				</td>
  				<td>
  					<a href="" class="text-danger">
  						<i class="fa fa-minus-circle"></i>
  					</a>
  				</td>
  			</tr>
  		@endforeach
  	</table>
  </div>
</div>