@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <a href="{{ route('home') }}" class="btn btn-primary">Back</a>
                        Create New Contact
                    </div>

                    <div class="card-body">
                        <form action="{{route('contact.store')}}" method="POST">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="name">Name</label>
                                <input type="text" name="name" class="form-control" id="name"
                                    placeholder="Enter name" value="{{ old('name') }}">
                                @error('name')
                                    <p class="text-danger mt-2">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label for="mobile">Mobile</label>
                                <input type="tel" name="mobile" class="form-control" id="mobile"
                                    placeholder="Enter mobile number" value="{{ old('mobile') }}">
                                @error('mobile')
                                    <p class="text-danger mt-2">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label for="email">Email</label>
                                <input type="email" name="email" class="form-control" id="email"
                                    placeholder="Enter email" value="{{ old('email') }}">
                                @error('email')
                                    <p class="text-danger mt-2">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label for="group">Group</label>
                                <input type="group" name="group" class="form-control" id="group"
                                    placeholder=" Family, Friends, Colleagues etc" value="{{ old('group') }}">
                                @error('group')
                                    <p class="text-danger mt-2">{{ $message }}</p>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
