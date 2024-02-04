@include('layouts.header')
@include('layouts.sidebar')
<div class="content-wrapper" style="min-height: 2646.44px;">
    <form action="{{route('update.images',['id'=>$image->id])}}" method="POST" enctype="multipart/form-data">
        @method("PUT")
        @csrf
{{--@dd($image)--}}
        <section class="content m-1">
            <div class="row">
                <div class="col-md-12 ">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Images</h3>
                        </div>
                        <div>
                    <span class="username">
                        <a href="{{route('image',['id'=>$image->product_id])}}" class="float-right ">Home</a>
                    </span>
                        </div>
                        <div class="card-body">


                            <div class="form-group">
                                <label for="inputDescription">Image</label>
                                <img src="{{asset('/storage/'.$image->images)}}">
                                <input type="file" value="{{$image->images}}"  name="image"  class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="inputStatus">Status</label>
                                <select id="inputStatus" value="{{$image->status}}"  class="form-control custom-select">
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
