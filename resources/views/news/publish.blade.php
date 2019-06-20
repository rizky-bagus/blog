<div class="modal fade NewsPublish" id="newsPublishModal" tabindex="-1" role="dialog" aria-labelledby="tambahLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahLabel">Publish Data News <i class="fa fa-laptop"></i></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        <form enctype="multipart/form-data" class="myFormPublish">
                            @csrf
                            <input type="hidden" name="id" id="id">
                            <input type="hidden" name="category_id" id="category_id">

                            <div class="form-group">
                                <label class="control-label mb-1">Author</label>
                                <input id="author" name="author" type="text" class="form-control" aria-required="true" aria-invalid="false" readonly>
                            </div>

                            <div class="form-group">
                                <label class="control-label mb-1">Title</label>
                                <input id="title" name="title" type="text" class="form-control" aria-required="true" aria-invalid="false" readonly>
                            </div>

                            <div class="form-group">
                                <label class="control-label mb-1">Description</label>
                                <textarea id="description" name="description" class="form-control" aria-required="true" aria-invalid="false" readonly></textarea>
                            </div>

                            <div class="form-group">
                                <label class="control-label mb-1">content</label>
                                <textarea id="content" name="content" class="form-control" aria-required="true" aria-invalid="false" readonly></textarea>
                            </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-trash"></i> Cancel</button>
                <button type="submit" class="btn btn-primary"> 
                    <i class="fa fa-check"></i>
                    Save
                </button>
                    </form>
            </div>
        </div>
    </div>
</div>