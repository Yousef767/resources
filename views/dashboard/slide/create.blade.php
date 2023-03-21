@extends('dashboard.layouts.app')

@section('title', ' - '.__('create') .' '. __('slides'))

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card card-outline card-warning">
                <div class="card-header">
                    <h3 class="card-title">{{__('create')}} {{__('slides')}}</h3>
                </div>

                <form action="{{route('slides.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="title_ar">{{__('title_ar')}} <span class="text-danger">*</span></label>
                                    <input value="{{old('title_ar')}}" placeholder="{{__('title_ar')}}" id="title_ar" type="text" class="form-control @error('title_ar') is-invalid @enderror" name="title_ar">
                                    @error('title_ar')
                                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="title_en">{{__('title_en')}} <span class="text-danger">*</span></label>
                                    <input value="{{old('title_en')}}" placeholder="{{__('title_en')}}" id="title_en" type="text" class="form-control @error('title_en') is-invalid @enderror" name="title_en">
                                    @error('title_en')
                                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="icon">{{__('icon')}} <span class="text-danger">*</span></label>
                                    <input placeholder="{{__('icon')}}" id="icon" type="file" class="form-control @error('icon') is-invalid @enderror" name="icon">
                                    @error('icon')
                                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3 mt-3">
                                    <label for="active">
                                        {{__('active')}}
                                    </label>
                                    <input type="checkbox" name="active" id="active" value="1" {{ old('active') ? 'checked' : '' }}>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-center">
                        <button type="submit" class="btn btn-sm btn-warning">
                            <i class="fa fa-plus"></i>
                            {{__('create')}}
                        </button>
                        <a class="btn btn-sm btn-dark" href="{{route('slides.index')}}">
                            <i class="fa fa-undo"></i>
                            {{__('cancel')}}
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
