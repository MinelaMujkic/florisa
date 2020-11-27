<!DOCTYPE html>
<html>

    <head>
        <title>Florisa</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    </head>

    <body>

        <div class="row header">
             Ovo je header
            <img src="/florisa_logo.png" height="90px"/>
            
        </div>


        <div class="container">
            @yield('content') 
            {{--  yield ...da nam smjesti sav sadržaj koji ćemo posle definisat...zauzimamo mjesto --}}
        </div>


        <div class="footer">
            Ovo je footer
        </div>



        <style>
            .header{
                 height: 100px;
                background-color: rgb(247, 178, 173)
            }

            .footer{
            height: 100px;
            background-color: rgb(247, 178, 173)
            }
        </style>

        @yield('style')
        {{-- u view da pišemo css...zauzimamo  mjesto  --}}

    </body>

</html>