@extends('perda')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>Kehijauan Wilayah</h1>
 
            <hr>
            <table class="table table-bordered">
                <thead>
                <tr>
					<th>hsa</th>
                    <th>hpyddk</th>
                    <th>hutan lindung</th>
                    <th>kwa</th>
                    <th>hptt</th>
                    <th>hpt</th>
                    <th>kpa</th>
                    <th>Tahun</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($data as $d)
                    <tr>
                        <td>{{ $d->hsa }}</td>
                        <td>{{ $d->hpyddk }}</td>
                        <td>{{ $d->hutan_lindung }}</td>
                        <td>{{ $d->kwa }}</td>
                        <td>{{ $d->hptt }}</td>
                        <td>{{ $d->hpt }}</td>
                        <td>{{ $d->kpa }}</td>
                        <td>{{ $d->tahun }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection
    