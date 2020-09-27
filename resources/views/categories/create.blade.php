@extends('layouts.app')
@section('title')
 {{isset($category)?'Edit Category':'Create Category'}}
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
        {{isset($category)?'Edit Category':'Create Category'

        }}
        </div>
        <div class="card-body">
            @include('partials.errors')
            <form action="{{isset($category) ? route('categories.update', $category->id) : route('categories.store')}}" method="POST" >
                {{  csrf_field() }}
                @if (isset($category))
                    @method('put')
                @endif
                <div class="form-group">
                    <label for="name">Name</label>
                <input type="text" class="form-control" name="name" value="{{isset($category) ?$category->name :''}}" placeholder="Enter Name" >
                </div>
                <button type="submit" class="btn btn-primary">
                    {{isset($category) ? 'Update':'Create '
                }}
        </button>
            </form>
        </div>
    </div>
@endsection
