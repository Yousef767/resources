@extends('dashboard.layouts.app')

@section('title', ' - '.__('withdraw'))

@section('content')
<div class="container">
    <div class="page-content">
        <h4>{{__("withdraw")}}</h4>
        <div class="row">
            @isset($error)
            <div class="alert alert-default-danger">
                <ul>
                        <li>{{ $error }}</li>
                </ul>
            </div>
                    @endisset
            <form class="my-3 col-md-6" method="post" action="{{route("withdraw_store")}}"
                enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="Code">{{__("code")}}</label>
                    <input value="{{old('code')}}" type="number" name="code" class="form-control" id="Code"
                        placeholder="{{__("code")}}">
                        <a href="{{ route('withdraw') }}">{{ __("resend code") }}</a>
                    @error('code')
                    <div class="text-danger font-weight-bold">*{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="price">{{__("Amount")}}</label>
                    <input value="{{old('amount')}}" type="number" class="form-control" name="amount" id="price"
                        placeholder="{{__("Amount")}}">
                    @error('amount')
                    <div class="text-danger font-weight-bold">*{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <button class="btn btn-warning">{{__("Submit")}}</button>
                </div>
            </form>
        </div>

    </div>
</div>

@endsection

@section("scripts")
<script>
    $('.image_upload input').on('change', function () {
            var img = $(this).get(0).files[0];
            if (img) {
                var reader = new FileReader();
                reader.onload = function () {
                    $('.image_upload .image img').attr('src', reader.result);
                };
                reader.readAsDataURL(img);
            } else {
                $(this).siblings('.image').find('img').attr('src', '{{asset("images/image_upload.png")}}');
            }
        });
</script>
@endsection
