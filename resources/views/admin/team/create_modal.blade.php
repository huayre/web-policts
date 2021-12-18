<div class="modal fade" id="modal-team" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary pb-1 pt-1">
                <h5 class="modal-title text-light" style="font-size: 25px" id="modal-team-title"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
               <form id="form-team">
                        <label>Nombre Completo:</label>
                        <input type="text" class="form-control border-primary" name="full_name" id="full_name">
                        <label>Descripción:</label>
                        <textarea class="form-control border-primary" name="description" id="description" rows="7">
                        </textarea>
                        <label>Hoja de vida (PDF)</label>
                        <input type="file" class="form-control border-primary" name="url_cv" id="url_cv">
                        <label>Foto:</label>
                        <input type="file" class="form-control border-primary" name="url_photo" id="url_photo">
               </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" id="btn-create-team-message"></button>
                <button type="button" class="btn btn-success" id="btn-create-team"></button>
            </div>
        </div>
    </div>
</div>
