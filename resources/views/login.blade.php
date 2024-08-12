@extends('web.layout.app')

@section('content')
    <div class="login">
        <section class="py-3 py-md-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-8">
                        <div class="card border border-light-subtle rounded-3 shadow-sm">
                            <div class="card-body p-3 p-md-4 p-xl-5">
                                <h2 class="fs-6 fw-normal text-center text-secondary mb-4">{{ config('app.name', 'Laravel') }} Admin</h2>
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="row gy-2 overflow-hidden">
                                        <div class="col-12">
                                            <div class="form-floating mb-3">
                                                <input type="email" class="form-control" name="email" id="email" value="{{ old('email') }}"  placeholder="name@example.com" required>
                                                <label for="email" class="form-label">Email</label>
                                                @error('email')
                                                    <span>{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-floating mb-3">
                                                <input type="password" class="form-control" name="password" id="password" value="" placeholder="Password" required>
                                                <label for="password" class="form-label">Password</label>
                                                @error('password')
                                                    <span>{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="d-grid my-3">
                                                <button class="btn btn-primary btn-lg" type="submit">Iniciar Sesión</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection