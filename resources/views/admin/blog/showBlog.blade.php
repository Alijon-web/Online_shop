@include('layouts.header')
@include('layouts.sidebar')


<div class="content-wrapper" style="min-height: 2646.44px;">

<div class="container-fluid p-3">
    <div class="row mb-2">
{{--        <div class="col-sm-6">--}}
{{--            <ol class="breadcrumb float-sm-right">--}}
{{--                <li class="breadcrumb-item"><a href="https://3d.brim.uz/dashboard"><i class="fas fa-home"></i> Dashboard</a>--}}
{{--                </li>--}}
{{--                <li class="breadcrumb-item"><a href="https://3d.brim.uz/admin/posts"><i class=""></i> Yangiliklar</a></li>--}}
{{--                <li class="breadcrumb-item active"><i class="fas fa-circle"></i> Til va extiyoj--}}
{{--                </li>--}}
{{--            </ol>--}}
{{--        </div>--}}
    </div>
    <div class="card card-outline card-primary">
        <div class="card-header">
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i></button>
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-plus"></i>
                </button>
            </div>
        </div>
        <div class="card-body table-responsive">
            <table class="table table-bordered">
                <tbody><tr>
                    <th>ID</th>
                    <td>{{$blog->id}}</td>
                </tr>
                <tr>
                    <th>Rasm</th>
                    <td><img src="{{asset('/storage/'.$blog->image)}}" alt="" style="width: 60px;height: 60px"></td>
                </tr>
                <tr>
                    <th>Sarlavha [uz]</th>
                    <td>{{$blog->getTranslation('title','uz')}}</td>
                </tr>
                <tr>
                    <th>Sarlavha [ru]</th>
                    <td>{{$blog->getTranslation('title','ru')}}</td>
                </tr>
                <tr>
                    <th>Sarlavha [en]</th>
                    <td>{{$blog->getTranslation('title','en')}}</td>
                </tr>
                <tr>
                    <th>Kontent [uz]</th>
                    <td><p>{{$blog->getTranslation('description','uz')}}<br></p></td>
                </tr>
                <tr>
                    <th>Kontent [ru]</th>
                    <td><p>{{$blog->getTranslation('description','ru')}}<br></p></td>
                </tr>
                <tr>
                    <th>Kontent [en]</th>
                    <td><p>{{$blog->getTranslation('description','en')}}<br></p></td>
                </tr>
                <tr>
                    <th>Holati</th>
                    <td>
                        <span class="badge badge-success">Faol</span>
                    </td>
                </tr>
                <tr>
                    <th>Yaratilgan vaqti</th>
                    <td>{{$blog->created_at}}</td>
                </tr>
                <tr>
                    <th>Tahrirlangan vaqti</th>
                    <td>{{$blog->updated_at}}</td>
                </tr>
                </tbody></table>
        </div>
    </div>
</div>
</div>
@include('layouts.footer')
