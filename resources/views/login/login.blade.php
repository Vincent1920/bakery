@extends('templates.navbar')
@section('body')
<div class="login">

    @if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    @if(session()->has('loginerror'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('loginerror') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <main class="form-signin">
        <form action="/login" method="post">
            @csrf
            <h1 class="h3 mb-3 fw-normal text-center">Please login</h1>

            <div class="form-floating">
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email"
                    placeholder="name@example.com" autofocus required value="{{ old('email') }}">
                <label for="email">Email address</label>
                @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="form-floating">
                <input type="password" name="password" class="form-control" id="password" placeholder="Password"
                    required>
                <label for="password">Password</label>
            </div>

            <div class="form-group row">
                <label for="captcha" class="col-md-4 col-form-label text-md-right">Captcha</label>
                <div class="col-md-6 captcha">
                    <span>{!! captcha_img() !!}</span>
                    <button type="button" class="btn btn-danger" class="reload" id="reload">
                        &#x21bb;
                    </button>
                </div>
            </div>
            <div class="form-group row">
                <label for="captcha" class="col-md-4 col-form-label text-md-right">Enter Captcha</label>
                <div class="col-md-6">
                    <input id="captcha" type="text" class="form-control" placeholder="Enter Captcha" name="captcha">
                </div>
            </div>

            <small class="d-block text-center mt-3"> Not registered ? <a href="/register">register New</a></small>

            <button class="w-100 btn btn-lg btn-primary mt-4" type="submit">Sign in</button>

            <div class="login_bob"></div>
        </form>
    </main>
</div>

@endsection

@push('scripts')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
    $('#reload').click(function () {
        $.ajax({
            type: 'GET',
            url: 'reload-captcha',
            success: function (data) {
                $(".captcha span").html(data.captcha);
            }
        });
    });
</script>
@endpush