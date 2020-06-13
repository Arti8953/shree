<div class="container-fluid">
  <!-- ============================================================== -->
  <!-- Start Page Content -->
  <!-- ============================================================== -->
  <div class="row">
    <div class="col-md-12 ">
      <div class="card">
        <div class="card-body">

          <div id="accordion">

            <div class="modal-content">
              <div class="modal-header">
                <a class="card-link" data-toggle="collapse" href="#collapseOne">
                  Simple filter
                </a>
              </div>
              <div id="collapseOne" class="collapse show" data-parent="#accordion">
                <div class="modal-body">
                  <form action="<?php echo base_url('/admin/frc/filter'); ?>" method="post">
                    <div class="form-row">
                      <div class="col-2">
                        <input type="date" name="date_from" class="form-control form-control-sm"
                          value="<?php echo date('Y-m-01')?>">
                      </div>
                      <div class="col-2">

                        <input type="date" name="date_to" class="form-control form-control-sm"
                          value="<?php echo date('Y-m-d')?>">
                      </div>
                      <div class="col-2">

                        <select id="searchByCat" name="searchByCat" class="form-control form-control-sm" required>
                          <option value="">-- Select Category --</option>
                          <option value="parent_barcode">PBC</option>
                          <option value="fabricName">fabricName</option>
                          <option value="challan_no">Challan no</option>
                          <option value="fabric_type">Fabric Type</option>
                          <option value="color_name">Color </option>
                          <option value="ad_no">Ad no</option>
                          <option value="stock_quantity">Quantity</option>
                          <option value="current_stock">Curr. Qty</option>
                          <option value="stock_unit">Unit</option>
                          <option value="purchase_rate">Rate</option>
                          <option value="total_amount">Total amount</option>
                        </select>
                      </div>
                      <div class="col-2">

                        <input type="text" name="searchValue" class="form-control form-control-sm" value=""
                          placeholder="Search" required>
                      </div>
                      <input type="hidden" name="type" value="return"><input type="hidden" name="search" value="simple">
                      <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>"
                        value="<?=$this->security->get_csrf_hash();?>" />
                      <button type="submit" name="search" value="simple" class="btn btn-info btn-xs"> <i
                          class="fas fa-search"></i> Search</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>

            <div class="modal-content">
              <div class="modal-header">
                <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
                  Advance filter
                </a>
              </div>
              <div id="collapseTwo" class="collapse" data-parent="#accordion">
                <div class="modal-body">
                  <form action="<?php echo base_url('/admin/frc/filter'); ?>" method="post">
                    <table class=" remove_datatable">
                      <caption>Advance Filter</caption>
                      <thead>
                        <tr>
                          <th>Date_from</th>
                          <th>Date_to</th>
                          <th>Fabric Type</th>
                          <th>Party Name</th>
                          <th>Challan No</th>
                          <th>Quantity</th>
                          <th>Total Amount</th>
                        </tr>
                      </thead>
                      <tr>
                        <td>
                          <input type="date" name="date_from" class="form-control form-control-sm"
                            value="<?php echo date('Y-m-01')?>"></td>

                        <td>
                          <input type="date" name="date_to" class="form-control form-control-sm"
                            value="<?php echo date('Y-m-d')?>"></td>

                        <td><input type="text" name="fabric_type" class="form-control form-control-sm" value=""
                            placeholder="Fabric Type">
                        </td>

                        <td>
                          <input type="text" name="subDeptName" class="form-control form-control-sm" value="" placeholder="Party Name">
                        </td>
                        <td>
                          <input type="text" name="challan_no" class="form-control form-control-sm" value=""
                            placeholder="Challan No"></td>
                        <td>
                          <input type="text" name="total_quantity" class="form-control form-control-sm" value=""
                            placeholder="Quantity"></td>
                            <td>
                              <input type="text" name="total_amount" class="form-control form-control-sm" value=""
                                placeholder="Amount"></td>
                      </tr>


                    </table>
                    <input type="hidden" name="type" value="return"><input type="hidden" name="search" value="advance">
                    <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>"
                      value="<?=$this->security->get_csrf_hash();?>" />
                    <button type="submit" name="search" value="advance" class="btn btn-info btn-xs"> <i
                        class="fas fa-search"></i> Search</button>

                  </form>
                </div>
              </div>
            </div>



          </div>




        </div>
      </div>
    </div>
    <!-- **************** Product List *****************  -->
    <div class="col-md-12 bg-white">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Return Challan List</h4>
          <hr>

          <div class="widget-box">
            <div class="widget-content nopadding">
              <div class="row well">
                <div class="col-6"><a type="button" class="btn btn-info pull-left delete_all  btn-danger"
                    style="color:#fff;"><i class="mdi mdi-delete red"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  &nbsp;&nbsp;<a type="button" class="btn btn-info pull-left print_all btn-success"
                    style="color:#fff;" target="_blank"><i class="fa fa-print"></i></a>
                </div>
                <div class="col-6">
                  <form action="<?php echo base_url('/admin/frc/showReturnList'); ?>" method="post">

                    <div class="form-row ">
                      <div class="col-5">
                        <label>Date From</label>
                        <input type="date" name="date_from" class="form-control form-control-sm" value="<?php echo $from?>">
                      </div>
                      <div class="col-5">
                        <label>Date To</label>
                        <input type="date" name="date_to" class="form-control form-control-sm" value="<?php echo $to?>">
                      </div>
                      <input type="hidden" name="type" value="return">
                      <div class="col-2">
                        <label>Search</label>
                        <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>"
                          value="<?=$this->security->get_csrf_hash();?>" />
                        <button type="submit" class="btn btn-info btn-xs"> <i class="fas fa-search"></i> Search</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <hr>
              <div class="row well">
              <div class="col-8">
              <table class=" table table-bordered  text-center table-responsive">
                <thead>
                  <tr class="odd" role="row">
                    <th><input type="checkbox" class="sub_chk" id="master"></th>
                    <th>Date</th>

                    <th>Party name</th>
                    <th>Challan no</th>

                    <th>Fabric Type</th>
                    <th>Quantity</th>

                    <th>Total amount</th>

                    <th>View</th>

                  </tr>
                </thead>
                <tbody>
                  <?php  echo $content;?>
                </tbody>
              </table>
            </div>
              <hr><?php if($summary){ ?>

              <div class="col-4">
                <table class="table-bordered  remove_datatable">
                  <caption>Summary</caption>
                  <thead class="bg-secondary text-white">
                    <tr>
                      <th>Type</th>
                      <th>Quantity</th>
                      <th>Total</th>
                    </tr>
                  </thead>
                  <tbody><?php
                    foreach ($summary as $value) {
                                           ?><tr>
                      <td><?php echo $value['fabtype'];?></td>

                      <td><?php echo $value['qty'];?></td>
                      <td><?php echo $value['amount'];?></td>
                    </tr>
                    <?php }

                  ?>


                  </tbody>
                  <tr>
                      <th></th>

                      <th>total</th>
                      <th><?php echo $value['Tamount'];?></th>
                    </tr>
                </table>
              </div>
            </div>
            </div>
             <?php }

                  ?>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>


<script>
  function delete_detail(id) {
    var del = confirm("Do you want to Delete");
    if (del == true) {
      window.location = "<?php echo base_url()?>admin/Orders/deleteOrders/" + id;
    }
  }
   jQuery('.print_all').on('click', function(e) {
  var allVals = [];
   $(".sub_chk:checked").each(function() {
     allVals.push($(this).attr('data-id'));
   });
   //alert(allVals.length); return false;
   if(allVals.length <=0)
   {
     alert("Please select row.");
   }
   else {
     //$("#loading").show();
     WRN_PROFILE_DELETE = "Are you sure you want to Print this rows?";
     var check = confirm(WRN_PROFILE_DELETE);
     if(check == true){
       //for server side
     var join_selected_values = allVals.join(",");
     // alert (join_selected_values);exit;
     var ids = join_selected_values.split(",");
     var data = [];
     $.each(ids, function(index, value){
       if (value != "") {
         data[index] = value;
       }
     });
       $.ajax({
         type: "POST",
         url: "<?= base_url()?>admin/PrintThis/Challan_multiprint",
         cache:false,
         data: {'ids' : data, 'title':'Challan Return List', '<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php  echo $this->security->get_csrf_hash(); ?>'},
         success: function(response)
         {
           var w = window.open('about:blank');
            w.document.open();
            w.document.write(response);
            w.document.close();
         }
       });
              //for client side

     }
   }
 });
</script>

<?php include('FRC_js.php');?>
