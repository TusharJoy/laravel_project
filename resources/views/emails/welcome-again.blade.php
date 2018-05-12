@component('mail::message')
# Introduction

Hi there Mr {{$user->name}}

Thanks for registering in our blog. Hope you find it useful.

@component('mail::button', ['url' => ''])

start reading the blog

@endcomponent 

@component('mail::panel', ['url' => ''])

it is fairly important for ur bpdy and soul to read. it is the satisfaction of you soul.

@endcomponent



Thanks,<br>
{{ config('app.name') }}
@endcomponent
