<div class="row">
    <div class="form-group col-lg-6">
        <label class="control-label">{{ '#' }}</label>
        <input class="form-control form-control-sm" name="#" type="#" value="{{ isset($Staffs->#) ? $Staffs-># : ''}}" >     
    </div>
    <div class="form-group col-lg-6 ">
        <label>{{ 'Name' }}</label>
        <input class="form-control form-control-sm" name="Name" type="text" value="{{ isset($Staffs->Name) ? $Staffs->Name : ''}}" > 
    </div>
    <div class="form-group col-lg-6 ">
        <label>{{ 'Age' }}</label>
        <input class="form-control form-control-sm" name="Age" type="number" value="{{ isset($Staffs->Age) ? $Staffs->Age : ''}}" >    
    </div>
    <div class="form-group col-lg-6 ">
        <label>{{ 'salary' }}</label>
        <input class="form-control form-control-sm" name="salsary" type="number" value="{{ isset($Staffs->salsary) ? $Staffs->salsary : ''}}" >    
    </div>
    <div class="form-group col-lg-6 ">
        <label>{{ 'Phone' }}</label>
        <input class="form-control form-control-sm" name="Phone" type="number" value="{{ isset($Staffs->Phone) ? $Staffs->Phone : ''}}" >    
    </div>