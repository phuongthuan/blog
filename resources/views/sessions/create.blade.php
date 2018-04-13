@extends('layouts.master')

@section('content')
    <div class="col-sm-8">

        <form method="POST" action="/login">

            {{ csrf_field() }}

            <div class="field">
                <p class="control has-icons-left has-icons-right">
                    <input class="input" type="email" placeholder="Email" id="email" name="email">
                    <span class="icon is-small is-left">
                      <i class="fa fa-envelope"></i>
                    </span>
                    <span class="icon is-small is-right">
                      <i class="fa fa-check"></i>
                    </span>
                </p>
            </div>
            <div class="field">
                <p class="control has-icons-left">
                    <input class="input" type="password" placeholder="Password" id="password" name="password">
                    <span class="icon is-small is-left"><i class="fa fa-lock"></i></span>
                </p>
            </div>
            <div class="field">
                <p class="control">
                    <button type="submit" id="mybtn" class="button is-success">
                        Login
                    </button>
                </p>
            </div>

            @include('layouts.errors')

        </form>
    </div>

@endsection