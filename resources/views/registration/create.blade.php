@extends('layouts.header')

<div class="container">

    <div class="columns">
        <div class="column is-half is-offset-one-quarter">

            <div class="field">
                <label class="label">Name</label>
                <div class="control">
                    <input id="mybox" class="input is-medium" type="text" placeholder="Text input">
                </div>
            </div>

            <div class="field">
                <label class="label">Email</label>
                <div class="control has-icons-left has-icons-right">
                    <input id="mybox" name="email" class="input is-medium" type="email" placeholder="Email input" value="hello@">
                    <span class="icon is-small is-left">
      <i class="fa fa-envelope"></i>
    </span>
                    <span class="icon is-small is-right">
      <i class="fa fa-exclamation-triangle"></i>
    </span>
                </div>
                <p class="help is-danger">This email is invalid</p>
            </div>

            <div class="field">
                <label class="label">Password</label>
                <p class="control has-icons-left">
                    <input id="mybox" name="password " class="input is-medium" type="password" placeholder="Password">
                    <span class="icon is-small is-left">
      <i class="fa fa-lock"></i>
    </span>
                </p>
            </div>

            <div class="field">
                <label class="label">Password Confirm</label>
                <p class="control has-icons-left">
                    <input id="mybox" name="password_confirmation" class="input is-medium" type="password" placeholder="Password confirm">
                    <span class="icon is-small is-left">
      <i class="fa fa-lock"></i>
    </span>
                </p>
            </div>

            <div class="field is-grouped">
                <div class="control">
                    <button id="mybtn" class="button is-large">Register</button>
                </div>
            </div>
        </div>
    </div>
</div>