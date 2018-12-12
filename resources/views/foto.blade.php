@extends('perda')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>Foto Kegiatan</h1>
 
            <hr>
            <table class="table table-bordered">
                <thead>
                <tr>
					<th>No</th>
                    <th>Foto</th>
                    <th>Kegiatan</th>
                    <th>Deskripsi</th>
                    <th>Tanggal Ambil</th>
                    
                </tr>
                </thead>
                <tbody>
                    @php $no = 1; @endphp
                    @foreach($data as $d)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td><img src="{{ url('upload/foto/'.$d->foto) }}" style="width: 150px; height: 150px;"></td>
                        <td>{{ $d->kegiatan }}</td>
                        <td>{{ $d->deskripsi }}</td>
                        <td>{{ $d->tanggalambil }}</td>                        
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection
    