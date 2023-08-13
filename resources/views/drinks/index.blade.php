@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="heading-title d-flex justify-content-between align-items-center">
                    <div class="intro">
                        <h1>Drinks</h1>
                        <p>On this page you can find an overview of all drinks that have been added to the
                            application.</p>
                    </div>
                    <a href="{{ route('drinks.create') }}" class="btn btn-outline-success"><i
                            class="fa-solid fa-plus"></i> Add new drink</a>
                </div>
            </div>
        </div>

        <div class="section pt-5">
            <div class="row">
                <div class="col-md-12">
                    <h2>All registered drinks</h2>
                    <table class="table table-responsive table-light mt-3">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Entries</th>
                            <th>Hydration Percentage</th>
                            <th></th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @if (!empty($drinks))
                            @foreach ($drinks as $drink)
                                <tr>
                                    <td>{{ $drink->name }}</td>
                                    <td>1</td>
                                    <td>{{ $drink->hydration_percentage }}%</td>
                                    <td>
                                        <a href="#" title="Edit"><i class="fa-solid fa-pencil text-warning"></i></a>
                                    </td>
                                    <td>
                                        <a href="#" title="Delete"><i class="fa-solid fa-trash text-danger"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
