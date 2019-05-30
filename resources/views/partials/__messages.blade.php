<div class="container">
<div class="row">
<div col-md-12">
@if( count( $errors ) > 0 )

<div class="alert alert-danger">
@foreach ( $errors -> all() as $error )

<strong>{{ $error }}</strong><br>

@endforeach
</div>
@endif

</div>


</div><!--- row -->
<div class="row">
<div class="col-md-12">
@if( Session::has('success'))
<div class="alert alert-success">
<strong>{{  Session::get('success') }}</strong>

</div>

@endif

</div>
</div><!--- row -->


</div><!-- container -->