@if (Alert::whereArea('form')->get())
<div class="alert alert-danger">

	<div class="container">

		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

		Check the form below for errors.

	</div>

</div>
@endif

@foreach (Alert::whereNotArea('form')->get() as $alert)
<div class="alert alert-{{ $alert->class }}">

	<div class="container">

		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

		{{ $alert->message }}

	</div>

</div>
@endforeach
