@extends('layouts.admin_master')
@section('content')
    <div class="main-content">
        <div class="row">
            <div class="col-12">
                <div class="card mb-5">
                    <div class="card-header">
                        <span style="font-weight:600;font-size: 20px;">Intro Section</span>
                        {{-- <a href="" class="btn btn-warning" style="float: right; margin-right:10px;">Trashed</a> --}}
                        <a href="{{ route('intro.create') }}" class="btn btn-primary"
                            style="float: right; margin-right:10px;">Create</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-bordered border-dark">
                            <thead>
                                <tr>
                                    <th scope="col" style="width:5%; text-align:center;">#</th>
                                    <th scope="col" style="width:10%; text-align:center;">Image</th>
                                    <th scope="col" style="width:15%; text-align:center;">Intro</th>
                                    <th scope="col" style="width:15%; text-align:center; justify-content:center;">
                                        Designation</th>
                                    <th scope="col" style="width:30%; text-align:center;">Github Link</th>
                                    <th scope="col" style="width:15%; text-align:center;">Published</th>
                                    <th scope="col" style="width:10%; text-align:center;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($intros as $intro)
                                    <tr>
                                        <th scope="row" style="text-align: center;">{{ $intro->id }}</th>

                                        <td style="text-align: center;"><img src="{{ asset($intro->image) }}" alt="My Photo" width="90" height="100"></td>

                                        <td style="text-align: center;">{{ $intro->intro }}</td>

                                        <td style="text-align: center;">{{ $intro->designation }}
                                        </td>

                                        <td style="text-align: center;">{{ $intro->link }}</td>

                                        <td style="text-align: center;">{{ date('d-m-Y', strToTime($intro->created_at))}}
                                        </td>

                                        <td style="text-align: center;">

                                            <div class="d-flex">
                                                <div>
                                                    <a href="{{ route('intro.edit', $intro->id) }}"
                                                        class="btn btn-sm btn-success me-1">Edit</a>
                                                </div>

                                                <div>
                                                    <form action="{{ route('intro.destroy', $intro->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-sm btn-danger" style="">Delete</button>
                                                    </form>
                                                </div>
                                            </div>

                                        </td>
                                    </tr>
                                @endforeach


                            </tbody>
                        </table>

                        {{-- {{$posts->links()}} --}}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
