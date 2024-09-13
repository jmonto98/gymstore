@extends('layouts.app')
@section('title', 'Home Page')
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">Create User</div>
          <div class="card-body">
            <form method="POST" action="#">
              @csrf
              <input type="text" class="form-control mb-2" placeholder="Enter Name" name="name" require/>
              <input type="text" class="form-control mb-2" placeholder="Enter Last Name" name="lastname" require />
              <input type="text" class="form-control mb-2" placeholder="Enter Address" name="address" require/>
              <input type="email" pattern=".+@example\.com" size="30" class="form-control mb-2" placeholder="Enter Email" name="email" require/>
              <input type="text" class="form-control mb-2" placeholder="Enter Username" name="username" require/>
              <input type="password" minlength="8" class="form-control mb-2" placeholder="Enter Password" name="password" require/>
              <select class="form-control" name="species" id="species" required placeholder="Enter Rol"> 
                <option value="">Select Role</option> 
                <option value="0">Administrator</option> 
                <option value="1">User</option> 
              </select><br>
              <input type="text" class="form-control mb-2" placeholder="State" name="state" require/>
              <input type="text" class="form-control mb-2" placeholder="Enter Balance" name="balance" require/>
              
              <input type="submit" class="btn btn-primary" value="Save" />
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection