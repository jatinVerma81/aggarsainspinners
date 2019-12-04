@extends('public')

@section('main')
<div class="row">
    <div class="col-sm-12">
        <h1 class="display-3">Reports</h1>  
        <a style="margin: 19px;" href="{{ route('reports.create')}}" class="btn btn-primary">New report</a>
        <table class="table table-striped">
            <thead>
                <tr>
                <td>Title</td>
                <td>Type</td>
                <td colspan = 2>Actions</td>
                </tr>
            </thead>
            <tbody>
                @foreach($reports as $report)
                <tr>
                    <td>{{$report->title}}</td>
                    <td>
                    <!-- {{$report->type}} -->
                    @if($report->type=='Annual') Annual reports @endif
                    @if($report->type=='Quarterly') Quarterly financial results @endif
                    @if($report->type=='Shareholding') Shareholding pattern @endif
                    @if($report->type=='Policies') Policies and code of conduct @endif
                    @if($report->type=='bod') Board of Directors and committee @endif

                    </td>
                    <td>
                        <a href="{{ route('reports.edit',$report->id)}}" class="btn btn-primary">Edit</a>
                    </td>
                    <td>
                        <form action="{{ route('reports.destroy', [$report->id, 'test'])}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>  
    </div>
</div>

<div class="row">
    <div class="col-sm-12">

        @if(session()->get('success'))
            <div class="alert alert-success">
            {{ session()->get('success') }}  
            </div>
        @endif
    </div>
</div>
@endsection