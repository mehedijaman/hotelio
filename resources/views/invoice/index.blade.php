@extends('layouts.app')
@section('third_party_stylesheets')
    {{-- <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css"> --}}
    <link rel="stylesheet" href="{{ asset('css/datatables.min.css') }}">
@endsection

@section('content')
    <div class="custom__container">
        <table class="table table-hover text-center invoice__index__table__bg" id="myTable">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>GuestID</th>
                    <th>TaxID</th>
                    <th>PymentMethod</th>
                    <th>SubTotal</th>
                    <th>TaxTotal</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>Nogot</td>
                    <td>455</td>
                    <td>48952</td>
                    <td>489524822</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>Nogot</td>
                    <td>455</td>
                    <td>48952</td>
                    <td>489524822</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>Nogot</td>
                    <td>455</td>
                    <td>48952</td>
                    <td>489524822</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>Nogot</td>
                    <td>455</td>
                    <td>48952</td>
                    <td>489524822</td>
                </tr>
            </tbody>
            <tfoot>

            </tfoot>
        </table>
    </div>
    

@endsection

@push('page_scripts')
    {{-- <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script> --}}
    <script src="{{ asset('js/datatables.min.js') }}"></script>
    <script>
        $(document).ready( function () {
            $('#myTable').DataTable();
        });
    </script>
@endpush