@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Goods</div>
                    <div class="panel-body">
                        @if($goods->count() > 0)
                            <table class="table">
                                <tr>
                                    <th>ID</th>
                                    <th>Good</th>
                                    <th>Actions</th>
                                </tr>
                                @foreach($goods as $good)
                                    <tr>
                                        <td>{{ $good->id }}</td>
                                        <td>{{ $good->name }}</td>
                                        <td>
                                            <form action="{{ route('goods.destroy', $good->id) }}" method="POST">
                                                <a type="button" class="btn btn-default" href="{{ route('goods.edit', $good->id) }}">edit</a>
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger">delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        @else
                            No goods
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection