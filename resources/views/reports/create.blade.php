@extends('public')

@section('main')
<div class="row">
    
        <h1 class="display-3">Add a report</h1>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div>
      <br />
    @endif
      <form enctype="multipart/form-data" method="post" action="{{ route('reports.store') }}" style="padding-bottom:40px;">
          @csrf
          <div class="form-group">    
              <label for="title">Report Title:</label>
              <input type="text" class="form-control" name="title"/>
          </div>

          <div class="form-group">
              <label for="type">Report type:</label>
              <!-- <input type="text" class="form-control" name="type"/> -->
              <select name="type"  class="form-control">
                  <option value="Annual">Annual reports</option>
                  <option value="Quarterly">Quarterly financial results</option>
                  <option value="Shareholding">Shareholding pattern</option>
                  <option value="Policies">Policies and code of conduct</option>
                  <option value="bod">Board of Directors and committee</option>
            </select>
          </div>

          <div class="form-group">
              <label for="path">Upload file:</label>
              <!-- <input type="text" class="form-control" name="path"/> -->
              <input type="file"  class="form-control" name="path" />
          </div>
          
          <button type="submit" class="btn btn-primary">Add report</button>
          <a style="margin: 19px;" href="{{ route('reports.index')}}" class="btn btn-secondary">Cancel</a>
          <br><br>
      </form>
</div>
@endsection