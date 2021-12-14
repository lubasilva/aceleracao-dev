@include('includes.header')
    <div class="container">
        <h3 class="text-primary text-center"> Usuario </h3>
        <table class="table table-bordered mt-5">
            @foreach ($usuarios as $key => $usuario)
                <thead>
                    <tr>
                        <th scope="col">{{$key}}</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$usuario}}</td>
                    </tr>
                </tbody>
            @endforeach
        </table>
    </div>

@include('includes.footer')
