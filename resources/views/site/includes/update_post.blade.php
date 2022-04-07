
<div class="modal-dialog setting-area  top-areamodal posts{{$post->id}} posting" style="display: none;margin-left: 100px;z-index: 200;position:absolute;height: 500px">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <i class="material-icons close">close</i>
            </button>
        </div>
        <div class="modal-body" style="">
            <div class="col-lg-12">
                <div class="central-meta">
                    <div class="editing-info">
                        <h5 class="f-title"><i class="ti-info-alt"></i> Update Post</h5>
                        @include('site.includes.alerts.errors')
                        @include('site.includes.alerts.success')

                        <form action="{{route('update_post')}}" method="Post" enctype="multipart/form-data">
                            @csrf
                            @method('post')
                            <input type="hidden" value="{{$post->id}}" name="post_id">



                            <textarea name="body" rows="3" >{{$post->body}}</textarea>

                            <div class="form-group">
                                <img width="200px" height="150px" src="{{asset('assets/images/posts/'.$post->image)}}" >


                                <i class="fa fa-camera-retro"></i>
                                <label class="fileContainer">
                                    Edit post Photo
                                    <input  name="post_image" type="file"/>
                                </label>



                            </div>








                            <div class="submit-btns">

                                <button type="submit" class="mtr-btn"><span>Update</span></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
