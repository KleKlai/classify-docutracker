<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
        
    </x-slot>
    {{-- bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="container"> 

                        <button type="button" class="btn btn-primary btn-sm float-end" onclick="window.location='{{ url("/receipt") }}'" >
                            Create Receipt
                        </button>
                        <br/>
                        <br/>
                        <br/>
                        <table class="table align-middle mb-0 bg-white">
                            <thead class="">
                              <tr>
                                <th>Document Series </th>
                                <th>Customer Name</th>
                                <th>Prepared By</th>
                                <th>Approved By</th>
                                <th>Release By</th>
                                <th>Status</th>
                                <th>Action</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>
                                  <div class="d-flex align-items-center">
                                    <div class="ms-3">
                                      <p class="fw-bold mb-1">GF11-00</p>
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <p class="text-muted mb-0">Jane Doe</p>
                                </td>
                                <td>
                                    <p class="text-muted mb-0">Jane Doe</p>
                                </td>
                                <td>
                                    <p class="text-muted mb-0">Jane Doe</p>
                                </td>
                                <td>
                                    <p class="text-muted mb-0">Jane Doe</p>
                                </td>
                                <td>
                                    <p class="fw-bold mb-1">draft</p>
                                </td>
                                <td>
                                  <button
                                          type="button"
                                          class="btn btn-link btn-rounded btn-sm fw-bold"
                                          data-mdb-ripple-color="dark"
                                          >
                                    Edit
                                  </button>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="d-flex align-items-center">
                                    <div class="ms-3">
                                      <p class="fw-bold mb-1">GF11-001</p>
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <p class="text-muted mb-0">Jane Doe</p>
                                </td>
                                <td>
                                    <p class="text-muted mb-0">Jane Doe</p>
                                </td>
                                <td>
                                    <p class="text-muted mb-0">Jane Doe</p>
                                </td>
                                <td>
                                    <p class="text-muted mb-0">Jane Doe</p>
                                </td>
                                <td>
                                    <p class="fw-bold mb-1">save</p>
                                </td>
                                <td>
                                  <button
                                          type="button"
                                          class="btn btn-link btn-rounded btn-sm fw-bold"
                                          data-mdb-ripple-color="dark"
                                          >
                                    Edit
                                  </button>
                                </td>
                              </tr>
                            </tbody>
                          </table>

                        {{-- <div class="w-75 p-3">
                            <h1>Nutrihogs Corporation</h1>
                            <h2>Merchandise Withdrawal Slip</h2>
                
                            <form method="POST" action='{{ url("save_receipt") }}' enctype="multipart/form-data">
                            @csrf
                            <div class="container">
                                <div class="row">
                                  <div class="col">
                                    <div class="form-floating mb-3">
                                        <input name="customer_name" type="text" class="form-control" id="floatingInput" placeholder="Customer Name">
                                        <label for="floatingInput">Customer Name</label>
                                    </div>
                        
                                    <div class="form-floating mb-3">
                                        <input name="customer_date" type="date" class="form-control" id="floatingInput" placeholder="Date">
                                        <label for="floatingInput">Date</label>
                                    </div>  
                                    <div class="form-floating mb-3">
                                        <input name="pallet_no" type="text" class="form-control" id="floatingInput" placeholder="Pallet Number">
                                        <label for="floatingInput">Pallet Number</label>
                                    </div>         
                                  </div>
                                  <div class="col">
                                    <div class="form-floating mb-3">
                                        <input name="series_no" type="text" class="form-control" id="floatingInput" readonly value="123213">
                                        <label for="floatingInput">Document Series Number</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input name="qr_no" type="text" class="form-control" id="floatingInput" placeholder="QR Number">
                                        <label for="floatingInput">QR Number</label>
                                    </div>                   
                                    <div class="form-floating mb-3">
                                        <input name="wh_loc" type="text" class="form-control" id="floatingInput" placeholder="Warehouse Location">
                                        <label for="floatingInput">Warehouse Location</label>
                                    </div>  
                                    <div class="form-floating mb-3">
                                        <input name="warehouse" type="text" class="form-control" id="floatingInput" placeholder="Warehouse">
                                        <label for="floatingInput">Warehouse</label>
                                    </div>  
                                  </div>
                                </div>
                            </div>
                        </div>
                
                        <div class="w-100 p-3">
                            <table class="table table-bordered" id="dynamicAddRemove">  
                                <tr>
                                    <th>Item Code</th>
                                    <th>Item Description</th>
                                    <th>Qty</th>
                                    <th>Oum</th>
                                    <th>Remarks</th>
                                    <th>Action</th>
                                </tr>
                                <tr>  
                                    <td><input type="text" name="moreFields[0][item_code]" class="form-control" /></td>  
                                    <td><textarea type="text" name="moreFields[0][item_desc]" class="form-control" ></textarea></td>  
                                    <td><input type="text" name="moreFields[0][qty]" class="form-control" /></td>  
                                    <td><input type="text" name="moreFields[0][oum]" class="form-control" /></td>  
                                    <td><input type="text" name="moreFields[0][remarks]"  class="form-control" /></td>  
                                    <td><button type="button" name="add" id="add-btn" class="btn btn-success">Add More</button></td>  
                                </tr>  
                            </table> 
                        </div>
                
                
                        <div class="w-75 p-3">
                            <div class="container">
                                <div class="row">
                                  <div class="col">
                                    <div class="form-floating mb-3">
                                        <input name="prepared_by" type="text" class="form-control" id="floatingInput" placeholder="Prepared by">
                                        <label for="floatingInput">Prepared by</label>
                                    </div>
                        
                                    <div class="form-floating mb-3">
                                        <input name="approved_by" type="text" class="form-control" id="floatingInput" placeholder="Approved By">
                                        <label for="floatingInput">Approved By</label>
                                    </div>  
                                    <div class="form-floating mb-3">
                                        <input name="released_by" type="text" class="form-control" id="floatingInput" placeholder="Released By">
                                        <label for="floatingInput">Released By</label>
                                    </div>                         
                                  </div>
                                  <div class="col">
                                    <div class="form-floating mb-3">
                                        <input name="sales_admin" type="text" class="form-control" id="floatingInput" placeholder="Sales Admin">
                                        <label for="floatingInput">Sales Admin</label>
                                    </div>    
                                    <div class="form-floating mb-3">
                                        <input name="wh_incharge" type="text" class="form-control" id="floatingInput" placeholder="Warehouse In Charge">
                                        <label for="floatingInput">Warehouse In Charge</label>
                                    </div>  
                                  </div>
                                </div>
                            </div>
                        </div>
                
                        <button type="submit" class="btn btn-primary btn-lg ">Generate Receipt</button>
                        <button type="button" class="btn btn-warning btn-lg">Save as Draft</button>
                    </form>
                    </div> --}}
                </div>
            </div> 
        </div>
    </div>

     {{-- jquery --}}
     <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
     {{-- javascript for dynamic add/remove --}}
    <script type="text/javascript">
        var i = 0;
    
        // add fields
            $(document).on('click','#add-btn', function (e) {
                ++i;
                $("#dynamicAddRemove")
                .append('<tr><td><input type="text" name="moreFields['+i+'][item_code]"class="form-control" /></td><td><textarea type="text" name="moreFields['+i+'][item_desc]"class="form-control" ></textarea></td><td><input type="text" name="moreFields['+i+'][qty]"class="form-control" /></td><td><input type="text" name="moreFields['+i+'][oum]"class="form-control" /></td><td><input type="text" name="moreFields['+i+'][remarks]"class="form-control" /></td><td><button type="button" class="btn btn-danger remove-tr">Remove</button></td></tr>'
                );
            });
    
            // to remove fields
            $(document).on('click','.remove-tr', function (e) {
                $(this).parents('tr').remove();
            });
    
            // generate receipt testing data value
            $(document).on('click','.generate_receipt', function (e) {
    
                var data = {
                    'customer_name' : $("input[name='customer_name']").val(),
                    'customer_date' : $("input[name='customer_date']").val(),
                    'pallet_no' : $("input[name='pallet_no']").val(),
                    'series_no' : $("input[name='series_no']").val(),
                    'qr_no' : $("input[name='qr_no']").val(),
                    'wh_loc' : $("input[name='wh_loc']").val(),
                    'warehouse' : $("input[name='warehouse']").val(),
                    'prepared_by' : $("input[name='prepared_by']").val(),
                    'approved_by' : $("input[name='approved_by']").val(),
                    'released_by' : $("input[name='released_by']").val(),
                    'sales_admin' : $("input[name='sales_admin']").val(),
                    'wh_incharge' : $("input[name='wh_incharge']").val(),
                    'moreFields[0][item_code]' : $("input[name='moreFields[0][item_code]']").val(),
                }
                console.log(data)
            });
        </script>
</x-app-layout>
