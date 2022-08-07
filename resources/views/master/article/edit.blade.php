@extends('layouts.app')

@section('title')
    {{ __('Edit') }} {{ __('Article') }} | {{ config('app.name') }}
@endsection

@section('subheader')
    {{ __('Edit') }} {{ __('Article') }}
@endsection

@section('breadcrumb')
    <span class="kt-subheader__breadcrumbs-separator"></span><a href="{{ route('master.article.index') }}" class="kt-subheader__breadcrumbs-link">{{ __('Article') }}</a>
    <span class="kt-subheader__breadcrumbs-separator"></span><a href="{{ route('master.article.edit', $article->id) }}" class="kt-subheader__breadcrumbs-link">{{ $article->name }}</a>
@endsection

@section('content')
<form class="kt-form" id="kt_form_1" action="{{ route('master.article.update', $article->id) }}" method="POST">
    @method('PUT')
    @csrf

    <div class="kt-portlet" id="kt_page_portlet">
        <div class="kt-portlet__head kt-portlet__head--lg">
            <div class="kt-portlet__head-label">
                <h3 class="kt-portlet__head-title">{{ __('Edit') }} {{ __('Article') }}</h3>
            </div>
            <div class="kt-portlet__head-toolbar">
                <a href="{{ route('master.article.index') }}" class="btn btn-secondary kt-margin-r-10">
                    <i class="la la-arrow-left"></i>
                    <span class="kt-hidden-mobile">{{ __('Back') }}</span>
                </a>
                <button type="submit" class="btn btn-primary">
                    <i class="la la-check"></i>
                    <span class="kt-hidden-mobile">{{ __('Save') }}</span>
                </button>
            </div>
        </div>
        <div class="kt-portlet__body">
            <div class="kt-section kt-section--first">
                <div class="kt-section__body">
                    @include('layouts.inc.alert')

                    <div class="form-group">
                        <label for="judul">{{ __('Title') }}</label>
                        <input id="judul" name="judul" type="text" class="form-control @error('judul') is-invalid @enderror" required value="{{ old('judul', $article->title) }}">

                        @error('judul')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <label for="konten">{{ __('Content') }}</label>
                        <input id="konten" name="konten" type="text" class="form-control @error('konten') is-invalid @enderror" required value="{{ old('konten', $article->content) }}">

                        @error('konten')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection

@section('script')
    <script src="{{ asset(mix('js/form/validation.js')) }}"></script>
@endsection