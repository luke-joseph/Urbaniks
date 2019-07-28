<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Choose from a range of street dance & modern dance lessons. Call Urbaniks Street Skool of Dance in Milngavie, Dunbartonshire on 07780 992 295">
        <title>{{$pageMeta['page_title']}}</title>
        {{-- SOCIAL --}}
        <meta property="og:image" content="{{$pageMeta['fb_image']}}" />
        <meta property="og:site_name" content="Urbaniks" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="{{$pageMeta['fb_url']}}" />
        <meta property="og:title" content="{{$pageMeta['fb_title']}}" />
        <meta property="og:description" content="{{$pageMeta['fb_description']}}" />

        <meta name="twitter:card" content="summary" />
        <meta name="twitter:title" content="{{$pageMeta['twitter_title']}}" />
        <meta name="twitter:description" content="{{$pageMeta['twitter_description']}}" />
        <meta name="twitter:image" content="{{$pageMeta['twitter_image']}}" />

        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{ mix('css/app.css') }}" />
    </head>
