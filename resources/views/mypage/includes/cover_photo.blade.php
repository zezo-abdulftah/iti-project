
<div class="modal-dialog setting-area  top-areamodal cover" style="display: none;z-index: 200;position: absolute;margin-left:450px;width: 600px;height: 400px">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <i class="material-icons close">close</i>
            </button>
        </div>
        <div class="modal-body">
            <div class="col-lg-12">
                <div class="central-meta">
                    <div class="editing-info">
                        <h5 class="f-title"><i class="ti-info-alt"></i> Edit Basic Information</h5>
                        @include('site.includes.alerts.errors')
                        @include('site.includes.alerts.success')

                        <form action="{{route('update_coverPhoto')}}" method="Post" enctype="multipart/form-data">
                            @csrf
                            @method('post')




                            <label class="control-label" >cover photo</label><i class="mtrl-select"></i>
                            <div class="form-group">


                                <i class="fa fa-camera-retro"></i>
                                <label class="fileContainer">
                                    Edit Display Photo
                                    <input name="cover_photo" type="file"/>
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
