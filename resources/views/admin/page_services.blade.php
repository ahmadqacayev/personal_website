@extends('admin.layout.app')

@section('heading', 'Edit Services Content')

@section('main_content')
    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('admin_page_services_update')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">

                                <div class="col-md-12">

                                    <div class="mb-4">
                                        <label class="form-label">Heading</label>
                                        <input type="text" class="form-control" name="services_heading" value="{{$page_data->services_heading}}">
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label">Existing Banner </label>
                                        <div>
                                            <img src="{{asset('uploads/'.$page_data->services_banner)}}" alt=""
                                                 class="w_200">
                                        </div>
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label">Change Banner </label>
                                        <div>
                                            <input type="file" name="services_banner">
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">Seo Title</label>
                                        <input type="text" class="form-control" name="services_seo_title" value="{{$page_data->services_seo_title}}">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">Seo Meta Description</label>
                                        <textarea name="services_seo_meta_description" class="form-control h_100" cols="30" rows="10">{{$page_data->services_seo_meta_description}}</textarea>
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label"></label>
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection








