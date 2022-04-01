<div class="modal fade" id="new_account">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" style="color:#212529">Include a new Account</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span> 
                </button>
            </div>
            <div class="modal-body">
               <table class='table'>
                   <tr>
                       <td colspan="2">
                        <input type="text" class='form-control' id='title_new' name="" placeholder="Title">
                    </td>
                   </tr>
                   <tr>
                       <td>
                          <input type="text" class='form-control' id='category_new' name="" placeholder="Category">
                       </td>
                       <td>
                          <input type="text" class='form-control' id='description_new' name="" placeholder="Description">
                       </td>
                   </tr>

                    <tr>
                       <td>
                          <input type="number" class='form-control' id='price_new' name="" placeholder="Price">
                       </td>
                       <td>
                          <select class='form-control' id='status_new'>
                              <option value='empty'>Status</option>
                              <option value='1'>1</option>
                              <option value='0'>0</option>
                          </select>
                       </td>
                   </tr>
               </table>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="button" id='save' class="btn btn-primary">Save</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog --> 
</div>
<!-- /.modal -->