                   @if (session('success'))
                <div class="alerta-sucess">
                    {{ session('success') }}
                </div>
            @endif

            @if (session('error'))
                <div class="alerta-error">
                    {{ session('error') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="alerta-error">
                    @foreach ($errors->all() as $error)
                        {{$error}} <br>
                    @endforeach
                </div>
            @endif
