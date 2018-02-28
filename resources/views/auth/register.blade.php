@extends('layouts.app')

@section('content')
    <div class="grid-x grid-x-margin align-center auth-container">
        <div class="cell small-4 auth-card">
            <h1>Register</h1>
            <form action="{{route('register')}}" method="POST">
                @csrf
                <label>
                    Name:
                    <input type="text" name="name" placeholder="Your name">
                </label>
                <label>
                    Email:
                    <input type="email" name="email"placeholder="email@address.com">
                </label>
                <label>
                    Password:
                    <input type="password" name="password">
                </label>
                <label>
                    Confirm Password:
                    <input type="password" name="password_confirmation">
                </label>

                <div class="grid-x grid-x-margin">
                    <div class="cell auto">
                        <input class="button" type="submit" value="Register">
                    </div>
                    <div class="cell auto right">
                        <a href="{{route('login')}}" class="button secondary">
                            Already have an account?
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
