@extends('perda')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>Edit Data Wilayah</h1>
            <hr>
            <form>
                <div class="form-group">
                    <label for="luasdaerah">Luas Daerah(km2):</label>
                    <input type="number" class="form-control" id="usr" name="luasdaerah">
                </div>
                <div class="form-group">
                    <label for="jumlahpenduduk">Jumlah Penduduk:</label>
                    <input type="number" class="form-control" id="jumlahpenduduk" name="jumlahpenduduk" >
                </div>
                <div class="form-group">
                    <label for="tahun">Tahun:</label>
                    <input type="number" class="form-control" id="tahun" name="tahun" >
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-md btn-primary">Submit</button>
                    <button type="{{URL::previous()}}" class="btn btn-md btn-danger">Cancel</button>
                </div>
            </form>
        </div>
    </section>
@endsection
