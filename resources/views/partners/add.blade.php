@extends('layouts.app')

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-2 text-gray-800">Strategic Alliance Partner</h1>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Add new partner</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('partner.store') }}" method="post" enctype="multipart/form-data" id="add-form">
               {{ csrf_field() }}
                <fieldset>
                    <legend>Personal Details</legend>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="first_name">First Name</label>
                                <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Enter First Name" value="{{ old('first_name') }}" value="{{ old('first_name') }}" maxlength="50" required>
                                @error('first_name')
                                    <span class="text-danger" role="alert">
                                        {{ $message }}
                                    </span>
                                @enderror

                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="last_name">Last name</label>
                                <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Enter Last Name" value="{{ old('first_name') }}" value="{{ old('last_name') }}" maxlength="50" required>
                                @error('last_name')
                                    <span class="text-danger" role="alert">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="dob">Date of Birth</label>
                                <input type="date" class="form-control" id="dob" name="dob" placeholder="Enter First Name" value="{{ old('dob') }}" required>
                                @error('dob')
                                    <span class="text-danger" role="alert">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="gender">Gender</label>
                                <div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gender" id="male" value="male" @if(old('gender') == 'male') checked @endif required>
                                        <label class="form-check-label" for="male">
                                            Male
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gender" id="female" value="female" @if(old('gender') == 'female') checked @endif required>
                                        <label class="form-check-label" for="female">
                                            Female
                                        </label>
                                    </div>
                                </div>
                                
                                @error('gender')
                                    <span class="text-danger" role="alert">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </fieldset>

                <fieldset>
                    <legend>Contact Details</legend>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="phone_no">Phone Number</label>
                                <input type="number" class="form-control" id="phone_no" name="phone_no" placeholder="Enter Phone Number" value="{{ old('phone_no') }}" required maxlength="15">
                                @error('phone_no')
                                    <span class="text-danger" role="alert">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="alternate_no">Alternate Number</label>
                                <input type="number" class="form-control" id="alternate_no" name="alternate_no" placeholder="Enter Alternate Number" value="{{ old('alternate_no') }}" maxlength="15" required>
                                @error('alternate_no')
                                    <span class="text-danger" role="alert">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="{{ old('email') }}" maxlength="100" required>
                                @error('email')
                                    <span class="text-danger" role="alert">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="address">Address</label>
                                <input type="text" class="form-control" id="address" name="address" placeholder="Enter address" value="{{ old('address') }}" maxlength="192" required>
                                @error('address')
                                    <span class="text-danger" role="alert">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </fieldset>

                <fieldset>
                    <legend>Other details</legend>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="identification_type_id">Means of Identification</label>
                                <select id="identification_type_id" name="identification_type_id" value="{{ old('identification_type_id') }}" class="form-control" required>
                                    <option value="">Select means of identification</option>
                                    @foreach ($identificationTypes as $item)
                                        <option value="{{ $item->id }}" @if(old('identification_type_id') == $item->id) selected @endif>{{  $item->name }}</option>
                                    @endforeach
                                </select>
                                @error('identification_type_id')
                                    <span class="text-danger" role="alert">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="identification_number">Identification Number:</label>
                                <input type="text" class="form-control" id="identification_number" name="identification_number" placeholder="Enter identification number:" value="{{ old('identification_number') }}" required>
                                @error('identification_number')
                                    <span class="text-danger" role="alert">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>  
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="bank">Bank Name:</label>
                                <input type="text" class="form-control" id="bank" name="bank" placeholder="Enter bank" value="{{ old('bank') }}" required>
                                @error('bank')
                                    <span class="text-danger" role="alert">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div> 
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="account_no">Bank Account Number: </label>
                                <input type="number" class="form-control" id="account_no" name="account_no" placeholder="Enter bank account number" value="{{ old('account_no') }}" maxlength="10" required>
                                @error('account_no')
                                    <span class="text-danger" role="alert">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div> 
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="acceptance_date">Acceptance Date:</label>
                                <input type="date" class="form-control" id="acceptance_date" name="acceptance_date" value="{{ old('acceptance_date') }}" required>
                                @error('acceptance_date')
                                    <span class="text-danger" role="alert">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div> 
                        <!-- <div class="col-sm-6">
                            <div class="form-group">
                                <label for="partner_id">Partner Id: </label>
                                <input type="text" class="form-control" id="partner_id" name="partner_id" placeholder="Enter partner id" value="{{ old('partner_id') }}" required>
                                @error('partner_id')
                                    <span class="text-danger" role="alert">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>  -->
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="occupation">Occupation: </label>
                                <input type="text" class="form-control" id="occupation" name="occupation" placeholder="Occupation" value="{{ old('occupation') }}" required>
                                @error('occupation')
                                    <span class="text-danger" role="alert">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="image">File:</label>
                                <input type="file" class="form-control" id="image" name="image">
                                @error('image')
                                    <span class="text-danger" role="alert">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3 mx-auto">
                            <button type="submit" class="btn btn-primary btn-lg">
                                Add partner
                            </button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
@endsection

@push('css')
<style>    
    fieldset{
        border: 1px solid #e2e8ee;
        padding: 10px;
        margin-bottom: 20px;
    }

    fieldset legend {
        font-size: 1rem;
    }
</style>
@endpush

@push('scripts')
<script>
    $('#add-form').validate({
        errorPlacement: function(error, element) {
            if (element.attr("type") == "radio") {
                error.insertAfter(element.parent().parent());
            } else {
                error.insertAfter(element);
            }
        } 
    });
</script>    
@endpush