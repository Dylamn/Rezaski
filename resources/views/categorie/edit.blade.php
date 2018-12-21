@extends('layouts.master')

@section('navbar')
    @extends('layouts.navbar')
@endsection

@extends('layouts.sidebar')

@section('content')
    <div class="container" style="padding-top: 3%" id="side">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Modifier une catégorie</div>
                    <div class="card-body">
                        <form method="POST" action="/categories/{{ $categorie->id }}" class="form-group">
                            @method('PATCH')
                            @csrf
                            <div class="row">
                                <div class="col-md form-group">
                                    <label for="label">Categorie</label>
                                    <input type="text" id="label" name="label" value="{{ $categorie->label }}"
                                           class="form-control rounded {{ $errors->has('label') ? 'is-invalid' : '' }}">

                                    @if ($errors->has('label'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ __($errors->first('label')) }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md form-group">
                                    <label for="adultPrice">Prix adulte (en €)</label>
                                    <input type="number" min="0" max="999" step="0.01" id="adultPrice" name="adultPrice"
                                           value="{{ $categorie->adultPrice }}"
                                           class="form-control rounded {{ $errors->has('adultPrice') ? 'is-invalid' : '' }}">

                                    @if ($errors->has('adultPrice'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ __($errors->first('adultPrice')) }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="col-md form-group">
                                    <label for="childrenPrice">Prix enfant (en €)</label>
                                    <input type="number" min="0" step="0.01" id="childrenPrice" name="childrenPrice"
                                           value="{{ $categorie->childrenPrice}}"
                                           class="form-control rounded {{ $errors->has('childrenPrice') ? 'is-invalid' : '' }}">

                                    @if ($errors->has('childrenPrice'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ __($errors->first('childrenPrice')) }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <div class="offset-md-5 col-md-2">
                                    <input type="submit" value="Modifier" class="btn btn-primary">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/sidebar.js') }}"></script>
    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"
            integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ"
            crossorigin="anonymous"></script>
    <!-- jQuery Custom Scroller CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
@endsection
