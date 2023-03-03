<!DOCTYPE html>
<html lang="en" dir="ltr" class="layout-static">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ isset($title) ? $title  . " - " . env('APP_NAME') : env('APP_NAME') }}</title>

    @vite("resources/css/app.css")


</head>

