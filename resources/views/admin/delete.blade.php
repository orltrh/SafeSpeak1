@extends('layout.admin')
@section('title', 'Delete Data')
@section('menuIndex', 'active')

@section('content')
<section>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">Delete Data</div>
          <div class="card-body">
            <p>Are you sure you want to delete this data?</p>
            <form action="{{ route('admins.destroy', $admin->id) }}" method="POST">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger">Delete</button>
              <a href="{{ route('aEdukasi') }}" class="btn btn-secondary">Cancel</a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
