@extends('admin::layouts.master')

@section('links')
    

<ul class="list-unstyled components mb-5">
  <li class="active">
    <a href="admin">Home</a>
  </li>
  <li >
      <a href="admin/contacts">All Contacts</a>
  </li>
  <li>
      <a href="admin/setting">Setting</a>
  </li>
  <li>
    <a href="/">Back</a>
</li>
  </ul>
  @endsection
  @section('data')
  <pre>


  </pre>
  <div class="alert alert-secondary text-center p-4 " style="border-radius:20px;color:#2f89fc;width:50%;font-size:30px;margin:0 auto">
    Welcome to admin page !!
  </div>
  @endsection