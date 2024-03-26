@extends('selleraccount.app')

@section('content')
<div class="container">
    <div class="row justify-content-center pt-5">
        <div class="col-md-12">
            <ul class="nk-block-tools g-3 justify-content-end">
                <a href="{{ route('clothes.create') }}" class="btn btn-success"><em class="icon ni ni-arrow-left"></em><span>Add New</span></a>
            </ul>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Clothes</div>

                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif

                    <table class="table">
                        <thead>
                            <tr>
                                <th>Item Name</th>
                                <th>Gender</th>
                                <th>Goods or Services</th>
                                <th>Unit of Measure</th>
                                <th>Color</th>
                                <th>Size</th>
                                <th>Age Limits</th>
                                <th>Return & Exchange Policy</th>
                                <th>Tailor Made</th>
                                <th>Product Description</th>
                                <th>Product Specifications</th>
                                <th>Whole Sale Supply</th>
                                <th>Number of Units available</th>
                                <th>Images</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($clothes as $cloth)
                                <tr>
                                    <td>{{ $cloth->item_name }}</td>
                                    <td>{{ $cloth->gender }}</td>
                                    <td>{{ $cloth->goods_or_services }}</td>
                                    <td>{{ $cloth->unit_of_measure }}</td>
                                    <td>{{ $cloth->color }}</td>
                                    <td>{{ $cloth->size }}</td>
                                    <td>{{ $cloth->age_limits }}</td>
                                    <td>{{ $cloth->return_exchange_policy }}</td>
                                    <td>{{ $cloth->tailor_made ? 'Yes' : 'No' }}</td>
                                    <td>{{ $cloth->product_description }}</td>
                                    <td>{{ $cloth->product_specifications }}</td>
                                    <td>{{ $cloth->whole_sale_supply ? 'Yes' : 'No' }}</td>
                                    <td>{{ $cloth->no_of_units_available }}</td>
                                    <td>
                                        @if ($cloth->images)
    @foreach (json_decode($cloth->images) as $image)
        <img src="{{ asset($image) }}" alt="Cloth Image" style="max-width: 58px;">
    @endforeach
@else
    <p>No images available</p>
@endif


                                    </td>
                                    <td>
                                        <a href="{{ route('clothes.edit', $cloth->id) }}" class="btn btn-primary">Edit</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
