@extends('layouts.app')

@section('content')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-2 text-gray-800">Strategic Alliance Partner</h1>
    <a href="{{ route('partner.add') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Add Partners</a>
    {{-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p> --}}
</div>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Strategic alliance partners list</h6>
    </div>
    <div class="card-body">
        @if(session()->has('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif
        <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
            <tr>
                <th>S/N</th>
                <th>First Name</th>
                <th>Last Nme</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Occupation</th>
                <th>Gender</th>
                <th>DOB</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
                
            </tbody>
        </table>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<!-- Page level plugins -->
  <script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <script>
        $(function() {
            $('#dataTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('partner.datatable') }}",
                columns: [
                    {
                        data: null,
                        orderable: false,
                        searchable: false,
                        targets: 0,
                        render: function (data, type, full, meta) {
                            return meta.settings._iDisplayStart + meta.row + 1; 
                        }

                    },
                    {data: 'first_name', name: 'first_name'},
                    {data: 'last_name', name: 'last_name'},
                    {data: 'phone_no', name: 'phone_no'},
                    {data: 'email', name: 'email'},
                    {data: 'occupation', name: 'occupation'},
                    {data: 'gender', name: 'gender'},
                    {data: 'dob', name: 'dob'},
                    {
                        data: null,
                        orderable:      false,
                        searchable:     false,
                        render: function (data) {
                            let actions = '';
                            actions += '<a href="{{route('partner.show', ':id')}}" class="btn btn-xs btn-primary m-1"> View </a>';
                            actions += '<a href="{{route('partner.edit', ':id')}}" class="btn btn-xs btn-primary m-1">Edit </button>';
                                
                            return actions.replace(/:id/g, data['id']);
                        }
                    }
                ]
            });
        });
    </script>
@endpush