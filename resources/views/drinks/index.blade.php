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
                    <a href="#" class="btn btn-outline-success"><i class="fa-solid fa-plus"></i> Add new drink</a>
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
                        <tr>
                            <td>Batu - Kombucha</td>
                            <td>1</td>
                            <td>95%</td>
                            <td>
                                <a href="#" title="Edit"><i class="fa-solid fa-pencil text-warning"></i></a>
                            </td>
                            <td>
                                <a href="#" title="Delete"><i class="fa-solid fa-trash text-danger"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>Water</td>
                            <td>1</td>
                            <td>100%</td>
                            <td>
                                <a href="#" title="Edit"><i class="fa-solid fa-pencil text-warning"></i></a>
                            </td>
                            <td>
                                <a href="#" title="Delete"><i class="fa-solid fa-trash text-danger"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>Coffee</td>
                            <td>1</td>
                            <td>90%</td>
                            <td>
                                <a href="#" title="Edit"><i class="fa-solid fa-pencil text-warning"></i></a>
                            </td>
                            <td>
                                <a href="#" title="Delete"><i class="fa-solid fa-trash text-danger"></i></a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
