<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="icon" href="favicon.png">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    </head>
    <body>
        <form method="post" action="{{ route('convert-text') }}" class="mt-5">
            {{ csrf_field() }}
            <textarea  name="convert_text" rows="7" class="form-control col-10">{{ old('convert_text', request()->convert_text) }}</textarea>
            <button type="submit" class="btn btn-primary btn-submit mt-3">Submit</button>
        </form>
    
        <pre class="mt-3">
            <p>-------------------</p><br>
            {!! trim($convertText) !!}
            <br><p>-------------------</p>
        </pre>
    </body>
</html>
