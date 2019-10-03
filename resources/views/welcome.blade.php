@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Seleção') }}</div>

                    <div class="card-body">
                        <form method="GET" action="{{ route('search') }}">
{{--                            @csrf--}}

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Gênero') }}</label>

{{--                                <div class="col-md-6">--}}
{{--                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>--}}
                                    <select id="genery" name="genery" required>
                                        <option value="1">Feminino</option>
                                        <option value="2">Masculino</option>
                                        <option value="3">Indefinido</option>
{{--                                        <option value="audi">Audi</option>--}}
                                    </select>

{{--                                    @error('name')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                    @enderror--}}
{{--                                </div>--}}
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Hobby') }}</label>

{{--                                <div class="col-md-6">--}}
                                    <select id="hobby" name="hobby" required>
                                        <option value="1">Parque</option>
                                        <option value="2">Balada</option>
                                        <option value="3">Bar</option>
                                        <option value="4">Museu</option>
                                        <option value="5">Netflix</option>
                                    </select>

{{--                                    @error('email')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                    @enderror--}}
{{--                                </div>--}}
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Viagem') }}</label>

{{--                                <div class="col-md-6">--}}
                                <select id="travel" name="travel" required>
                                    <option value="1">Campo</option>
                                    <option value="2">Cidade</option>
                                    <option value="3">Floresta</option>
                                    <option value="4">Praia</option>
{{--                                    <option value="5">Netflix</option>--}}
                                </select>

{{--                                    @error('password')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                    @enderror--}}
{{--                                </div>--}}
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Bebida') }}</label>

                                <select id="drink" name="drink" required>
                                    <option value="1">Chope</option>
                                    <option value="2">Milk Shake</option>
                                    <option value="3">Suco Detox</option>
                                    <option value="4">Vinho</option>
                                    <option value="5">Café</option>
                                    {{--                                    <option value="5">Netflix</option>--}}
                                </select>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Pesquisar') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
