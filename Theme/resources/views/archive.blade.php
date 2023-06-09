@extends('layouts.app')

@section('content')
  @include('partials.header-archive')
  @include('partials.nav-side')
  <div class="container lg:max-w-screen-lg mx-auto px-6">
    @if (!have_posts())
      <div class="alert alert-warning">
        {{ __('Sorry, no results were found.', 'sage') }}
      </div>
      {!! get_search_form(false) !!}
    @endif
    <div class="ditto-root">
      @while (have_posts()) @php(the_post())
        {{-- @include('partials.content-'.get_post_type()) --}}
        @include('partials.content-ditto')
      @endwhile
    </div>
  </div>

  <div class="container lg:max-w-screen-lg mx-auto px-6">
    <div class="page-pagination-number">
      {!! $pagination !!}
    </div>
  </div>
@endsection
