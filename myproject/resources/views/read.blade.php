@include('header');
	<div class="container">
		<div class="row">
			<legend>View record.</legend>
			<p class="lead"> {{ $myprojects->title }}</p>
			<p>{{ $myprojects->description }}</p>
		</div>
	</div>
@include('footer');