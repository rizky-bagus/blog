<div class="modal fade" id="categoryModal" tabindex="-1" role="dialog" aria-labelledby="tambahLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahLabel">Tambah Data Category <i class="fa fa-laptop"></i></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        <form enctype="multipart/form-data" id="createData">
                            @csrf
                            
                            <div class="form-group">
                                <label class="control-label mb-1">Category</label>
                                <input id="category" name="category" type="text" class="form-control" aria-required="true" aria-invalid="false">
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