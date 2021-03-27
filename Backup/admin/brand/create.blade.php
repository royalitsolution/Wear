@extends('layouts.admin')

@section('content')

<div class="content-area">
<div class="mr-breadcrumb">
<div class="row">
<div class="col-lg-12">
<h4 class="heading">{{ __('Add Brand') }} <a class="add-btn" href="{{route('admin-brand-index')}}"><i class="fas fa-arrow-left"></i> {{ __('Back') }}</a></h4>
<ul class="links">
<li>
<a href="{{ route('admin.dashboard') }}">{{ __('Dashboard') }} </a>
</li>

<li>
<a href="{{ route('admin-brand-index') }}">{{ __('Brand') }}</a>
</li>
<li>
<a href="{{ route('admin-brand-create') }}">{{ __('Add Brand') }}</a>
</li>
</ul>
</div>
</div>
</div>
<div class="add-product-content">
<div class="row">
<div class="col-lg-12">
<div class="product-description">
<div class="body-area">
<div class="gocover" style="background: url({{asset('assets/images/'.$gs->admin_loader)}}) no-repeat scroll center center rgba(45, 45, 45, 0.5);"></div>
<form id="geniusform1" action="{{route('admin-brand-create')}}" method="POST" enctype="multipart/form-data">
{{csrf_field()}}
@include('includes.admin.form-both') 
{{-- Title Section Ends--}}


<div class="row">
<div class="col-lg-4">
<div class="left-area">
<h4 class="heading">{{ __('Image') }} *</h4>
</div>
</div>
<div class="col-lg-7">
<div class="img-upload full-width-img">
<div id="image-preview" class="img-preview" style="background: url({{ asset('assets/admin/images/upload.png') }});">
<label for="image-upload" class="img-label" id="image-label"><i class="icofont-upload-alt"></i>{{ __('Upload Image') }}</label>
<input type="file" name="image" class="img-upload" id="image-upload">
</div>
<p class="text">{{ __('Prefered Size: (1920x800) or Square Sized Image') }}</p>
</div>

</div>
</div>


<div class="row">
<div class="col-lg-4">
<div class="left-area">
<h4 class="heading">{{ __('Title') }} *</h4>
</div>
</div>
<div class="col-lg-7">
<input type="text" class="input-field" name="brand" placeholder="{{ __('Title') }}" required="" value="">
</div>
</div>

<div class="row">
<div class="col-lg-4">
<div class="left-area">
<h4 class="heading">{{ __('Offer Title') }} *</h4>
</div>
</div>
<div class="col-lg-7">
<input type="text" class="input-field" name="description" placeholder="{{ __('Offer Title') }}" value="">
</div>
</div>



<div class="row">
<div class="col-lg-4">
<div class="left-area">
<h4 class="heading">{{ __('Status') }}*</h4>
</div>
</div>
<div class="col-lg-7">
<select name="is_active" required="">
<option value="" disabled>{{ __('Select Status') }}</option>
<option value="Y">{{ __('Active') }}</option>
<option value="N">{{ __('InActive') }}</option>

</select>
</div>
</div>

<div class="row">
<div class="col-lg-4">
<div class="left-area">

</div>
</div>
<div class="col-lg-7">
<button class="addProductSubmit-btn" type="submit">{{ __('Create Slider') }}</button>
</div>
</div>

</form>
</div>
</div>
</div>
</div>
</div>
</div>

@endsection