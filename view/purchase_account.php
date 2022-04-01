<div class="modal fade" id="purchase_account">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" style="color:#212529">Purchase Account</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span> 
                </button>
            </div>
            <div class="modal-body">
                   <center>
                     <span style='font-size:60px;'></span>
                     <br><br>
                     <table class="table" style="width: 70%">
                       <tr>
                         <td rowspan='4' style="width: 30%;"><img style="width:95%;" src="view/images/shopping_cart.png"></td>
                         <td>Category-></td><td id='category_buy'></td>
                       </tr>
                       <tr>
                         <td>Description-></td><td id='description_buy'></td>
                       </tr>
                       <tr>
                         <td>Price-></td><td id='price_buy'></td>
                       </tr>
                       <tr>
                         <td>Total-></td><td id='total_buy'></td>
                       </tr>
                     </table>
                     <br>
                     <h3 style="color:#212529 ">Payment Method</h3>
                     <input type="text" class="form-control" id='payment_method' placeholder="PayPal, Cash, Bank Of America..." name="">
                     <input type="hidden" id='id_buy' name="">
                   </center>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="button" id='btn_purchase' class="btn btn-primary">Buy</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog --> 
</div>
<!-- /.modal -->