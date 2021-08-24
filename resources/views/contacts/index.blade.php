@extends('contacts.layout')

@section('content')

<div class="row">
    <div class="col-lg-12">
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
      <th scope="col">DOB</th>
      <th scope="col">language</th>
      <th scope="col">interests</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>45454545545</td>
      <td>95959595</td>
      <td>Otto@gman.com</td>
      <td>19 Aug 1989</td>
      <td>english</td>
      <td>JavaScript</td>
      <td>
        <form action="" method="POST">
   
            <a class="btn btn-info" href=""><i class="fas fa-eye"></i></a>
    
            <a class="btn btn-primary" href=""><i class="fas fa-edit"></i></a>
   
            {{-- @csrf --}}
            {{-- @method('DELETE') --}}
      
            <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
        </form>
      </td>
    </tr>
    
  </tbody>
</table>
</div>

@endsection