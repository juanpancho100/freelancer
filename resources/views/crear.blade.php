@extends('layouts.app')

@section('content')
<div class="card-body" style="background: #f9f9f9; margin-top: 20px;">
                                        <h4>Crear Anuncio</h4>
                                        <hr class="my-4">
                                        <form action="/crear" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="text">Asunto</label>
                                                    <input type="text" class="form-control" name="asunto" value="">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="inputCity">Precio</label>
                                                    <input type="number" class="form-control" name="precio" value="">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                                        <label class="form-check-label" for="inlineRadio1">S./</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                        <label class="form-check-label" for="inlineRadio2">$</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                                                        <label class="form-check-label" for="inlineRadio3">€</label>
                                                        </div>
                                                    </div>  
                                            </div>
                                            <button type="submit" class="btn btn-success">Crear</button>
                                        </form>
                                    </div>

@endsection