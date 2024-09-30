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
                        <span style="font-weight:600;font-size: 20px;">Create Intro</span>
                        <a href="{{ route('intro.index') }}" class="btn btn-primary"
                            style="float: right; margin-right:10px;">Back</a>
                    </div>
                    <div class="card-body ps-5 pe-5 pt-4 pb-4">
                        <form action="{{ route('intro.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="" class="form-label">Image</label>
                                <input type="file" name="image" class="form-control" id="">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Intro</label>
                                <input type="text" name="intro" class="form-control" id=""
                                    placeholder="Intro">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Designation</label>
                                <input type="text" name="designation" class="form-control" id=""
                                    placeholder="Designation">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Github link</label>
                                <input type="url" name="link" class="form-control" id=""
                                    placeholder="Github link">
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

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-1"></div>

        </div>
    </div>
@endsection
