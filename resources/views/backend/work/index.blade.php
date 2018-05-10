@extends('backend.layouts.app')

@section('title', 'work')

@section('content')
    <section>
        <div class="section-body">
            <div class="card">
                <div class="card-head">
                    <header class="text-capitalize">all work</header>
                    <div class="tools">
                     <a class="btn btn-primary ink-reaction" href="{{ route('work.create') }}">
                            <i class="md md-add"></i>
                            Add
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-hover" id="my-table">
                        <thead>
                        <tr>
                            <th width="10%">#</th>
                            <th width="30%">Title</th>
                            <th width="20%">View</th>
                            <th width="30%">Published</th>
                            <th width="10%" class="text-right">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @each('backend.work.partials.table', $works, 'work')
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@stop
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/libs/DataTables/jquery.dataTables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/libs/DataTables/TableTools.min.css') }}"/>
@endpush

@push('scripts')
    <script src="{{ asset('js/DataTables/datatables.min.js') }}"></script>
@endpush