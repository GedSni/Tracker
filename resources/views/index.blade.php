@extends('app')

@section('content')

    <div align="center" class="container col-xs-6">
        {!! Form::open(['action' => 'MainController@updateTable']) !!}
            {!! Form::Label('commitId', 'Commits') !!}
            <select class="form-control" name="vehicle_id">
                @foreach($data as $var)
                    <option value="{{$var->commitId}}">{{ $var->commitId }}</option>
                @endforeach
            </select>

            <div class=" form-group">
                {!! Form::submit("Update", ['class' => 'btn btn-primary']) !!}
            </div>
        {!! Form::close() !!}
        <table class="table table-bordered" align="center">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Domain</th>
                    <th>Date</th>
                    <th>Value</th>
                    <th>Commit ID</th>
                </tr>
            </thead>
            <tbody>
            @if($data)
                @foreach($data as $var)
                <tr>
                    <td>{{ $var->resultId }}</td>
                    <td>{{ $var->resultDomain }}</td>
                    <td>{{ $var->resultDate }}</td>
                    <td>{{ $var->resultValue }}</td>
                    <td>{{ $var->commitId }}</td>
                </tr>
                @endforeach
            @endif
            </tbody>
        </table>
    </div>
@endsection