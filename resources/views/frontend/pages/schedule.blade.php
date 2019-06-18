@extends('frontend.layouts.app')

@section('content')
    <section class="page-section-big bg-white" id="schedule">
        <div class="container">
        <div class="row">
            <div class="col-lg-12 mx-auto text-justify">
                    <div class="entry-header">
                    <div class="container">
                        <h2 class="entry-title" itemprop="headline">Table Kontak</h2>
                        @if (Session::has('alert-success'))
                            <div class="alert alert-success">
                                    <strong>{{ \Illuminate\Support\Facades\Session::get('alert-success') }}</strong>
                            </div>
                        @endif
                        <hr>
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>No. Telp</th>
                                <th>Alamat</th>
                                <th>Aksi</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php $no = 1; @endphp
                            @foreach($data as $datas)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $datas->nama }}</td>
                                    <td>{{ $datas->email }}</td>
                                    <td>{{ $datas->nohp }}</td>
                                    <td>{{ $datas->alamat }}</td>
                                    {{-- <td> <form action="{{ route('kontak.destroy', $datas->id) }}" method="post">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <a href="{{ route('kontak.edit',$datas->id) }}" class=" btn btn-sm btn-primary">Edit</a>
                                            <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus data?')">Delete</button>
                                        </form>
                                    </td> --}}
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    </div>
            </div>
        </div>
        </div>
    </section>
@endsection