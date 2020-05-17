<div class="text-center"><h2>Add Product</h2></div>

<form action="" method="post">
    <div class="form-group">
        <label>Code</label> <input type="text" id="code" name="code" placeholder="Enter Code"
                                   class="form-control">
    </div>
    <div class="form-group">
        <label>Product Name</label> <input type="text" id="p_name" name="p_name"
                                           placeholder="Enter Product Name"
                                           class="form-control">
    </div>
    <div class="form-group">
        <label>Mrp</label><input type="text" name="mrp" id="mrp" placeholder="Enter mrp" onchange="Change()"
                                 class="form-control">
    </div>
    <div class="form-group">
        <label>Rate</label><input type="text" name="rate" id="rate" placeholder="Enter rate"
                                  onchange="Change" class="form-control">
    </div>


    <div class="form-group">
        <label>Tax</label><input type="text" name="tax" id="tax" placeholder="Tax" class="form-control">
    </div>
    <label>Remarks</label> <textarea name="remarks" cols="20px" id="remarks" class="form-control">
</textarea>

    <label>Discription</label><textarea name="Discrip" cols="20px" id="discription" class="form-control">
</textarea>
    <div class="form-group">
        <label>Status</label><input type="text" id="status" name="status" placeholder="Enter status"
                                    class="form-control">
    </div>
    <div class="form-group">
        <label>Unit</label><input type="text" name="unit" id="unit" placeholder="Enter Unit"
                                  class="form-control">
    </div>
    <input type="submit" class="btn btn-success" name="submit" value="Add-Item">
</form>
</div>