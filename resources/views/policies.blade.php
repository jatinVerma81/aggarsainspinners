@extends('public')

@section('main')
                        <h2 class="mb-xl" style="color:#f79749;">
                            <strong>Policies &</strong> code of cunduct</h2>
                        <p>
                            <div class="list-group">
                                    @foreach($reports as $report)
                                        <a target="_blank" href="{{asset('storage/'.$report->path)}}" class="list-group-item list-group-item-action list-group-item-secondary"> Download {{$report->title}}</a>
                                    @endforeach
                                
                                </div> 
                        </p>
@endsection