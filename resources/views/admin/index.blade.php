<!--view admin : list of users-->
@extends('layouts.master')

@section('scripts-header')
<header>
		<div class="container-fluid header">
			<div class="container">
				<nav class="row">
					<div class="col-6 text-left">
						<a href="/"><img id="logo" src="{{asset('logo1.png')}}" alt="done"></a>
					</div>
					<div class="col-6">    
                    <a href="{{ url('/logout') }}">Déconnexion</a>
					</div>
					
				</nav>
			</div>
		<div>
	</header>
@endsection

@section('content')

<!-- <div class="container-fluid"> -->
    <div class="container">
        <h2 class="cst-head-compte">Gestion des utilisateurs</h2>
    </div>
    <div class="container-fluid cst-contain-admin">
        <div class="cst-cpte-container container">
            <div class="row">
                
            </div>

            <div class="row cst-div-form-compte">
                <div class="col-12">
                    <form> 
                    @csrf 
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col" class="cst-table-width">Pseudo</th>
                                    <th scope="col" class="cst-table-width">Email</th>
                                    <th scope="col" class="cst-table-width">Date de naissance</th>
                                    <th scope="col" class="cst-table1-width">Supp</th>
                                    <th scope="col" class="cst-table1-width">Edit</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                <tr>
                                    <td class="cst-table-width">{{$user->pseudo}}</td>
                                    <td class="cst-table-width">{{$user->email}}</td>
                                    <td class="cst-table-width">{{$user->dob}}</td>
                                    <td class="cst-table1-width"><a href="/admin/delete?id={{$user->id}}"><i class="fas fa-user-times"></i></a></td>
                                    <!--vers userUdptate-->
                                    <td class="cst-table1-width"><a href="/admin/update?id={{$user->id}}"><i class="fas fa-user-edit"></i></a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </form>
                </div>
            </div>


        </div>
    </div> 
<!-- </div> -->

@endsection

@section('scripts-footer')

<div class="container-fluid cst-contact-footer mt-5">
  <div class="row">
    <div class="col-md-4 text-center">
      <a href="/ml">Mentions légales</a>
    </div>
    <div class="col-md-4 text-center">
      <p>Copyright 2019 - AWSY</p>
    </div>
    <div class="col-md-4 text-center">
      <a href="/cgu">CGU</a>
    </div>     
  </div>
</div>

@endsection
