@extends('layouts.app')

@section('content')
    <div class="grid-x grid-x-margin align-center auth-container">
        <div class="cell small-4 auth-card">
            <h1>Log In</h1>
            <form action="{{route('login')}}" method="POST">
                @csrf
                <label>
                    Email:
                    <input type="email" name="email" placeholder="email@address.com">
                </label>
                <label>
                    Password:
                    <input type="password" name="password">
                </label>

                <div class="grid-x grid-x-margin">
                    <div class="cell auto">
                        <input class="button" type="submit" value="Log In">
                    </div>
                    <div class="cell auto right">
                        <a href="{{route('password.request')}}" class="button secondary">
                            Forgot your password?
                        </a>
                        <a href="{{ route('register') }}" class="button secondary">
                            Register
                        </a>
                    </div>
                </div>

            </form>
        </div>
    </div>
@endsection
