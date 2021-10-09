@extends('layouts.backend')

@section('title', 'News')

@section('content')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Postingan</h1>
    </div>

    <a type="button" class="btn btn-success" href="{{ route('tambahinfo_news') }}">Insert</a>
    <hr>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Judul Berita</th>
            <th scope="col">Isi</th>
            <th scope="col">Aksi</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($news as $key => $new)
        <tr>
            <th scope="row">{{ $key+1 }}</th>
            <td>{{ $new->title }}</td>
            <td>{{ $new->content }}</td>
            <td>
                <a href="" class="badge bg-info"><span data-feather="edit"></span></a>
                <a href="" class="badge bg-warning"><span data-feather="trash-2"></span></a>
            </td>
        </tr>
        @endforeach
        <tbody>
    </table>

</main>
@endsection
