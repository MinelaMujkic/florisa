@extends('layouts.master')
@section('content')

<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
        <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
        	<div class="panel panel-default">
        		<div class="panel-heading">
			    		<h3 class="panel-title">Pristupate admin okruženju</h3>
			 			</div>
			 			<div class="panel-body">
						<form role="form" method="POST" action="{{ route('pristupiAdminOkruzenju') }}">
							@csrf
			    			{{-- <div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			                <input type="text" name="role" id="first_name" class="form-control input-sm" placeholder="Uloga">
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="text" name="name" id="last_name" class="form-control input-sm" placeholder="Ime">
			    					</div>
			    				</div>
			    			</div> --}}

			    			<div class="form-group">
			    				<input type="email" name="email" id="email" class="form-control input-sm" placeholder="Email Adresa">
			    			</div>

			    			{{-- <div class="row"> --}}
			    				{{-- <div class="col-xs-6 col-sm-6 col-md-6"> --}}
			    					<div class="form-group">
			    						<input type="password" name="password" id="password" class="form-control input-sm" placeholder="Lozinka">
			    					</div>
			    				{{-- </div> --}}
			    				{{-- <div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-sm" placeholder="Potvrdi lozinku">
			    					</div>
			    				</div>
			    			</div> --}}
			    			
			    			<input type="submit" value="Prijava" class="btn btn-info btn-block">
			    		
			    		</form>
			    	</div>
	    		</div>
    		</div>
    	</div>
    </div>

    <style>
        
        .centered-form{
            margin-top: 60px;
        }

        .centered-form .panel{
            background: rgba(255, 255, 255, 0.8);
            box-shadow: rgba(0, 0, 0, 0.3) 20px 20px 20px;
            margin-top: 30px;
        }
    </style>
@endsection