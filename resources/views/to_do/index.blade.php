@extends('layouts.master')

@section('scripts-header')
<header class="header">
    <nav>
        <a href="{{ url('/home') }}">Home</a>
        <a href="/main">Bullet journal</a>
	</nav>
</header>
@endsection

@section('content') 

<div class="container-fluid">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<form method="" action="">
					<textarea name="toDo" id="toDo"></textarea>
					<select name="categorie">
						@foreach($categories as $category)
						<option id="category" value="{{$category->id}}">{{$category->name}}</option>
						@endforeach
					</select>
					<button id="sendToDo">Envoyer</button>
				</form>
			</div>
			
			<div class="col-md-6" id="test">
			</div>
			
		</div>
	</div>
</div>

@endsection


@section('scripts-footer')

<div class="container-fluid cst-contact-footer mt-5">
  <div class="row">
    <div class="col-md-4 text-center">
      <a href="">Mentions légales</a>
    </div>
    <div class="col-md-4 text-center">
      <p>Copyright 2019 - AWSY</p>
    </div>
    <div class="col-md-4 text-center">
      <a href="">CGU</a>
    </div>     
  </div>
</div>


<script>

</script>





@endsection