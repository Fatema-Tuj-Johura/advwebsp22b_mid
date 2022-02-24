@extends('layouts.loggedin')
@section('content')
<html>
    <head></head>
    <body>
        <fieldset>
            <form action="{{route('register.submit')}}" method="POST">
                {{csrf_field()}}
                <table>
                    <tr>
                        <td>Name:</td>
                        <td><input type="text" name="name" value="{{old('name')}}" placeholder="Enter your name"></td>
                        @error('name')
                        <td>{{$message}}</td>
                        @enderror
                    </tr>

                    <tr>
                        <td>Username:</td>
                        <td><input type="text" name="username" value="{{old('username')}}" placeholder="Enter your username"></td>
                        @error('username')
                        <td>{{$message}}</td>
                        @enderror
                    </tr>

                    <tr>
                        <td>Email:</td>
                        <td><input type="text" name="email" value="{{old('email')}}" placeholder="Enter your email"></td>
                        @error('email')
                        <td>{{$message}}</td>
                        @enderror
                    </tr>

                    <tr>
                        <td>Password:</td>
                        <td><input type="text" name="password" placeholder="Enter your password"></td>
                        @error('password')
                        <td>{{$message}}</td>
                        @enderror
                    </tr>

                    <tr>
                        <td> confirm Password:</td>
                        <td><input type="text" name="confirm_password" placeholder="please confirm your password"></td>
                        @error('confirm_password')
                        <td>{{$message}}</td>
                        @enderror
                    </tr>

                    <tr>
                        <td align="right" colspan="2"><input type="submit" value="Register"></td>
                    </tr>
                </table>
            </form>
        </fieldset>
    </body>
</html>
@endsection