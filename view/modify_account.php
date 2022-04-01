<div class="modal fade" id="modify_account">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" style="color:#212529;">Modify account</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span> 
                </button>
            </div>
            <div class="modal-body">
               <table class='table'>
                   <tr>
                       <td colspan="2">
                        <input type="text" class='form-control' id='title_edit' name="" placeholder="Title">
                    </td>
                   </tr>
                   <tr>
                       <td>
                          <input type="text" class='form-control' id='category_edit' name="" placeholder="Category">
                       </td>
                       <td>
                          <input type="text" class='form-control' id='description_edit' name="" placeholder="Description">
                       </td>
                   </tr>

                    <tr>
                       <td>
                          <input type="number" class='form-control' id='price_edit' name="" placeholder="Price">
                       </td>
                       <td>
                          <select class='form-control' id='status_edit'>
                              <option value='empty' selected disabled>Status</option>
                              <option value='1'>1</option>
                              <option value='0'>0</option>
                          </select>
                       </td>
                   </tr>
               </table>
               <input type="hidden" id='id_edit' name="">
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="button" id='btn_modify' class="btn btn-primary">Modify</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog --> 
</div>
<!-- /.modal -->