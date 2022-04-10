 @csrf
        <div id="fuMultipleFile" class="col-lg-12 layout-spacing">
            <div class="form-group mb-4">
                <label class="control-label"> Name:</label>
                <input type="text" name="name" class="form-control @error('name') is-invalid fparsley-error parsley-error @enderror" placeholder="Enter Era Name " value="{{old('name',  $era->name ?? '' )}}">
                @error('name')
                <span class="invalid-feedback text-danger" role="alert">
                    <p>{{ $message }}</p>
                </span>
                @enderror

            </div>

        </div>
         <input type="submit"  class="btn btn-primary ml-3 mt-3">
    </form>
