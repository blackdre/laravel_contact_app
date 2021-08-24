@extends('layouts.app')

@section('content')

<div class="container">
    <div class="Header">
        <h1>Welcome</h1>
    </div>
</div>

<div class="container">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Surname</th>
      <th scope="col">SA ID &#8470;</th>
      <th scope="col">mobile &numero;</th>
      <th scope="col">email</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach($contacts as $contact)
    <tr>
      <th scope="row">{{ $contact->id }}</th>
      <td>{{ $contact->name }}</td>
      <td>{{ $contact->surname }}</td>
      <td>{{ $contact->id_number }}</td>
      <td>{{ $contact->mobile_number }}</td>
      <td>{{ $contact->email_address }}</td>
      <td>
        <form action="{{ route('contacts.destroy',$contact->id) }}" method="POST">
          <a type="button" class="btn btn-info" href="{{ route('contacts.show',$contact->id) }}"><i class="fas fa-eye"></i></a>
    
          <a type="button" class="btn btn-primary" href="{{ route('contacts.edit',$contact->id) }}"><i class="fas fa-edit"></i></a>
   
          @csrf
          @method('DELETE')
      
          <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>

@endsection