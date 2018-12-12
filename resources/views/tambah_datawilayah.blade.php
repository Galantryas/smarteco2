@extends('perda')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>Tambah DataWilayah</h1>
            <hr>
            <form action="{{ route('datawilayah.store') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="luas_daerah">Luas Daerah(km2):</label>
                    <input type="number" class="form-control" id="luas_daerah" name="luas_daerah">
                </div>
                <div class="form-group">
                    <label for="jumlah_penduduk">Jumlah Penduduk:</label>
                    <input type="number" class="form-control" id="jumlah_penduduk" name="jumlah_penduduk">
                </div>
                <div class="form-group">
                    <label for="tahun">Tahun:</label>
                    <input type="number" class="form-control" id="tahun" name="tahun">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-md btn-primary">Submit</button>
                    <button type="reset" class="btn btn-md btn-danger">Cancel</button>
                </div>
            </form>
        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection