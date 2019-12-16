@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Seleção') }}</div>

                    <div class="card-body">
                        <form method="GET" action="{{ route('search') }}">
                            <div class="form-group">
                                <label for="name"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Gênero') }}</label>

                                <select id="genery" name="genery" required>
                                    <option value="1">Feminino</option>
                                    <option value="2">Masculino</option>
                                    <option value="3">Indefinido</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="email"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Hobby') }}</label>

                                <select id="hobby" name="hobby" required>
                                    <option value="1">Parque</option>
                                    <option value="2">Balada</option>
                                    <option value="3">Bar</option>
                                    <option value="4">Museu</option>
                                    <option value="5">Netflix</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="password"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Viagem') }}</label>
                                <select id="travel" name="travel" required>
                                    <option value="1">Campo</option>
                                    <option value="2">Cidade</option>
                                    <option value="3">Floresta</option>
                                    <option value="4">Praia</option>
                                </select>
                            </div>
                            <div class="form-group ">
                                <label for="password-confirm"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Bebida') }}</label>
                                <select id="drink" name="drink" required>
                                    <option value="1">Chope</option>
                                    <option value="2">Milk Shake</option>
                                    <option value="3">Suco Detox</option>
                                    <option value="4">Vinho</option>
                                    <option value="5">Café</option>
                                </select>
                            </div>
                            <div class="form-group ">
                                <label>Fragância</label>
                                <div>
                                    <label>Doce</label>
                                    <input name="fragancy" type="range" min="1" max="5">
                                    <label>Madeirado</label>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label>Teor Alcóolico</label>
                                <div>
                                    <label>0%</label>
                                    <input name="teor" type="range" min="1" max="5">
                                    <label>100%</label>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label>Preço</label>
                                <div>
                                    <label>$</label>
                                    <input name="price" type="range" min="1" max="5">
                                    <label>$$$$$</label>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">
                                {{ __('Pesquisar') }}
                            </button>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
