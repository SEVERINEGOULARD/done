@extends('layouts.master')

@section('scripts-header')
<header>
	<div class="container-fluid header">
		<div class="container">
			<nav>
				<a href="{{ url('/home') }}" class="cst-todo-nav">Home</a>
				<a href="/main" class="cst-todo-nav">Bullet journal</a>
				<a href="/logout" class="cst-todo-nav">Déconnexion</a>
			</nav>
</div>
	</div>
</header>
@endsection

@section('content') 

<div class="container-fluid">
	<div class="container">
		<div class="row pt-4 m-0">
			<div class="col-12 pb-4">
				<h1>Allez au bout de vos objectifs !</h1>
			</div>
			<div class="col-12 pb-4 mq-padding-todo">
				<div class="row">
					<div class="col-5">
						<p class="m-0 cst-todo-titles">Affichez vos objectifs par catégorie :</p>				
					</div>
					<div class="col-4">	
						<form>
							<select id="chooseCat" required>
								<option selected>--sélectionnez votre catégorie--</option>
								@foreach($categories as $chooseCat)
									<option value="{{$chooseCat->id}}">{{$chooseCat->name}}</option>
								@endforeach
							</select>
						</form>
					</div>
					<div>
						<p class="cst-p-todo pt-3">- OU -</p>
					</div>
					<div class="col-12 text-left">
						<p><a href="/toDo" class="cst-todo-titles">Cliquez <b>ICI</b> pour afficher tous vos objectifs</a></p>
					</div>
				</div>
			</div>
			<hr>
			<div class="col-md-4">
				<h2>Ajoutez un objectif :</h2>
				<form method="" action="">
					<textarea name="toDo" id="toDo" maxlength="70">Nouvel objectif !</textarea>
					<select id="category" required>
						<option selected>--sélectionnez votre catégorie--</option>
						@foreach($categories as $category)
							<option  value="{{$category->id}}">{{$category->name}}</option>
						@endforeach
					</select>
					<div class="w-50 pt-3">
						<button id="sendToDo" type="submit">Envoyer</button>
					</div>
				</form> 
			</div> 
		
			<div class="col-md-8 cst-to-col">
				<h2>Ma "To Do list" :</h2>
				<div id="list-items">
					@foreach($toDos as $toDo)
					<div class="row pt-2" class="list">
						<div class="col-8 {{$toDo->done == 1 ?'tdlt':''}}" id="toDoContent">
							{{$toDo->content}}
						</div>
						<div class="col-2">
							<a class ="deleteList" href="#" data-delete='{{$toDo->id}}' ><i class="cursor far fa-trash-alt"></i></a>
						</div>
						<div class="col-2">
							<a class ="crossedList" href="#" data-crossed='{{$toDo->id}}' ><i class="cursor fas fa-check-circle cst-icon-done"></i></a>
						</div>
					</div>
					@endforeach
				</div> 
			</div>
		</div>
	</div>
</div>

@endsection


@section('scripts-footer')


<div class="container-fluid cst-contact-footer mt-5">
	<div class="row mq-padding-todo">
		<div class="col-4 text-center">
			<a href="/ml" >Mentions légales</a>
		</div>
		<div class="col-4 text-center">
			<p>Copyright 2019 - AWSY</p>
		</div>
		<div class="col-4 text-center">
			<a href="/cgu">CGU</a>
		</div>     
	</div>
</div>



<script type="text/javascript" src="{{ asset('js/todo.js') }}"></script>





@endsection