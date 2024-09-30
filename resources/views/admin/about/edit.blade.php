@extends('layouts.admin_master')
@section('content')
    <div class="main-content mt-5">
        <div class="row">
            <div class="col-1"></div>

            <div class="col-10">
                {{-- error show portion --}}
                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger">{{ $error }}</div>
                    @endforeach
                @endif

                <div class="card mb-5">
                    <div class="card-header ps-4 pe-4">
                        <span style="font-weight:600;font-size: 20px;">Edit About</span>
                        <a href="{{ route('about.index') }}" class="btn btn-primary"
                            style="float: right; margin-right:10px;">Back</a>
                    </div>
                    <div class="card-body ps-5 pe-5 pt-4 pb-4">
                        <form action="{{ route('about.update', $about->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label for="" class="form-label">Title</label>
                                <input type="text" name="title" class="form-control" id=""
                                    value="{{$about->title}}">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Long Para</label>
                                <textarea name="long_para" class="form-control" aria-label="With textarea" placeholder="Long Para" rows="4">{{$about->long_para}}</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Short Para</label>
                                <input type="text" name="short_para" class="form-control" id=""
                                    value="{{$about->short_para}}">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">CV Link</label>
                                <input type="url" name="cv_link" class="form-control" id=""
                                    value="{{$about->cv_link}}">
                            </div>

                            {{-- <div class="mb-3">
                                <label for="" class="form-label">Category</label>
                                <select name="category_id" class="form-select" aria-label="Default select example">
                                    <option selected>Select</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div> --}}

                            {{-- <div class="mb-3">
                                <label for="" class="form-label">Description</label>
                                <textarea name="description" class="form-control" aria-label="With textarea" placeholder="Description" rows="4"></textarea>
                            </div> --}}

                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-1"></div>

        </div>
    </div>
@endsection
