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
                    You're logged in!
                    {!! QrCode::size(100)->generate('https://www.google.com') !!}
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
