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
                    <label for="buruh">Buruh:</label>
                    <input type="number" class="form-control" id="usr" name="buruh">
                </div>
                <div class="form-group">
                    <label for="wirausaha">Wirausaha:</label>
                    <input type="number" class="form-control" id="wirausaha" name="wirausaha" >
                </div>
                <div class="form-group">
                    <label for="pengangguran">Pengangguran:</label>
                    <input type="number" class="form-control" id="pengangguran" name="pengangguran" >
                </div>
                <div class="form-group">
                    <label for="pns">PNS:</label>
                    <input type="number" class="form-control" id="pns" name="pns" >
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
