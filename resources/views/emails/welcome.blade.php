@component('mail::message')
# Introduction

Thanks for registering!

@component('mail::button', ['url' => 'https://thuan.site'])
Start Browsing
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
