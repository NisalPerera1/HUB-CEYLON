@extends('selleraccount.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Clothes</div>

                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form id="clothesForm" enctype="multipart/form-data" method="POST">
                        @csrf
                        @method('PUT')

                        <!-- Item Name -->
                        <div class="form-group">
                            <label for="item_name">Item Name</label>
                            <input type="text" name="item_name" id="item_name" class="form-control" value="{{ $clothes->item_name }}" required>
                        </div>

                        <!-- Gender -->
                        <div class="form-group">
                            <label for="gender">Gender</label>
                            <select name="gender" id="gender" class="form-control" required>
                                <option value="Mens" {{ $clothes->gender === 'Mens' ? 'selected' : '' }}>Mens</option>
                                <option value="Womens" {{ $clothes->gender === 'Womens' ? 'selected' : '' }}>Womens</option>
                                <option value="Uni-Sex" {{ $clothes->gender === 'Uni-Sex' ? 'selected' : '' }}>Uni-Sex</option>
                                <option value="Girl" {{ $clothes->gender === 'Girl' ? 'selected' : '' }}>Girl</option>
                                <option value="Boy" {{ $clothes->gender === 'Boy' ? 'selected' : '' }}>Boy</option>
                                <option value="Kids" {{ $clothes->gender === 'Kids' ? 'selected' : '' }}>Kids</option>
                                <option value="Baby" {{ $clothes->gender === 'Baby' ? 'selected' : '' }}>Baby</option>
                            </select>
                        </div>

                        <!-- Goods or Services -->
                        <div class="form-group">
                            <label for="goods_or_services">Goods or Services</label>
                            <select name="goods_or_services" id="goods_or_services" class="form-control" required>
                                <option value="Goods" {{ $clothes->goods_or_services === 'Goods' ? 'selected' : '' }}>Goods</option>
                                <option value="Services" {{ $clothes->goods_or_services === 'Services' ? 'selected' : '' }}>Services</option>
                            </select>
                        </div>

                        <!-- Unit of Measure -->
                        <div class="form-group">
                            <label for="unit_of_measure">Unit of Measure</label>
                            <select name="unit_of_measure" id="unit_of_measure" class="form-control" required>
                                <option value="cm" {{ $clothes->unit_of_measure === 'cm' ? 'selected' : '' }}>cm</option>
                                <option value="inch" {{ $clothes->unit_of_measure === 'inch' ? 'selected' : '' }}>inch</option>
                                <option value="meter" {{ $clothes->unit_of_measure === 'meter' ? 'selected' : '' }}>meter</option>
                                <option value="mm" {{ $clothes->unit_of_measure === 'mm' ? 'selected' : '' }}>mm</option>
                            </select>
                        </div>

                        <!-- Kids or Baby -->
                        <div class="form-group">
                            <label for="kids_or_baby">Kids or Baby</label>
                            <select name="kids_or_baby" id="kids_or_baby" class="form-control" required>
                                <option value="Girl" {{ $clothes->kids_or_baby === 'Girl' ? 'selected' : '' }}>Girl</option>
                                <option value="Boy" {{ $clothes->kids_or_baby === 'Boy' ? 'selected' : '' }}>Boy</option>
                            </select>
                        </div>

                        <!-- Age Limits -->
                        <div class="form-group">
                            <label for="age_limits">Age Limits</label>
                            <input type="number" name="age_limits" id="age_limits" class="form-control" value="{{ $clothes->age_limits }}" required>
                        </div>

                        <!-- Color -->
                        <div class="form-group">
                            <label for="colors">Available Colors:</label>
                            <div class="color-input-group">
                                <input type="text" class="form-control color-input" id="colorInput" placeholder="Enter a color">
                                <button type="button" id="addColor" class="btn btn-primary ml-2">Add Color</button>
                            </div>
                            <div id="selectedColors" class="mt-2 d-flex flex-wrap">
                                @foreach (explode(',', $clothes->color ?? '') as $color)
                                <div class="selected-color">{{ $color }}<button type="button" class="btn btn-sm btn-danger remove-color ml-2">Remove</button></div>
                            @endforeach
                            
                            </div>
                            <input type="hidden" name="color" id="colorsInput" value="{{ $clothes->color }}">
                        </div>

                        <!-- Images -->
                        <div class="form-group">
                            <label for="images">Current Image</label>
                            @if ($clothes->images)
                                @foreach (json_decode($clothes->images) as $image)
                                    <div>
                                        <img src="{{ asset($image) }}" alt="Current Image" style="max-width: 200px; max-height: 200px;">
                                    </div>
                                @endforeach
                            @else
                                <p>No current image</p>
                            @endif
                        </div>
                        
                        <div class="form-group">
                            <label for="images">Upload New Images</label>
                            <input type="file" name="images[]" id="images" class="form-control" multiple>
                            <small class="form-text text-muted">Maximum file size: 2MB. Allowed file types: jpg, jpeg, png, gif</small>
                        </div>
                        

                        <!-- Size -->
                        <div class="form-group">
                            <label for="sizes">Available Sizes:</label>
                            <div class="size-input-group">
                                <input type="text" class="form-control size-input" id="sizeInput" placeholder="Enter a size">
                                <button type="button" id="addSize" class="btn btn-primary ml-2">Add Size</button>
                            </div>
                            <div id="selectedSizes" class="mt-2 d-flex flex-wrap">
                                @foreach (explode(',', $clothes->size ?? '') as $size)
    <div class="selected-size">{{ $size }}<button type="button" class="btn btn-sm btn-danger remove-size ml-2">Remove</button></div>
@endforeach

                            </div>
                            <input type="hidden" name="size" id="sizesInput" value="{{ $clothes->size }}">
                        </div>

                        <!-- Return & Exchange Policy -->
                        <div class="form-group">
                            <label for="return_exchange_policy">Return & Exchange Policy</label>
                            <textarea name="return_exchange_policy" id="return_exchange_policy" class="form-control" required>{{ $clothes->return_exchange_policy }}</textarea>
                        </div>

                        <!-- Tailor Made -->
                        <div class="form-group">
                            <label for="tailor_made">Tailor Made</label>
                            <select name="tailor_made" id="tailor_made" class="form-control" required
                            >
                            <option value="0" {{ $clothes->tailor_made == 0 ? 'selected' : '' }}>No</option>
                            <option value="1" {{ $clothes->tailor_made == 1 ? 'selected' : '' }}>Yes</option>
                        </select>
                    </div>

                    <!-- Product Description -->
                    <div class="form-group">
                        <label for="product_description">Product Description</label>
                        <textarea name="product_description" id="product_description" class="form-control" required>{{ $clothes->product_description }}</textarea>
                    </div>

                    <!-- Product Specifications -->
                    <div class="form-group">
                        <label for="product_specifications">Product Specifications</label>
                        <textarea name="product_specifications" id="product_specifications" class="form-control">{{ $clothes->product_specifications }}</textarea>
                    </div>

                    <!-- Whole Sale Supply -->
                    <div class="form-group">
                        <label for="whole_sale_supply">Whole Sale Supply</label>
                        <select name="whole_sale_supply" id="whole_sale_supply" class="form-control" required>
                            <option value="0" {{ $clothes->whole_sale_supply == 0 ? 'selected' : '' }}>No</option>
                            <option value="1" {{ $clothes->whole_sale_supply == 1 ? 'selected' : '' }}>Yes</option>
                        </select>
                    </div>

                    <!-- Number of Units available -->
                    <div class="form-group">
                        <label for="no_of_units_available">Number of Units available</label>
                        <input type="number" name="no_of_units_available" id="no_of_units_available" class="form-control" value="{{ $clothes->no_of_units_available }}" required>
                    </div>

                    <button type="button" id="submitBtn" class="btn btn-primary">Submit</button>
                </form>

                <div id="successMessage" style="display: none;" class="alert alert-success mt-3">Clothes updated successfully!</div>

                <script>
                    $(document).ready(function() {
                        $('#submitBtn').click(function() {
                            var formData = new FormData($('#clothesForm')[0]);

                            // Set the boolean values for tailor_made and whole_sale_supply
                            formData.append('tailor_made', $('#tailor_made').val());
                            formData.append('whole_sale_supply', $('#whole_sale_supply').val());

                            $.ajax({
                                url: '{{ route('clothes.update', $clothes->id) }}',
                                type: 'POST',
                                data: formData,
                                processData: false,
                                contentType: false,
                                success: function(response) {
                                    $('#successMessage').fadeIn().delay(3000).fadeOut();
                                    window.location.href = '{{ route('clothes.index') }}';
                                },
                                error: function(xhr, status, error) {
                                    console.error(xhr.responseText);
                                }
                            });
                        });
                    });
                </script>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
