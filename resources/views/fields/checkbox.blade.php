@extends('fields.main')

@section('field')
    @foreach($categories as $category)
    <input type="checkbox" name="{{ $field }}" value="{{ $category->id }}" class="form-control">{{ $category->name }}<br>
    @endforeach
    
@overwrite
