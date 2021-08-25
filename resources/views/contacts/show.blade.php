@extends('layouts.app')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="">
                <h2>Show Contact</h2>
            </div>
        </div>
    </div>
    <div class="container">
        <h3><span>name : </span>{{ $contact->name }}</h3>
        <h3><span>surname : </span>{{ $contact->surname }}</h3>
        <h3><span>RSA ID &#8470; : </span>{{ $contact->rsa_id }}</h3>
        <h3><span>email : </span>{{ $contact->email }}</h3>
        <h3><span>Mobile &#8470; : </span>{{  $contact->phone  }}</h3>
        <h3><span>Language : </span>{{  $contact->language  }}</h3>
        <h3><span>Interests : </span>{{  $contact->interests  }}</h3>
    </div>
@endsection