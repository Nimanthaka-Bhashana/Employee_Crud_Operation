@extends('layouts.app')
@section('content')
    <div class="container">
        <a href="{{ route('employees.create') }}" class="btn btn-primary mt-5">Add Employee</a>
   </div>
   @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
   @endif
  <div class="container mt-5">
    <h1>Employee Management System</h1>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Name</th>
          <th scope="col">Email</th>
          <th scope="col">Phone</th>
          <th scope="col">Position</th>
          <th scope="col">Salary</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($employees as $employee)
        <tr>
          <td>{{ $employee->id }}</td>
          <td>{{ $employee->name }}</td>
          <td>{{ $employee->email }}</td>
          <td>{{ $employee->phone }}</td>
            <td>{{ $employee->position }}</td>
            <td>{{ $employee->salary }}</td>
          <td>
            <a href="{{ route('employees.edit', $employee->id) }}" class="btn btn-primary">Edit</a>
            <form action="{{ route('employees.destroy', $employee->id) }}" method="POST" class="d-inline">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger">Delete</button>
            </form>
          </td>
        </tr>
         @endforeach
      </tbody>
    </table>
</div>
@endsection
