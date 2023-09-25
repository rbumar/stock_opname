<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Report Stock Opname</h6>
    </div>
    <div class="card-body">
<form class="col-6">
  <div class="form-group row">
    <label for="periode" class="col-4 col-form-label">Periode</label> 
    <div class="col-8">
      <select id="periode" name="periode" class="custom-select" required="required">
        <option value="rabbit">Rabbit</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="department" class="col-4 col-form-label">Department</label> 
    <div class="col-8">
      <select id="department" name="department" class="custom-select">
        <option value="rabbit">Rabbit</option>
        <option value="duck">Duck</option>
        <option value="fish">Fish</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="category" class="col-4 col-form-label">Category</label> 
    <div class="col-8">
      <select id="category" name="category" class="custom-select">
        <option value="rabbit">Rabbit</option>
        <option value="duck">Duck</option>
        <option value="fish">Fish</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="sub_category" class="col-4 col-form-label">Sub Category</label> 
    <div class="col-8">
      <select id="sub_category" name="sub_category" class="custom-select">
        <option value="rabbit">Rabbit</option>
        <option value="duck">Duck</option>
        <option value="fish">Fish</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="regional" class="col-4 col-form-label">Regional</label> 
    <div class="col-8">
      <select id="regional" name="regional" data-live-search="true" class="selectpicker">
        <option value="ALL">ALL</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="sub_regional" class="col-4 col-form-label">Sub Regional</label> 
    <div class="col-8">
      <select id="sub_regional" name="sub_regional" class="custom-select">
        <option value="rabbit">Rabbit</option>
        <option value="duck">Duck</option>
        <option value="fish">Fish</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="location" class="col-4 col-form-label">Location</label> 
    <div class="col-8">
      <select id="location" name="location" class="custom-select">
        <option value="rabbit">Rabbit</option>
        <option value="duck">Duck</option>
        <option value="fish">Fish</option>
      </select>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
    </div>
</div> 

