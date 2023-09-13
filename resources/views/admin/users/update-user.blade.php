@extends('admin.layouts.app')

@section('content')
  <div id="admin-content">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <h1 class="admin-heading">Add User</h1>
              </div>
              <div class="col-md-offset-3 col-md-6">
                  <!-- Form Start -->
                  <form  action="{{ route('admin.update.user',$user->id) }}" method ="POST" autocomplete="off">
                    @csrf
                      <div class="form-group">
                          <label>First Name</label>
                          <input type="text" value="{{ $user->name }}" name="fname" class="form-control" placeholder="First Name" required>
                          @error('fname')
                            <span class="help-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                          <div class="form-group">
                          <label>Last Name</label>
                          <input type="text" value="{{ $user->lname}}" name="lname" class="form-control" placeholder="Last Name" required>
                          @error('lname')
                            <span class="help-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                      <div class="form-group">
                          <label>Email</label>
                          <input type="email" value="{{ $user->email }}" name="email" class="form-control" placeholder="abc@gmail.com" required>
                          @error('email')
                            <span class="help-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                        </div>

                      <div class="form-group">
                          <label>Password</label>
                          <input type="password" value="{{ $user->password }}" name="password" class="form-control" placeholder="Password" required>
                          @error('password')
                            <span class="help-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                      <div class="form-group">
                          <label>User Role</label>
                          <select class="form-control" name="role" >
                              <option value="0" {{ $user->role == 1 ? 'selected' : '' }}>Normal User</option>
                              <option value="1" {{ $user->role == 0 ? 'selected' : '' }}>Admin</option>
                          </select>
                      </div>
                      <input type="submit"  name="save" class="btn btn-primary" value="Save" required />
                  </form>
                   <!-- Form End-->
               </div>
           </div>
       </div>
   </div>
@endsection
