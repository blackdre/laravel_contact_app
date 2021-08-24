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
        {{ $contact->name }}
        {{ $contact->surname }}
        {{ $contact->id_number }}
        {{ $contact->email_address }}
        {{ $contact->mobile_number }}
    </div>
@endsection