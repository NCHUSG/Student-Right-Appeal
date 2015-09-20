@extends('layouts.master')

@section('content')
<ul class="nav nav-pills">
	<li class="active"><a href="#">已處裡</a></li>
    <li><a href="#">處理中</a></li>
    <li><a href="#">未處裡</a></li>
</ul>
<div class="panel panel-default">
	<div class="panel-body">
		<table class="table">
			<div class="row">
				<thead>
				<tr>
					<td width="85%">title</td>
					<td width="15%">time</td>
				</tr>
				</thead>
				<tbody>
					<tr>
						<td width="85%"><a href="#">1</td>
						<td width="15%"><a href="#">2</td>
					</tr>
					<tr>
						<td width="85%"><a href="#">1</td>
						<td width="15%"><a href="#">2</td>
					</tr>
					<tr>
						<td width="85%"><a href="#">1</td>
						<td width="15%"><a href="#">2</td>
					</tr>
					<tr>
						<td width="85%"><a href="#">1</td>
						<td width="15%"><a href="#">2</td>
					</tr>
					<tr>
						<td width="85%"><a href="#">1</td>
						<td width="15%"><a href="#">2</td>
					</tr>
				</tbody>
		    </div> 
		</table>		
	</div>
</div>

@stop
