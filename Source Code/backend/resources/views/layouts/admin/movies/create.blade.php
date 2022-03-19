@extends('layouts.admin.app')
@section('content')
    <div class="container-fluid pt-4 px-4">
        <div class="bg-light text-center rounded p-4">
            @if (session('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
            <div class="table-responsive">
                <table class="table text-start align-middle table-bordered table-hover mb-0">
                    <thead>
                        <tr class="text-dark">
                            <th scope="col">Name<span style="color: red">*</span></th>
                            <th scope="col">Category<span style="color: red">*</span></th>
                            <th scope="col">Description<span style="color: red">*</span></th>
                            <th scope="col">Image url<span style="color: red">*</span></th>
                            <th scope="col">Image url 2<span style="color: red">*</span></th>
                            <th scope="col">Trailer url<span style="color: red">*</span></th>
                            <th scope="col">Day<span style="color: red">*</span></th>
                            <th scope="col">Time<span style="color: red">*</span></th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <form action="{{ route('admin.movies.store') }}" method="POST">
                            @csrf
                            @method('post')
                            <tr>
                                <td>
                                    <input type="text" name="name" class="form-control" required>
                                    @error('name')
                                        <span class="badge" style="color: red">{{ $message }}</span>
                                    @enderror
                                </td>
                                <td>
                                    <select name="category_id" class="form-select" aria-label="Default select example">

                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('category_id')
                                        <span class="badge" style="color: red">{{ $message }}</span>
                                    @enderror
                                </td>
                                <td>
                                    {{-- <input type="text" name="description" class="form-control" required> --}}
                                    <textarea name="description" class="form-control" rows="3" required></textarea>

                                    @error('description')
                                        <span class="badge" style="color: red">{{ $message }}</span>
                                    @enderror
                                </td>
                                <td>
                                    <textarea name="image_url" class="form-control" rows="3" required></textarea>
                                    @error('image_url')
                                        <span class="badge" style="color: red">{{ $message }}</span>
                                    @enderror
                                </td>
                                <td>
                                    <textarea name="image_url2" class="form-control" rows="3" required></textarea>
                                    @error('stock')
                                        <span class="badge" style="color: red">{{ $message }}</span>
                                    @enderror
                                </td>
                                <td>
                                    <textarea name="trailer_url" class="form-control" rows="3" required></textarea>
                                    @error('discount')
                                        <span class="badge" style="color: red">{{ $message }}</span>
                                    @enderror
                                </td>
                                <td>
                                    <input type="date" name="day" id="">
                                </td>
                                <td>
                                    <input type="time" name="time" id="">
                                </td>
                                <td>
                                    <input type="submit" class="btn btn-success" value="Add Movie">
                                </td>
                            </tr>
                        </form>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Recent Sales End -->
@endsection
