<div class="modal fade NewsEdit" id="newsEditModal" tabindex="-1" role="dialog" aria-labelledby="tambahLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahLabel">Edit Data News <i class="fa fa-laptop"></i></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        <form enctype="multipart/form-data" class="myFormEdit">
                            @csrf
                            <input type="hidden" name="id" id="id">
                            <input type="hidden" name="author" id="author">
                            <input type="hidden" name="category_id" id="category_id">
                            @include('news.form')
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