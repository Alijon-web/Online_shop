@include('layouts.header')
@include('layouts.sidebar')
<div class="content-wrapper" style="min-height: 2646.44px;">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header p-3">

                <div class="user-block">
                             <span class="username">

                                  <a href="{{route('create.image',['id'=>$product->id])}}" class="float-right ">Create image</a>
                              </span>
                </div>


            </div><!-- /.card-header -->
            <div class="card-body">
                <div class="tab-content">
                    <div class="tab-pane active" id="activity">
                        <div>
                            <!-- Post -->
                            <div id="w0" class="gallery-manager d-flex justify-content-around align-items-center">
                                <!-- Gallery Toolbar -->


                                {{--                                <div class="btn-toolbar" style="padding:4px">--}}
                                {{--                                    <form action="{{route('store.images',['id'=>$product->id])}}" method="POST" enctype="multipart/form-data">--}}
                                {{--                                        @csrf--}}
                                {{--                                    <div class="btn-group" style="display: inline-block;">--}}
                                {{--                                        <div class="btn btn-success btn-file" style="display: inline-block">--}}
                                {{--                                            <i class="glyphicon glyphicon-plus"></i>Add…                <input type="file" name="gallery-image" class="afile" accept="image/*" multiple="multiple">--}}
                                {{--                                        </div>--}}
                                {{--                                    </div>--}}
                                {{--                                        <form>--}}

                                {{--                                    <div class="btn-group" style="display: inline-block;">--}}

                                {{--                                        <label class="btn btn-default">--}}
                                {{--                                            <input type="checkbox" style="margin-right: 4px;" class="select_all">Select all            </label>--}}
                                {{--                                        <div class="btn btn-default disabled edit_selected">--}}
                                {{--                                            <i class="fas fa-pencil"></i> Edit            </div>--}}
                                {{--                                        <div class="btn btn-default disabled remove_selected">--}}
                                {{--                                            <i class="fas fa-trash"></i> Remove            </div>--}}
                                {{--                                    </div>--}}
                                {{--                                </div>--}}
                                @foreach($images as $image)

                                    <!-- Gallery Photos -->
                                    <div class="sorter ">
                                        <div class="images ui-sortable">
                                            <div class="photo">
                                                <div class="image-preview">
                                                    <img src="{{asset('/storage/'.$image->images)}}"></div>
                                                <div class="actions">
                                                    <span class="editPhoto btn btn-primary btn-xs">
                                                        <a href="{{route('detail.images',['id'=>$image->id])}}">
                                                     <i class="fas fa-pencil-alt text-white"></i>
                                                        </a>
                                                    </span>
                                                    <form action="{{route('delete.images',['id'=>$image->id])}}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                    <span class="deletePhoto btn btn-danger btn-xs">
                                                      <button type="submit">
                                                           <i class="fas fa-trash text-white"></i>

                                                      </button>
                                                    </span>
                                                    </form>
                                                </div>

                                            </div>
                                            <br style="clear: both;">
                                        </div>

                                        <!-- Modal window to edit photo information -->
                                        <div class="editor-modal modal fade">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <a class="close" data-dismiss="modal">×</a>

                                                        <h3 class="modal-title">Edit information</h3>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="form"></div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <a href="#" class="btn btn-primary save-changes">
                                                            Save changes </a>
                                                        <a href="#" class="btn" data-dismiss="modal">Close</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach

                                        <div class="progress-overlay">
                                            <div class="overlay-bg">&nbsp;</div>
                                            <!-- Upload Progress Modal-->
                                            <div class="modal progress-modal">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h3>Uploading images…</h3>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="progress ">
                                                                <div
                                                                    class="progress-bar progress-bar-info progress-bar-striped active upload-progress"
                                                                    role="progressbar">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                            </div>
                            <!-- /.post -->
                        </div>

                    </div>
                    <!-- /.tab-content -->
                </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
@include('layouts.footer')
