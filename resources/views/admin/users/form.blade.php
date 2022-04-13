@csrf
<div id="fuMultipleFile" class="col-lg-12 layout-spacing">

    <div class="form-group mb-4">
        <label class="control-label"> Name:</label>
        <input type="text" name="name" class="form-control @error('name') is-invalid fparsley-error parsley-error @enderror" placeholder="Enter Name " value="{{old('name', $user->name ?? '')}}">
        @error('name')
        <span class="invalid-feedback text-danger" role="alert">
            <p>{{ $message }}</p>
        </span>
        @enderror
    </div>

    <div class="form-group mb-4">
        <label class="control-label">Email:</label>
        <input type="email" name="email" class="form-control @error('email') is-invalid fparsley-error parsley-error @enderror" placeholder="Enter Email " value="{{old('email' ,$user->email ?? '')}}">
        @error('email')
        <span class="invalid-feedback text-danger" role="alert">
            <p>{{ $message }}</p>
        </span>
        @enderror
    </div>
    <div class="form-group mb-4">
        <label class="control-label">Password:</label>
        <input type="password" name="password" class="form-control @error('password') is-invalid fparsley-error parsley-error @enderror" placeholder="Enter password" value="{{old('password' ,$user->password ?? '')}}">
        @error('password')
        <span class="invalid-feedback text-danger" role="alert">
            <p>{{ $message }}</p>
        </span>
        @enderror
    </div>

</div>
<input type="submit" class="btn btn-primary ml-3 mt-3">
</form>