<div class="modal fade" id="addContact" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New Contact</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
     <form  method="POST" action="{{ route ('contacts.store') }}" id="frmAdd">
       
       <div class="modal-body">
        {{ csrf_field() }}
        <div class="form-group">
          <input type="text" name="name" placeholder="Name" class="form-control">
        </div>

        <div class="form-group">
          <input type="email" name="email" placeholder="Email" class="form-control">
        </div>

        <div class="form-group">
          <input type="text" name="mobile_number" placeholder="Phone Number" class="form-control">
        </div>
        <div id="error_email"></div>
        
        <div class="form-group">
          <select class="form-control" name="country_id">
            <option value="">Select Country</option>
            <option value="1">India</option>
          </select>
        </div>
        



      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-success" {{-- data-dismiss="modal" --}} id="AddContactBtn">Save</button>

        {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
      </div>

     </form>
    </div>
  </div>
</div>