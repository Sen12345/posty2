@extends('layouts.app')

@section('content')
<div class="flex justify-center">
    <div class="w-4/12 bg-white p-6 bg-rounded-lg">
        @if(session('status'))
        <div class="mb-6 bg-red-500 text-white text-center rounded-lg p-4"> {{ session('status') }}</div>
        @endif
        <form action="{{ route('login') }}" method="post">
            @csrf

            <div class="mb-4">
                <label for="email" class="sr-only">email</label>
                <input type="text" name="email" id="email" placeholder="Your email" class="@error('email') border-red-500 @enderror bg-grey-100 border-2 w-full p-4 rounded-lg" value="{{ old('email')}}">
                @error('email')
                <div class="text-red-500 mt-2 text-sm">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="password" class="sr-only">password</label>
                <input type="password" name="password" id="password" placeholder="Your password" class="@error('password') border-red-500 @enderror bg-grey-100 border-2 w-full p-4 rounded-lg" value="">
                @error('password')
                <div class="text-red-500 mt-2 text-sm">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="mb-4">
                <div class="flex items-center">
                    <input type="checkbox" name="remember" id="remember" class="mr-2">
                    <label for="remember">Remember me</label>
                </div>
            </div>

            <div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded fonrt-medium w-full">Login</button>
            </div>

        </form>
    </div>

</div>
@endsection
