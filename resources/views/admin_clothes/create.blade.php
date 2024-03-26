@extends('selleraccount.app')
<style>
    .color-input-group {
        display: flex;
        align-items: center;
    }
    .color-input {
        flex: 1;
        margin-right: 10px;
    }
    .remove-color {
        margin-left: 10px;
    }
    #addColor {
        margin-left: auto;
    }
</style>
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create New Clothes</div>

                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif

                    
                    <form id="clothesForm" enctype="multipart/form-data">
                        @csrf
                    
                        <!-- Item Name -->
                        <div class="form-group">
                            <label for="item_name">Item Name</label>
                            <input type="text" name="item_name" id="item_name" class="form-control" required>
                        </div>
                    
                        <!-- Gender -->
                        <div class="form-group">
                            <label for="gender">Gender</label>
                            <select name="gender" id="gender" class="form-control" required>
                                <option value="Mens">Mens</option>
                                <option value="Womens">Womens</option>
                                <option value="Uni-Sex">Uni-Sex</option>
                                <option value="Girl">Girl</option>
                                <option value="Boy">Boy</option>
                                <option value="Kids">Kids</option>
                                <option value="Baby">Baby</option>
                            </select>
                        </div>
                    
                        <!-- Goods or Services -->
                        <div class="form-group">
                            <label for="goods_or_services">Goods or Services</label>
                            <select name="goods_or_services" id="goods_or_services" class="form-control" required>
                                <option value="Goods">Goods</option>
                                <option value="Services">Services</option>
                            </select>
                        </div>
                    
                        <!-- Unit of Measure -->
                        <div class="form-group">
                            <label for="unit_of_measure">Unit of Measure</label>
                            <select name="unit_of_measure" id="unit_of_measure" class="form-control" required>
                                <option value="cm">cm</option>
                                <option value="inch">inch</option>
                                <option value="meter">meter</option>
                                <option value="mm">mm</option>
                            </select>
                        </div>
                    
                        <!-- Kids or Baby -->
                        <div class="form-group">
                            <label for="kids_or_baby">Kids or Baby</label>
                            <select name="kids_or_baby" id="kids_or_baby" class="form-control" required>
                                <option value="Girl">Girl</option>
                                <option value="Boy">Boy</option>
                            </select>
                        </div>
                    
                        <!-- Age Limits -->
                        <div class="form-group">
                            <label for="age_limits_from">Age Limits</label>
                            <input type="number" name="age_limits" id="age_limits" class="form-control" required>
                        </div>
                        
                    
                        <!-- Color -->
                        <div class="form-group">
                            <label for="color">Colors:</label>
                            <input type="text" class="form-control" id="color" name="color" placeholder="Enter colors separated by commas">
                        </div>
                        
                    
                        <!-- Images -->
                        <div class="form-group">
                            <label for="images">Images</label>
                            <input type="file" name="images[]" id="images" class="form-control" multiple required>
                            <small class="form-text text-muted">Maximum file size: 2MB. Allowed file types: jpg, jpeg, png, gif</small>
                        </div>
                    
                        <!-- Size -->
                        <div class="form-group">
                            <label for="size">Size</label>
                            <select name="size" id="size" class="form-control" required>
                                <option value="XXS">XXS</option>
                                <option value="XS">XS</option>
                                <option value="S">S</option>
                                <option value="M">M</option>
                                <option value="L">L</option>
                                <option value="XL">XL</option>
                                <option value="XXL">XXL</option>
                                <option value="XXXL">XXXL</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                    
                        <!-- Measurements -->
                        <!-- Assuming this is auto-generated and not entered by the user -->
                    
                        <!-- Return & Exchange -->
                        <div class="form-group">
                            <label for="return_exchange_policy">Return & Exchange Policy</label>
                            <textarea name="return_exchange_policy" id="return_exchange_policy" class="form-control" required></textarea>
                        </div>

                        
                        <div class="form-group">
                            <label for="tailor_made">Tailor Made</label>
                            <select name="tailor_made" id="tailor_made" class="form-control" required>
                                <option value="0">No</option>
                                <option value="1">Yes</option>
                            </select>
                        </div>
                    
                        <!-- Product Description -->
                        <div class="form-group">
                            <label for="product_description">Product Description</label>
                            <textarea name="product_description" id="product_description" class="form-control" required></textarea>
                        </div>
                    
                        <!-- Product Specifications -->
                        <div class="form-group">
                            <label for="product_specifications">Product Specifications</label>
                            <textarea name="product_specifications" id="product_specifications" class="form-control"></textarea>
                        </div>
                    
                        <!-- Assuming this is not a part of the form and is added dynamically -->
                    
 <!-- Whole Sale Supply -->
 <div class="form-group">
    <label for="whole_sale_supply">Whole Sale Supply</label>
    <select name="whole_sale_supply" id="whole_sale_supply" class="form-control" required>
        <option value="0">No</option>
        <option value="1">Yes</option>
    </select>
</div>
                        <!-- Number of Units available -->
                        <div class="form-group">
                            <label for="no_of_units_available">Number of Units available</label>
                            <input type="number" name="no_of_units_available" id="no_of_units_available" class="form-control" required>
                        </div>
                    
                        <button type="button" id="submitBtn" class="btn btn-primary">Submit</button>
                    </form>
                    
                    <div id="successMessage" style="display: none;" class="alert alert-success mt-3">Clothes added successfully!</div>
                    

                    <script>
                        $(document).ready(function() {
                            $('#submitBtn').click(function() {
                                var formData = new FormData($('#clothesForm')[0]);
                    
                                // Set the boolean values for tailor_made and whole_sale_supply
                                formData.append('tailor_made', $('#tailor_made').val());
                                formData.append('whole_sale_supply', $('#whole_sale_supply').val());
                    
                                $.ajax({
                                    url: '{{ route('clothes.store') }}',
                                    type: 'POST',
                                    data: formData,
                                    processData: false,
                                    contentType: false,
                                    success: function(response) {
                                        $('#successMessage').fadeIn().delay(3000).fadeOut();
                                        $('#clothesForm')[0].reset();
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