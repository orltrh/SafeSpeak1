@extends('layout.admin')
@section('title', 'crudEdukasi')


@section('content')
@parent
<section style="height:100vh">
    <h1>CRUD</h1>
    <div class="container">
        <div class="row">
            <div class="col">
                <h2>Edukasi</h2>
<table class="table">
    <thead>
        <tr>
            <th>Pilihan</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Edukasi</td>
            <td>
                <a href="/admin-createEdukasi"><button type="button" class="btn btn-outline-primary">Create</button></a>
                <a href=""><button type="button" class="btn btn-outline-warning">Edit</button></a>
                
            </td>
        </tr>
    </tbody>
</table>
</div>

        </div>
    </div>
</section>
@endsection