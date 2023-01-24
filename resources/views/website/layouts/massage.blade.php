@if(count($errors->all())>0)
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif
@if(session()->has('success'))
    <div class="alert alert-success ">
        <P>
            {{session('success')}}
        </P>
    </div>
@endif
