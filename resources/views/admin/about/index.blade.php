@extends('layouts.admin_master')
@section('content')
    <div class="main-content">
        <div class="row">
            <div class="col-12">
                <div class="card mb-5">
                    <div class="card-header">
                        <span style="font-weight:600;font-size: 20px;">About Section</span>
                        {{-- <a href="" class="btn btn-warning" style="float: right; margin-right:10px;">Trashed</a> --}}
                        <a href="{{ route('about.create') }}" class="btn btn-primary"
                            style="float: right; margin-right:10px;">Create</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-bordered border-dark">
                            <thead>
                                <tr>
                                    <th scope="col" style="width:5%; text-align:center;">#</th>
                                    <th scope="col" style="width:10%; text-align:center;">Title</th>
                                    <th scope="col" style="width:30%; text-align:center; justify-content:center;">
                                        Long Para</th>
                                    <th scope="col" style="width:25%; text-align:center;">Short Para</th>
                                    <th scope="col" style="width:5%; text-align:center;">CV link</th>
                                    <th scope="col" style="width:15%; text-align:center;">Published at</th>
                                    <th scope="col" style="width:10%; text-align:center;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($about as $about)
                                    <tr>
                                        <th scope="row" style="text-align: center;">{{ $about->id }}</th>

                                        <td style="text-align: center;">{{ $about->title }}</td>

                                        <td style="text-align: center;">{{ $about->long_para }}
                                        </td>

                                        <td style="text-align: center;">{{ $about->short_para }}
                                        </td>

                                        <td style="text-align: center;">{{ $about->cv_link }}</td>

                                        <td style="text-align: center;">{{ date('d-m-Y', strToTime($about->created_at))}}
                                        </td>

                                        <td style="text-align: center;">

                                            <div class="d-flex">
                                                <div>
                                                    <a href="{{ route('about.edit', $about->id) }}"
                                                        class="btn btn-sm btn-success me-1">Edit</a>
                                                </div>

                                                <div>
                                                    <form action="{{ route('about.destroy', $about->id) }}" method="POST">
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
