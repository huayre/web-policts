<div class="modal fade" id="modal-page" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary pb-1 pt-1">
                <h5 class="modal-title text-light" style="font-size: 25px" id="modal-page-title"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
               <form id="form-page">
                   <label>Foto:</label>
                   <input type="file" accept="image/*" class="form-control border-primary" name="url_img" id="url_img" onchange="previewImg()">
               </form>
                <hr>
                <img id="preview_img" style="width: 100%;height: 100%">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" id="btn-create-page-message"></button>
                <button type="button" class="btn btn-success" id="btn-create-page"></button>
            </div>
        </div>
    </div>
</div>
