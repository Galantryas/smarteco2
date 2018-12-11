@extends('perda')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>Sensus Profesi</h1>
 
            <hr>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Buruh</th>
                    <th>Wirausaha</th>
                    <th>Pengangguran</th>
                    <th>PNS</th>
                    <th>Tahun</th>
                </tr>
                </thead>
                <tbody>
                @php $no = 1; @endphp
                @foreach($data as $d)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $d->buruh }}</td>
                        <td>{{ $d->wirausaha }}</td>
                        <td>{{ $d->pengangguran }}</td>
                        <td>{{ $d->pegawai_negeri_sipil }}</td>
                        <td>{{ $d->tahun }}</td>
                        <td>
                            <form action="{{ route('sensusprofesi.destroy', $d->id_sp) }}" method="post">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <a href="{{ route('sensusprofesi.edit',$d->id_sp) }}" class=" btn btn-sm btn-primary">Edit</a>
                                <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus data?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection
    