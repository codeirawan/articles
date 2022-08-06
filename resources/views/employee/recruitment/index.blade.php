@extends('layouts.app')

@section('title')
    {{ __('Recruitment') }} | {{ config('app.name') }}
@endsection

@section('style')
    <link href="{{ asset(mix('css/datatable.css')) }}" rel="stylesheet">
@endsection

@section('subheader')
    {{ __('Recruitment') }}
@endsection

@section('breadcrumb')
    <span class="kt-subheader__breadcrumbs-separator"></span><a href="{{ route('recruitment.index') }}" class="kt-subheader__breadcrumbs-link">{{ __('Recruitment') }}</a>
@endsection

@section('content')
<div class="kt-portlet">
    <div class="kt-portlet__body">
        <div class="kt-portlet__content">
            @include('layouts.inc.alert')

            @if (Laratrust::isAbleTo('create-recruitment'))
                <a href="{{ route('recruitment.create') }}" class="btn btn-primary mb-4">
                    <i class="fa fa-plus"></i> {{ __('New Recruitment') }}
                </a>
            @endif

            <table class="table table-striped- table-bordered table-hover" id="kt_table_1"></table>
        </div>
    </div>
</div>
@endsection

@section('script')
    @include('layouts.inc.modal.delete', ['object' => 'recruitment'])
    @include('employee.recruitment.inc.modal.verify', ['object' => 'recruitment'])
    @include('employee.recruitment.inc.modal.cancel')
    @include('employee.recruitment.inc.modal.schedule')
    @include('employee.recruitment.inc.modal.validate', ['object' => 'recruitment'])

    <script src="{{ asset(mix('js/datatable.js')) }}"></script>
    <script src="{{ asset(mix('js/tooltip.js')) }}"></script>
    <script src="{{ asset(mix('js/form/validation.js')) }}"></script>
    <script type="text/javascript">
        $('#kt_table_1').DataTable({
            processing: true,
            serverSide: true,
            responsive: true,
            language: {
                emptyTable: "{{ __('No data available in table') }}",
                info: "{{ __('Showing _START_ to _END_ of _TOTAL_ entries') }}",
                infoEmpty: "{{ __('Showing 0 to 0 of 0 entries') }}",
                infoFiltered: "({{ __('filtered from _MAX_ total entries') }})",
                lengthMenu: "{{ __('Show _MENU_ entries') }}",
                loadingRecords: "{{ __('Loading') }}...",
                processing: "{{ __('Processing') }}...",
                search: "{{ __('Search') }}",
                zeroRecords: "{{ __('No matching records found') }}"
            },
            ajax: {
                method: 'POST',
                url: '{{ route('recruitment.data') }}',
                headers: { 'X-CSRF-TOKEN': '{{ csrf_token() }}' }
            },
            columns: [
                { title: "{{ __('Name') }}", data: 'name', name: 'name', defaultContent: '-', class: 'text-center' },
                { title: "{{ __('Email') }}", data: 'email', name: 'email', defaultContent: '-', class: 'text-center' },
                { title: "{{ __('Phone Number') }}", data: 'phone_number', name: 'phone_number', defaultContent: '-', class: 'text-center' },
                { title: "{{ __('Resume Source') }}", data: 'resume_source', name: 'resume_source', defaultContent: '-', class: 'text-center', searchable: false },
                { title: "{{ __('Position') }}", data: 'position', name: 'position', defaultContent: '-', class: 'text-center', searchable: false },
                { title: "{{ __('City') }}", data: 'city', name: 'city', defaultContent: '-', class: 'text-center', searchable: false },
                { title: "{{ __('Interview Schedule') }}", data: 'interview_at', name: 'interview_at', defaultContent: '-', class: 'text-center' },
                { title: "{{ __('Status') }}", data: 'status', name: 'status', defaultContent: '-', class: 'text-center' },
                { title: "{{ __('Action') }}", data: 'action', name: 'action', defaultContent: '-', class: 'text-center', searchable: false, orderable: false }
            ],
            drawCallback: function() {
                $('.btn-tooltip').tooltip();
            }
        });
    </script>
@endsection