@extends('layouts.admin')

@section('title', 'Admin Dashboard')

@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-12 mx-auto text-center">
            <h2>
                {{ $portfolio->Project }}
            </h2>
        </div>
        <div class="col-12 mx-auto text-center">
            <h2 scope="row">
                {{ $portfolio->id }}
            </h2>
            <p>
                {{ $portfolio->Author }}
            </p>
            <p>
                {{ $portfolio->Description }}
            </p>
            <a href="{{ route('admin.portfolios.edit', $portfolio) }}" class="text-decoration-none">
                <button class="btn btn-sm btn-success">
                    Edit
                </button>
            </a>
                <button class="btn btn-sm btn-warning">
                    Delete
                </button>
            </p>
        </tr>
        </div>
    </div>
</div>
@endsection