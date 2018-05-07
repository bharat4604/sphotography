@extends('backend.layouts.app')

@section('title', 'Blog')

@section('content')
    <section>
        <div class="section-body">
            <div class="card">
                <div class="card-head">
                    <header class="text-capitalize">all Blogs</header>
                    <div class="tools">
                        <a class="btn btn-primary ink-reaction" href="{{ route('blog.create') }}">
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
                            <th width="40%">Title</th>
                            {{--<th width="30%">Title</th>--}}
                            <th width="30%" class="text-center">Published</th>
                            <th width="15%" class="text-right">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @each('backend.blog.partials.table', $blogs, 'blog')
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@stop