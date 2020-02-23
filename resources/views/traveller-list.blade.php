<<<<<<< HEAD
=======

>>>>>>> 3886e9c78b42a7b4906f1ff9283eaf8ba87fcf22
@extends('layouts.app')

@section('content')


<<<<<<< HEAD
<div class="main">
    <div class="main-inner">
        <div class="container">
            <div class="content">



                <div class="invoice-wrapper">
                    <div class="invoice">
                        <div class="invoice-header clearfix">
                            <div class="invoice-logo">
                                <i class="fa fa-rocket"></i> Traveller List
                            </div><!-- /.invoice-logo -->
                        </div><!-- /.invoice-header -->
                        <table class="invoice-table table">
                            <thead>
                                <tr>
                                    <!-- <th>#ID</th> -->
                                    <th>Name</th>
                                    <th>Country</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Ranking</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($travellerLists as $travellerList)
                                <tr>
                                    <!-- <td></td> -->
                                    <td><a href="{{ url('/traveler',$travellerList->id) }}"> {{ $travellerList->name }} </a></td>
                                    <td>{{ $travellerList->country }}</td>
                                    <td>{{ $travellerList->email }}</td>
                                    <td>{{ $travellerList->phone }}</td>
                                    <td>{{ $travellerList->point }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div><!-- /.invoice -->
                </div><!-- /.invoice-wrapper -->

            </div><!-- /.content -->
        </div><!-- /.container -->
    </div><!-- /.main-inner -->
</div><!-- /.main -->
=======
    <div class="main">
        <div class="main-inner">
            <div class="container">
                <div class="content">
                    


                    <div class="invoice-wrapper">
    <div class="invoice">
        <div class="invoice-header clearfix">
            <div class="invoice-logo">
                <i class="fa fa-rocket"></i> Traveller List
            </div><!-- /.invoice-logo -->
        </div><!-- /.invoice-header -->
        <table class="invoice-table table">
            <thead>
            <tr>
                <!-- <th>#ID</th> -->
                <th>Name</th>
                <th>Country</th>
                <th>Email</th>
                <th>Phone</th>
                <!-- <th>Ranking</th> -->
            </tr>
            </thead>

            <tbody>
                @foreach($travellerLists as $travellerList)
            <tr>
                <!-- <td></td> -->
                <td>{{ $travellerList->name }}</td>
                <td>{{ $travellerList->country }}</td>
                <td>{{ $travellerList->email }}</td>
                <td>{{ $travellerList->phone }}</td>
                <!-- <td></td> -->
            </tr>
                @endforeach
            </tbody>
        </table>

    </div><!-- /.invoice -->
</div><!-- /.invoice-wrapper -->

                </div><!-- /.content -->
            </div><!-- /.container -->
        </div><!-- /.main-inner -->
    </div><!-- /.main -->
>>>>>>> 3886e9c78b42a7b4906f1ff9283eaf8ba87fcf22

@endsection