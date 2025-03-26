<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="icon" href="favicon.png">

        <!-- Bootstrap 5.2.3 -->
        <link 
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" 
            integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

        <script
            src="https://code.jquery.com/jquery-3.7.1.min.js"
            integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
            crossorigin="anonymous"></script>

            <!-- bootstrap 5.2.3 -->
        <script 
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" 		
            integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" 
            crossorigin="anonymous"></script>
    </head>
    <body>
        <form method="post" action="{{ route('convert-text') }}" class="mt-5">
            {{ csrf_field() }}
            <textarea  name="convert_text" rows="7" class="form-control col-10">{{ old('convert_text', request()->convert_text) }}</textarea>
            
            <div class="d-flex mt-3">
                <input type="hidden" name="language" value="{{ old('language', request()->language) }}">
                <button type="button" class="btn btn-primary btn-get-raw-text me-3">Get Raw Text</button>
                <button type="button" class="btn btn-success btn-get-code">Get Color Code</button>
            </div>
        </form>

       
    
<p class="mt-3">-------------------</p>
<p class="fw-bold text-success">
    @if (!empty($language))
        Code has been colored
    @else 
        Raw String
    @endif
</p>
<br>

<pre>
    @if(!empty($language))
        <code class="hljs">
            {!! trim($convertText) !!}
        </code>
    @else
        {!! trim($convertText) !!}
    @endif
</pre>

<br>
<p>-------------------</p>



    <script>
        $(document).ready(function() {
            $('.btn-get-raw-text').click(function() {
                $('input[name="language"]').val('');
                $('form').submit();
            });
            $('.btn-get-code').click(function() {
                $('input[name="language"]').val('1');
                $('form').submit();
            });
        })
    </script>
    </body>
</html>
