@include('header')
	<div class="container">
		<div class ="row">
			<legend>My Application</legend>
			@if(session('info'))
			<div class="alert alert-success">
				{{session('info')}}
			</div>
			@endif
			<div class="row">
			    <div class="col-xs-12">
			        <div class="text-right">
			            <a href="{{url("/create")}}" class="btn btn-success">Add New Record</a>
			        </div>
			    </div>
			</div>
			
			<table class="table table-striped table-hover ">
			  <thead>
			    <tr>
			      <th>ID</th>
			      <th>Title</th>
			      <th>Description</th>
			      <th>Action</th>
			    </tr>
			  </thead>
			  <tbody>
			  	@if(count($myprojects) > 0)
			  		@foreach($myprojects->all() as $myproject)
			    <tr>
			      <td>{{$myproject->id}} </td>
			      <td>{{$myproject->title}}</td>
			      <td>{{$myproject->description}}</td>
			      <td>
			      	  
			      	  <a href="{{url("/read/{$myproject->id}")}}" class="label label-info">View</a>
			      	  <a href="{{url("/update/{$myproject->id}")}}" class="label label-success">Edit</a>
			      	  <a href="{{url("/delete/{$myproject->id}")}}" class="label label-primary">Delete</a>

			      </td>
			    </tr>
			    @endforeach
			    @endif
			  </tbody>
			</table> 
		</div>	
	</div>
@include('footer')