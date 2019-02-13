<div class="modal fade" id="editContact" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Contact - {{ $contact->name }} </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
     <form  method="POST" action="" id="frmUpdate">
       <input type="hidden" name="id" id="id" value="{{ $contact->id }}">
       <div class="modal-body">
        {{ method_field('PUT') }}
        {{ csrf_field() }}
        <div class="form-group">
          <input type="text" name="name" value="{{ $contact->name }}" class="form-control">
        </div>

        <div class="form-group">
          <input type="email" name="email" value="{{ $contact->email }}" class="form-control">
        </div>

        <div class="form-group">
          <input type="text" name="mobile_number" value="{{ $contact->mobile_number }}" class="form-control">
        </div>
        
        <div class="form-group">
          <select class="form-control" name="country_id">
            <option selected="selected" value="{{ $contact->country->id }}">{{ $contact->country->name }}</option>
            {{-- <option value="">Select Country</option> --}}
            <option value="1">India</option>
          </select>
        </div>
        



      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-success"  id="EditContactBtn">Save Edit</button>
      </form>
        
        <form method="POST" id="deleteForm">
          {{ csrf_field() }}
          {{ method_field('DELETE') }}

           <button type="submit" class="btn btn-danger" data-contact="{{ $contact->id }}" id="DeleteContactBtn">Delete</button>

        </form>   

         
        
        {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
      </div>

     
     
    </div>
  </div>
</div>