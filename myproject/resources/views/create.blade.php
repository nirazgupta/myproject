@include('header')
  <div class="container">
    <div class="row">
      <div class="col-md-6">
          	<form class="form-horizontal" method="POST" action="{{ url('/insert') }}">
              {{csrf_field()}}
            <fieldset>
              <legend>Create new entry</legend>
              @if(count($errors) > 0)
               @foreach($errors->all() as $error)
                  <div class="alert alert-danger">
                      {{$error}}
                  </div>
                @endforeach
              @endif
                  
              <div class="form-group">
                <label for="inputEmail" class="col-lg-2 control-label">Title</label>
                <div class="col-lg-10">
                  <input type="text" name="title" class="form-control" id="inputEmail" placeholder="Title">
                </div>
              </div>
              <div class="form-group">
                <label for="inputPassword" class="col-lg-2 control-label">Description</label>
                <div class="col-lg-10">
                  <textarea name="description" class="form-control" placeholder="Description"></textarea>
                </div>
              </div>
              
              
              <div class="form-group">
                <div class="col-lg-10 col-lg-offset-2">
                  <button type="submit" class="btn btn-success">Submit</button>|
                  <a href="{{url('/')}}" class="btn btn-primary">Cancel</a>

                </div>
              </div>
            </fieldset>
          </form>
        </div>
      </div>
    </div>
@include('footer')