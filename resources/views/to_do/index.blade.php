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
		<div class="row pt-4">
			<div class="col-md-12 pb-4">
				<h1>Allez au bout de vos objectifs !</h1>
			</div>
			<div class="col-md-12 pb-4">
				<p class="m-0 cst-todo-p">Recherchez vos listes par catégorie</p>
				<form>
					<select id="chooseCat" required>
						<option selected>--sélectionnez votre catégorie--</option>
						@foreach($categories as $chooseCat)
							<option value="{{$chooseCat->id}}">{{$chooseCat->name}}</option>
						@endforeach
					</select>
				</form>
			</div>
			<div class="col-md-4">
				<form method="" action="">
					<textarea name="toDo" id="toDo" maxlength="70"></textarea>
					<select id="category">
						<option selected>--sélectionnez votre catégorie--</option>
						@foreach($categories as $category)
							<option  value="{{$category->id}}">{{$category->name}}</option>
						@endforeach
					</select>
					<button id="sendToDo" type="submit">Envoyer</button>
				</form>
			</div>
			
			<div class="col-md-8" >
				<div class="row" id="test">
				</div>
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