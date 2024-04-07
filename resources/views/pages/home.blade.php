@extends('layouts.default')

@push('style')
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.dataTables.min.css">
<style>
    thead, tbody, tfoot, tr, td, th {
        border-color: darkgray !important;
        border-style: solid !important;
        border-width: 1px !important;
    }
</style>
@endpush

@section('content')
    <div class="col-12">
        <div class="card">
            <div class="card-body" style="font-size: 14px !important;cursor: pointer">
                <strong>{{ $title }}</strong>
                <br>


                <div class="row" style="float: right;">
                    <div class="text-sm-end">
                        <a href="add" style="font-size: 14px !important;cursor: pointer;" class="btn btn-success">
                            <b>Create New Product</b>
                        </a>
                    </div>
                </div>
                <br>
                <br>
                <div class="row" style="float: right;">
                    <div class="text-sm-end">
                        <form action="{{url('search')}}" method="GET">
                            <input type="text" name="search" required/>
                            <button type="submit" class="btn btn-secondary" style="font-size: 14px !important;cursor: pointer;"><b>Search</b></button>
                            <a href="home" style="font-size: 14px !important;cursor: pointer;" class="btn btn-secondary">
                                <b>Reset</b>
                            </a>
                        </form>
                    </div>
                </div>

                <br>
                <br>

                <div class="table-responsive">
                    <table id="listproduct" class="table table-bordered table-striped table-base small">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th class="text-center">Name</th>
                                <th class="text-center">Price (RM)</th>
                                <th class="text-center">Details</th>
                                <th class="text-center">Publish</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            @forelse ($product as $data => $list)
                                <tr>
                                    <td class="text-center">{{ $i }}</td>
                                    <td class="text-left">{{ $list->name }}</td>
                                    <td class="text-left">{{ $list->price }}</td>
                                    <td class="text-left">{{ $list->details }}</td>
                                    <td class="text-left">
                                        @if ($list->publish == 1)
                                            Yes
                                        @else
                                            No
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        <a href="show/{{$list->id}}" style="font-size: 14px !important;cursor: pointer;" class="btn btn-info">
                                            <b>Show</b>
                                        </a>
                                        <a href="edit/{{$list->id}}" style="font-size: 14px !important;cursor: pointer;" class="btn btn-primary">
                                            <b>Edit</b>
                                        </a>
                                        <a href="delete/{{$list->id}}" style="font-size: 14px !important;cursor: pointer;" class="btn btn-danger">
                                            <b>Delete</b>
                                        </a>
                                    </td>
                                </tr>
                            <?php $i++; ?>
                            @empty
                                <tr>
                                    <td colspan='6' class="center aligned" style="text-align: center;">- No Data -</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
@endsection

@push('script')
    <script>
        $(document).ready(function () {
            $('#listproduct').dataTable({
                "searching": true,
                "bSort" : false,
                "pageLength": 100,
                "dom": 'rtip',
            });
        });

    </script>
@endpush
