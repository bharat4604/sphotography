@extends('backend.layouts.app')

@section('title', 'Career')

@section('content')
    <section>
        <div class="section-body">
            <div class="card">
                <div class="card-head">
                    <header class="text-capitalize">all Careers</header>
                    <div class="tools">
                        <a class="btn btn-primary ink-reaction" href="{{ route('career.create') }}">
                            <i class="md md-add"></i>
                            Add
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th width="5%">#</th>
                            <th width="30%">Name</th>
                            <th width="5%">Publish</th>
                            <th width="1%" >Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @each('backend.career.partials.table', $careers, 'career')
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@stop