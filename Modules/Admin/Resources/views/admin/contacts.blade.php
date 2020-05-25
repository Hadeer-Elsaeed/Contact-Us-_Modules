@extends('admin::layouts.master')
@section('links')

    <ul class="list-unstyled components mb-5">
        <li>
            <a href="../admin">Home</a>
          </li>
    <li class="active">
        <a href="#">All Contacts</a>
    </li>
    <li>
        <a href="setting">Setting</a>
    </li>
    <li>
        <a href="/">Back</a>
    </li>
    </ul>
@endsection
@section('data')
<h1 class="text-center" style="color:#2f89fc"> Contacts Emails</h1>

<ul class="list-group" style="width:70%; margin:0 auto">
    @foreach($contacts as $contact)
        <li class="list-group-item  list-group-item-secondary">
            {{$contact->email}}

        </li>
    @endforeach
</ul>

@endsection

