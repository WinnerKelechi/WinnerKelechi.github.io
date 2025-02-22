@extends('layouts.app')

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-2 text-gray-800">Strategic Alliance Partner</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Add Partners</a>
        {{-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p> --}}
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit details</h6>
        </div>
        <div class="card-body">
            {{ Form::model($partner, ['route' => ['partner.update', $partner->id], 'files' => true, 'id' => 'edit-form']) }}
                @method('PUT')
                <fieldset>
                    <legend>Personal Details</legend>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="first_name">First Name</label>
                                {{ Form::text('first_name', null, ["class"=>"form-control", "id"=>"first_name", "placeholder"=>"Enter First Name", "maxlength"=>"50", "required" => true]) }}
                                {{-- <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Enter First Name" value="{{ old('first_name') }}" value="{{ old('first_name') }}"> --}}
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
                                {{ Form::text('last_name', null, ["class"=>"form-control", "id"=>"last_name", "placeholder"=>"Enter last name", "maxlength"=>"50", "required" => true]) }}
                                {{-- <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Enter Last Name" value="{{ old('first_name') }}" value="{{ old('last_name') }}"> --}}
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
                                {{ Form::date('dob', null, ["class"=>"form-control", "id"=>"dob", "placeholder"=>"Enter date of birth", "required" => true]) }}
                                {{-- <input type="date" class="form-control" id="dob" name="dob" placeholder="Enter First Name" value="{{ old('dob') }}"> --}}
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
                                        {{ Form::radio('gender', 'male') }}
                                    {{-- <input class="form-check-input" type="radio" name="gender" id="male" value="male" @if(old('gender') == 'male') checked @endif> --}}
                                    <label class="form-check-label" for="male">
                                        Male
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    {{ Form::radio('gender', 'female') }}
                                    {{-- <input class="form-check-input" type="radio" name="gender" id="female" value="female" @if(old('gender') == 'female') checked @endif> --}}
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
                                {{ Form::number('phone_no', null, ["class"=>"form-control", "id"=>"phone_no", "placeholder"=>"Enter phone number", "maxlength"=>"15", "required"=> true]) }}
                                
                                {{-- <input type="text" class="form-control" id="phone_no" name="phone_no" placeholder="Enter Phone Number" value="{{ old('phone_no') }}"> --}}
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
                                {{ Form::number('alternate_no', null, ["class"=>"form-control", "id"=>"alternate_no", "placeholder"=>"Enter alternate number", "maxlength"=>"15", "required"=> true]) }}
                                
                                {{-- <input type="text" class="form-control" id="alternate_no" name="alternate_no" placeholder="Enter Alternate Number" value="{{ old('alternate_no') }}"> --}}
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
                                {{ Form::email('email', null, ["class"=>"form-control", "id"=>"email", "placeholder"=>"Enter email", "maxlength"=>"100", "required"=> true]) }}
                                
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
                                {{ Form::text('address', null, ["class"=>"form-control", "id"=>"address", "placeholder"=>"Enter address", "maxlength"=>"192", "required" => true]) }}
                                
                                {{-- <input type="text" class="form-control" id="address" name="address" placeholder="Enter address" value="{{ old('address') }}"> --}}
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
                                        <option value="{{ $item->id }}" @if(old('identification_type_id') == $item->id || $partner->identification_type_id == $item->id) selected @endif>{{  $item->name }}</option>
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
                                {{ Form::text('identification_number', null, ["class"=>"form-control", "id"=>"identification_number", "placeholder"=>"Enter identification number", "required" => true]) }}
                                
                                {{-- <input type="text" class="form-control" id="identification_number" name="identification_number" placeholder="Enter identification number:" value="{{ old('identification_number') }}"> --}}
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
                                <label for="bank">Bank Name::</label>
                                {{ Form::text('bank', null, ["class"=>"form-control", "id"=>"bank", "placeholder"=>"Enter bank", "required" => true]) }}
                                
                                {{-- <input type="text" class="form-control" id="bank" name="bank" placeholder="Enter bank" value="{{ old('bank') }}"> --}}
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
                                {{ Form::number('account_no', null, ["class"=>"form-control", "id"=>"account_no", "placeholder"=>"Enter account no", "maxlength"=>"10", "required" => true]) }}
                                
                                {{-- <input type="text" class="form-control" id="account_no" name="account_no" placeholder="Enster bank account number" value="{{ old('account_no') }}"> --}}
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
                                {{ Form::date('acceptance_date', null, ["class"=>"form-control", "id"=>"acceptance_date", "placeholder"=>"Enter acceptance date", "required" => true]) }}
                                
                                {{-- <input type="date" class="form-control" id="acceptance_date" name="acceptance_date" value="{{ old('acceptance_date') }}"> --}}
                                @error('acceptance_date')
                                    <span class="text-danger" role="alert">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div> 
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="partner_id">Partner Id: </label>
                                {{ Form::text('partner_id', null, ["class"=>"form-control", "id"=>"partner_id", "placeholder"=>"Enter partner id", "required" => true]) }}
                                
                                {{-- <input type="text" class="form-control" id="partner_id" name="partner_id" placeholder="Enter partner id" value="{{ old('partner_id') }}"> --}}
                                @error('partner_id')
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
                                <label for="occupation">Occupation: </label>
                                {{ Form::text('occupation', null, ["class"=>"form-control", "id"=>"occupation", "placeholder"=>"Enter occupation", "required" => true]) }}
                                
                                {{-- <input type="text" class="form-control" id="occupation" name="occupation" placeholder="Occupation" value="{{ old('occupation') }}"> --}}
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
                                Update partner
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
    $('#edit-form').validate({
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