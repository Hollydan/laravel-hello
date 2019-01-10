
@extends('layouts.app')
@section('title', "{{ $user->name }}'s personal center")

@section('content')
	<div class='row'>
		<div class='col-lg-3 col-md-3 hidden-sm hidden-xs user-info'>
			<div class='panel panel-default'>
				<div class='panel-body'>
					<div class='media'>
						<div align='center'>
							<img class='thumbnail img-responsive' src='https://iocaffcdn.phphub.org/uploads/images/201709/20/1/PtDKbASVcz.png?imageView2/1/w/600/h/600' width='300px' height='300px' />
						</div>
				
						<div class='media-body'>
							<hr>
							<h4><strong>Profile</strong></h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
							<hr>
							<h4><strong>Registered At</strong></h4>
							<p>2019/01/10</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class='col-lg-9 col-md-9 col-sm-12 col-xs-12'>
			<div class='panel panel-default'>
				<div class='panel-body'>
					<span>
						<h1 class='panel-title pull-left' style='font-size:30px;'>{{ $user->name }}<small>{{ $user->email }}</small></h1>
					</span>
				</div>
			</div>
			<hr>
			<div class='panel panel-default'>
				<div class='panel-body'>
					No Data!
				</div>
			</div>
		</div>
	</div>
@stop