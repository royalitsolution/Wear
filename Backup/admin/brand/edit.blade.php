@extends('layouts.admin')

@section('content')

<div class="content-area">
<div class="mr-breadcrumb">
<div class="row">
<div class="col-lg-12">
<h4 class="heading">{{ __('Edit Brand') }} <a class="add-btn" href="{{route('admin-brand-index')}}"><i class="fas fa-arrow-left"></i> {{ __('Back') }}</a></h4>
<ul class="links">
<li>
<a href="{{ route('admin.dashboard') }}">{{ __('Dashboard') }} </a>
</li>
<li>
<a href="{{ route('admin-brand-index') }}">{{ __('Brands') }}</a>
</li>
<li>
<a href="{{route('admin-brand-edit',$data->id)}}">{{ __('Edit') }}</a>
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
<form id="geniusform" action="{{route('admin-brand-update',$data->id)}}" method="POST" enctype="multipart/form-data">
{{csrf_field()}}
@include('includes.admin.form-both') 



<div class="row">
<div class="col-lg-4">
  <div class="left-area">
      <h4 class="heading">{{ __('Image') }} *</h4>
  </div>
</div>
<div class="col-lg-7">
  <div class="img-upload full-width-img">
      <div id="image-preview" class="img-preview" style="background: url({{ $data->image ? asset('assets/images/brand/'.$data->image):asset('assets/images/noimage.png') }});">
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
  <input type="text" class="input-field" name="brand" placeholder="Title" required="" value="{{$data->brand}}">

</div>
</div>
<div class="row">
<div class="col-lg-4">
<div class="left-area">
<h4 class="heading">{{ __('Offer Title') }} *</h4>
</div>
</div>
<div class="col-lg-7">
<input type="text" class="input-field" name="description" placeholder="{{ __('Offer Title') }}" value="{{$data->description}}">
</div>
</div>

<div class="row">
<div class="col-lg-4">
  <div class="left-area">
      <h4 class="heading">{{ __('Status') }}*</h4>
  </div>
</div>
<div class="col-lg-7">
    <select  name="is_active" required="">
        <option value="">{{ __('Status') }}</option>
        <option value="Y" {{ $data->is_active == 'Y' ? 'selected':'' }}>{{ __('Active') }}</option>
        <option value="N" {{ $data->is_active  == 'N' ? 'selected':'' }}>{{ __('InActive') }}</option>
      </select>
</div>
</div>

<div class="row">
<div class="col-lg-4">
  <div class="left-area">
    
  </div>
</div>
<div class="col-lg-7">
  <button class="addProductSubmit-btn" type="submit">{{ __('Save') }}</button>
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