@extends('layouts.app')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="">
                <h2>Edit Contact</h2>
            </div>
        </div>
    </div>
    <div class="container">
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    
  
<form class="row g-3" action="{{ route('contacts.update',$contact->id) }}" method="POST">
        @csrf
        @method('PUT')
  <div class="col-md-6">
    <label class="form-label">Name</label>
    <input type="text" class="form-control" name="name" value="{{ $contact->name }}">
  </div>
  <div class="col-md-6">
    <label class="form-label">Surname</label>
    <input type="text" class="form-control" name="surname" value="{{ $contact->surname }}">
  </div>
  <div class="col-md-6">
    <label class="form-label">RSA ID &#8470;</label>
    <input type="text" class="form-control" name="id_number" value="{{ $contact->id_number }}">
  </div>
  <div class="col-md-6">
    <label class="form-label">Mobile &#8470;</label>
    <input type="text" class="form-control" name="mobile_number" value="{{ $contact->mobile_number }}">
  </div>
  <div class="col-md-12">
    <label for="inputCity" class="form-label">Email</label>
    <input type="email" class="form-control" name="email_address" value="{{ $contact->email_address }}"
  </div>
  
  <div class="col-12 mt-4">
    <button type="submit" class="btn btn-primary">Save  <i class="fas fa-save"></i></button>
  </div>
</form>
@endsection