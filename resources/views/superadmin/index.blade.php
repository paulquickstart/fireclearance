@extends('layout.app')


@section('content')
	
	<table class="table table-dark">
	  <thead>
	    <tr>
	      <th scope="col">#</th>
	      <th scope="col">username</th>
	      <th scope="col">email</th>
	      <th scope="col">User Role</th>
	      <th colspan="3" scope="col" class="text-center">action</th>
	    </tr>
	  </thead>
	  <tbody>
	  	@foreach($users as $user)
	    <tr>
	      	<th scope="row">1</th>
	      	<td>{{ $user->username }}</td>
	      	<td>{{ $user->email }}</td>
	      	<td>{{ $user->roles->first()->display_name }}</td>
	      	<td>
	      		<button type="button" 
	      			class="btn btn-info btn-sm editProfileButton" 
				  	data-user-data-id="{{ $user->id }}" 
				  	data-toggle="modal" 
				  	data-target="#editProfileModal" >
				  	edit profile
	      		</button>
	      	</td>
	      	<td>
	      		<button type="button" 
	      			class="btn btn-info btn-sm editUserPasswordButton" 
	      			data-user-data-id="{{ $user->id }}"
	      			data-toggle="modal" 
	      			data-target="#editUserPasswordModal" >
	      			edit credential
	      		</button>
	      	</td>
	      	<td>
	      		<button type="button" 
	      			class="btn btn-danger btn-sm deleteUserRowButton" 
	      			data-user-data-id="{{ $user->id }}" 
	      			data-toggle="modal" 
	      			data-target="#deleteUserModal">
	      			delete
	      		</button>
	      	</td>
	    </tr>
	    @endforeach
	  </tbody>
	</table>

	<!-- Modal -->
	<div id="editProfileModal" class="modal fade" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	  <div class="modal-dialog modal-dialog modal-lg">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="staticBackdropLabel">Edit Info</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <form id="userProfile" class="auth-register-form mt-2" >
	      	<input type="hidden" id="userID" />
	      	<div class="modal-body">
	            @csrf
				<h5> Info Profile </h5>
				<div class="form-group">
	                <label class="form-label" for="firstName">First Name</label>
	                <input class="form-control" id="firstName" type="text" name="first_name" placeholder="johndoe" aria-describedby="firstName" autofocus="" tabindex="1" />
	            </div>
	            <div class="form-group">
	                <label class="form-label" for="lastName">Last Name</label>
	                <input class="form-control" id="lastName" type="text" name="last_name" placeholder="johndoe" aria-describedby="lastName" autofocus="" tabindex="1" />
	            </div>
				<div class="form-group">
	                <label class="form-label" for="username">Username</label>
	                <input class="form-control" id="username" type="text" name="username" placeholder="johndoe" aria-describedby="username" autofocus="" tabindex="1" />
	            </div>
	            <div class="form-group">
	                <label class="form-label" for="email">Email</label>
	                <input class="form-control" id="email" type="text" name="email" placeholder="john@example.com" aria-describedby="email" tabindex="2" />
	            </div>
			</div>
		      <div class="modal-footer">
		      	<button type="button" id="updateUserInfoProfileButton" class="btn btn-primary" tabindex="5">Update</button>
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		      </div>
	      </form>
	    </div>
	  </div>
	</div>

	<div id="editUserPasswordModal" class="modal fade" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	  <div class="modal-dialog modal-dialog modal-lg">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="staticBackdropLabel">Edit Info</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <form id="userPassword" class="auth-register-form mt-2" >
	      	<input type="hidden" class="userID" />
	      	<div class="modal-body">
	            @csrf
				<h5> Info Profile </h5>
				<div class="form-group">
	                <label class="form-label" for="password">Password</label>
	                <input class="form-control" id="password" type="password" name="password" placeholder="" aria-describedby="password" autofocus="" tabindex="1" />
	            </div>
			</div>
	      	<div class="modal-footer">
	      		<button type="button" id="updateUserPasswordButton" class="btn btn-primary" tabindex="5">Update</button>
	        	<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	      	</div>
	      </form>
	    </div>
	  </div>
	</div>

	<div id="deleteUserModal" class="modal fade" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	  <div class="modal-dialog modal-dialog modal-lg">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="staticBackdropLabel">Edit Info</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      	<input type="hidden" class="userID" />
	      	<div class="modal-body">
				<div class="row text-center">
					<div class="col">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
					</div>
					<div class="col">
						<button type="button" id="deleteUserButton" class="btn btn-danger">Delete</button>
					</div>
				</div>
			</div>
	    </div>

	  </div>
	</div>

@endsection