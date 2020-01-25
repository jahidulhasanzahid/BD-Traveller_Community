
@extends('layouts.app')

@section('content')


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
                <th>#ID</th>
                <th>Item</th>
                <th>Description</th>
                <th>Quantity</th>
                <th>Unit Cost</th>
                <th>Total</th>
            </tr>
            </thead>

            <tbody>
            <tr>
                <td>1</td>
                <td>Software</td>
                <td>LTS Versions</td>
                <td>21</td>
                <td>$321</td>
                <td>$3452</td>
            </tr>
            <tr>
                <td>1</td>
                <td>Software</td>
                <td>Support</td>
                <td>234</td>
                <td>$6356</td>
                <td>$23423</td>
            </tr>
            <tr>
                <td>1</td>
                <td>Software</td>
                <td>Sofware Collection</td>
                <td>4534</td>
                <td>$354</td>
                <td>$23434</td>
            </tr>
            </tbody>
        </table>

    </div><!-- /.invoice -->
</div><!-- /.invoice-wrapper -->

                </div><!-- /.content -->
            </div><!-- /.container -->
        </div><!-- /.main-inner -->
    </div><!-- /.main -->

@endsection