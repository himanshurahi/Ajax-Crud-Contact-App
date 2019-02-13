<table class="table table-bordered table-hover {{-- table-responsive --}}">
                 <thead>
                   <tr>
                     <th>Name</th>
                     <th>Mobile Number</th>
                     <th>Email</th>
                     <th>Country</th>
                     <th>Action</th>
                   </tr>
                 </thead>
                 <tbody>
                   @foreach($contact as $c)
                   <tr>
                     <td>{{ $c->name }}</td>
                     <td>{{ $c->mobile_number }}</td>
                     <td>{{ $c->email }}</td>
                     <td>{{ $c->country->name }}</td>
                     <td><button type="submit" class="btn btn-success" id="editButton" data-contact='{{ $c->id }}'><i class="fa fa-eye"></i></button></td>
                   </tr>


                   @endforeach()
                 </tbody>
               </table>