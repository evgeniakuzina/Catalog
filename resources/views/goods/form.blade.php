@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    @if(empty($entity))
                        <div class="panel-heading">Add new good</div>
                    @else
                        <div class="panel-heading">Edit good</div>
                    @endif
                    <div class="panel-body">
                        <form action="@if(empty($entity)){{ route('goods.store') }}@else{{ route('goods.update', $entity->id) }}@endif" method="post">
                            {{ csrf_field() }}
                            @isset($entity)
                                {{ method_field('PUT') }}
                            @endisset
                            <div class="block">
                                @include('fields.text', ['field' => 'name', 'name' => 'Name'])
                            </div>
                            <div>
                                @include('fields.checkbox', ['field' => 'category_id[]', 'name' => 'Category', 'categories' => $categories])
                            </div>
                            <input type="submit" value="save">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection