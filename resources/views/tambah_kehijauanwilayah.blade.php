@extends('perda')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>Tambah Kehijauan Wilayah</h1>
            <hr>
            <form action="{{ route('kehijauanwilayah.store') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="hsa">hsa(m2):</label>
                    <input type="number" class="form-control" id="hsa" name="hsa">
                </div>
                <div class="form-group">
                    <label for="hpyddk">hpyddk(m2):</label>
                    <input type="number" class="form-control" id="hpyddk" name="hpyddk" >
                </div>
                <div class="form-group">
                    <label for="hutan_lindung">hutan lindung(m2):</label>
                    <input type="number" class="form-control" id="hutan_lindung" name="hutan_lindung" >
                </div>
                <div class="form-group">
                    <label for="kwa">kwa(m2):</label>
                    <input type="number" class="form-control" id="kwa" name="kwa" >
                </div>
                <div class="form-group">
                    <label for="hptt">hptt(m2):</label>
                    <input type="number" class="form-control" id="hptt" name="hptt" >
                </div>
                <div class="form-group">
                    <label for="hpt">hpt(m2):</label>
                    <input type="number" class="form-control" id="hpt" name="hpt" >
                </div>
                <div class="form-group">
                    <label for="kpa">kpa(m2):</label>
                    <input type="number" class="form-control" id="kpa" name="kpa" >
                </div>
                <div class="form-group">
                    <label for="tahun">Tahun:</label>
                    <input type="date" class="form-control" id="tahun" name="tahun" >
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-md btn-primary">Submit</button>
                    <button type="{{URL::previous()}}" class="btn btn-md btn-danger">Cancel</button>
                </div>
            </form>
        </div>
    </section>
@endsection