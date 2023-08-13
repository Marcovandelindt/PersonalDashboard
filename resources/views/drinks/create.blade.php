@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <h1>Create a new drink</h1>
            </div>
        </div>

        <div class="section pt-3">
            <div class="row">
                <div class="col-md-6">
                    <form action="{{ route('drinks.create') }}" method="POST">
                        @csrf

                        <div class="form-group mb-4">
                            <label for="name" class="fw-bold mb-2">Name *</label>
                            <input type="text" name="name" id="name" class="form-control"
                                   value="{{ request()->old('name') }}" required>
                        </div>
                        <div class="form-group mb-4">
                            <label for="hydrationPercentage" class="fw-bold mb-2">Hydration Percentage *</label>
                            <input type="text" name="hydration_percentage" id="hydrationPercentage" class="form-control"
                                   value="{{ request()->old('hydration_percentage') }}" required>
                        </div>

                        <div class="form-group mb-4">
                            <label for="defaultPortion" class="fw-bold mb-2">Default Portion</label>
                            <input type="text" name="default_portion" id="defaultPortion" class="form-control"
                                   value="{{ request()->old('default_portion') }}">
                        </div>

                        <div class="form-group mb-4">
                            <label for="carbohydrateGrams" class="fw-bold mb-2">Carbohydrate Grams</label>
                            <input type="text" name="carbohydrate_grams" id="carbohydrateGrams" class="form-control"
                                   value="{{ request()->old('carbohydrate_grams') }}">
                        </div>

                        <div class="form-group mb-4">
                            <label for="sugarsGrams" class="fw-bold mb-2">Sugars Grams</label>
                            <input type="text" name="sugars_grams" id="sugarsGrams" class="form-control"
                                   value="{{ request()->old('sugars_grams') }}">
                        </div>

                        <div class="form-group mb-4">
                            <label for="caffeineMilligrams" class="fw-bold mb-2">Caffeine Milligrams</label>
                            <input type="text" name="caffeine_milligrams" id="caffeineMilligrams" class="form-control"
                                   value="{{ request()->old('caffeine_milligrams') }}">
                        </div>

                        <div class="form-group">
                            <input type="submit" class="btn btn-success" name="submit" value="Create drink">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
