@extends('layouts.app')

@push('page-style')
<!-- <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet"> -->
<link href="{{ asset('admin/assets/datatables/datatables.bundle.css') }}" rel="stylesheet">
@endpush

@section('content')
</div>
    <div class="container">
      <nav class="breadcrumb">
        <a href="/" class="breadcrumb-item">Forum Categories</a>
        <a href="{{route('category.overview', $forum->category->id)}}" class="breadcrumb-item">{{$forum->category->title}}</a>
        <span class="breadcrumb-item active">{{$forum->title}}</span>
      </nav>

      <a href="{{route('topic.new', $forum->id)}}" class="btn btn-lg btn-primary mb-2">New Topic</a>

      <div class="mb-3 clearfix">
        <form action="{{ route('forum.overview', $forum->id) }}" class="form-inline float-lg-left d-block d-sm-flex">
          <div class="mb-2 mb-sm-0 mr-2">Display posts from previous</div>
          <div class="form-group mr-2">
            <label class="sr-only" for="select-time"> Time Period</label>
            <select
              name="select-time"
              id="select-time"
              class="form-control form-control-sm"
            >
              <option value="all">All posts</option>
              <option value="day">1 day</option>
              <option value="week">1 week</option>
              <option value="month">1 month</option>
              <option value="year">1 year</option>
            </select>
          </div>

          <div class="mb-2 mb-sm-0 mr-2">Sort by:</div>
          <div class="form-group mr-2">
            <label class="sr-only" for="post-sort">Sort posts by:</label>
            <select
              name="sort-by"
              id="sort-by"
              class="form-control form-control-sm"
            >
              <option value="author">Author</option>
              <option value="post-time">Post time</option>
              <option value="replies">Replies</option>
              <option value="subject">Subject</option>
              <option value="views">Views</option>
            </select>
          </div>

          <div class="mb-2 mb-sm-0 mr-2">Sort direction:</div>
          <div class="form-group mr-2">
            <label class="sr-only" for="post-direct">Sort direct:</label>
            <select
              name="direction"
              id="direction"
              class="form-control form-control-sm"
            >
              <option value="desending">Desending</option>
              <option value="ascending">Ascending</option>
            </select>
          </div>
          <button type="submit" class="btn btn-sm btn-primary">Sort</button>
        </form>
      </div>
      

      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <!-- Category one -->
            <div class="col-lg-12">
              <!-- second section  -->
              <h4 class="text-white bg-info mb-0 p-4 rounded-top">
                {{$forum->title}}
              </h4>
              <table
                class="table table-striped table-responsivelg table-bordered"
                id="topic_table"
              >
                <thead>
                  <th></th><th></th><th></th>
                </thead>
                <tbody></tbody>
              </table>
              
            </div>
          </div>
        </div>
      </div>

    </div>
@endsection

@push('page-script')
<script>
  const getUrl = "{{ route('forum.topics', $forum->id) }}";
</script>
<script src="{{ asset('admin/assets/datatables/datatables.bundle.js') }}"></script>
<script src="{{ asset('js/overview.js') }}"></script>
@endpush
