@extends('public') 
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Update a report</h1>

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
        <form method="post" action="{{ route('reports.update', $report->id) }}">
            @method('PATCH') 
            @csrf
            <div class="form-group">

                <label for="title">Title:</label>
                <input type="text" class="form-control" name="title" value={{ $report->title }} />
            </div>

            <div class="form-group">
                <label for="type">Type:</label>
                <select name="type"  class="form-control">
                  <option value="Annual"  @if($report->type=='Annual') selected="selected" @endif>Annual reports</option>
                  <option value="Quarterly" @if($report->type=='Quarterly') selected="selected" @endif>Quarterly financial results</option>
                  <option value="Shareholding" @if($report->type=='Shareholding') selected="selected" @endif>Shareholding pattern</option>
                  <option value="Policies" @if($report->type=='Policies') selected="selected"@endif>Policies and code of conduct</option>
                  <option value="bod" @if($report->type=='bod') selected="selected" @endif>Board of Directors and committee</option>
            </select>
            </div>

            <div class="form-group">
                <label for="path">File:</label>
                <input type="text" class="form-control" name="path" value={{ $report->path }} />
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a style="margin: 19px;" href="{{ route('reports.index')}}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div>
@endsection