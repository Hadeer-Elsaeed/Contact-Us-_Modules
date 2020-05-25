@extends('admin::layouts.master')
@section('links')

    <ul class="list-unstyled components mb-5">
        <li >
            <a href="../admin">Home</a>
        </li>
    <li >
        <a href="/admin/contacts">All Contacts</a>
    </li>
    <li class="active">
        <a href="#">Setting</a>
    </li>
    <li>
        <a href="/">Back</a>
    </li>
    </ul>
@endsection
@section('data')
<h1 class="text-center" style="color:#2f89fc"> Contacts Info</h1>

  
  

    <table class="table table-secondary mt-4">
        <thead>
          <tr>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">Message</th>
            <th scope="col">Edit</th>
          </tr>
        </thead>
        <tbody>
            @foreach($contacts as $contact)
            <tr>
                <td>{{$contact->name}}</td>
                <td>{{$contact->email}}</td>
                <td>{{$contact->phone}}</td>
                <td>{{$contact->message}}</td>

            <td><a class="btn btn-info" data-toggle="modal" data-target="#modalLoginForm{{$contact->id}}">Edit</a></td>

            <div class="modal fade" id="modalLoginForm{{$contact->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header text-center">
                            <h4 class="modal-title w-100 font-weight-bold">Edit Contact</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <form action="{{route('update',$contact->id)}}" method="POST">
                        @csrf
                            <div class="modal-body mx-3">
                                <div class="md-form mb-2">
                                    <label>Name</label>
                                <input type="text" id="defaultForm-name" name="name" value= "{{$contact->name}}" class="form-control validate">
                                </div>
                                <div class="md-form mb-2">
                                    <label>Email</label>
                                <input type="email" id="defaultForm-email" name="email" value="{{$contact->email}}" class="form-control validate">
                                </div>
                                <div class="md-form mb-2">
                                    <label>Phone</label>
                                <input type="number" id="defaultForm-pass"name="phone" value="{{$contact->phone}}" class="form-control validate">
                                </div>
                                <div class="md-form mb-2">
                                    <label>Message</label>
                                    <textarea  id="defaultForm-message"name="message" class="form-control validate">{{$contact->message}}</textarea>
                                </div>
            
                            </div>
                            <div class="modal-footer d-flex justify-content-center">
                            <button class="btn btn-primary btn-block">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
                </div>
    
            </tr>
          @endforeach
        </tbody>
      </table>



@endsection
