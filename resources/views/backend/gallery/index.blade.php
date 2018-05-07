@extends('backend.layouts.app')

@section('title', 'Post')

@section('content')
    <section>
        <div class="section-body">
            <div class="card">
                <div class="card-head">
                    <header class="text-capitalize">all gallery</header>
                    <div class="tools">
                     <a class="btn btn-primary ink-reaction" href="{{ route('gallery.create') }}">
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
                            <th width="35%">Title</th>
                            <th width="45%">Published</th>
                            <th width="10%" class="text-right">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @each('backend.gallery.partials.table', $galleries, 'gallery')
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