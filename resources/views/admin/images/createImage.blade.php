@include('layouts.header')
@include('layouts.sidebar')
<div class="content-wrapper" style="min-height: 2646.44px;">
    <form action="{{route('store.images',['id'=>$product->id])}}" method="POST" enctype="multipart/form-data">
        @method("POST")
        @csrf

        <section class="content m-1">
            <div class="row">
{{--                <ul class="navbar-nav">--}}

{{--                    <li class="text-end">--}}
{{--                        <a href="{{route('image')}}" class="nav-link">Home</a>--}}
{{--                    </li>--}}

{{--                </ul>--}}
                <div class="col-md-12 ">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Images</h3>
                        </div>
                        <div>
                    <span class="username">
                        <a href="{{route('image',['id'=>$product->id])}}" class="float-right ">Home</a>
                    </span>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="inputDescription">Image</label>
                                <input type="file" name="image"  class="form-control">
                                @error('image')
                                <div class="text-danger">This field is required</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="inputStatus">Status</label>
                                <select id="inputStatus" class="form-control custom-select">
                                    <option selected="" disabled="">Select one</option>
                                    <option value="0">Canceled</option>
                                    <option value="1">Success</option>
                                </select>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>

            </div>
            <div class="row">
                <div class="col-12">
                    <a href="#" class="btn btn-secondary">Cancel</a>
                    <input type="submit" value="Create new Project" class="btn btn-success float-right">
                </div>
            </div>
        </section>
    </form>
</div>
@include('layouts.footer')
