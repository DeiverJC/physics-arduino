@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="card mb-1 border-0 shadow-lg">
                    <h4 class="card-header bg-success text-light">
                        Velocidad
                        <small class="float-right text-muted">
                            <strong>Datos tomados: </strong>{!! $mru->created_at->diffForHumans() !!}
                        </small>
                    </h4>
                    <div class="card-body">
                        <form>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Distancia:</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" value="{!! $mru->d1 !!}" disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Tiempo:</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" value="{!! $mru->t1 !!}" disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Velocidad:</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control-plaintext" value="?" readonly>
                                </div>
                            </div>
                            <div class="form-group text-center">
                                <h3>
                                    $$V = {d \over t} =
                                    {{!! $mru->d1 !!}_m \over {!! $mru->t1 !!}_s} = {!! $mru->v !!}_{m/s} $$
                                </h3>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card border-0 shadow-lg">
                    <h4 class="card-header bg-success text-light">
                        Aceleración
                        <small class="float-right text-muted">
                            <strong>Datos tomados: </strong>{!! $mrua->created_at->diffForHumans() !!}
                        </small>
                    </h4>
                    <div class="card-body">
                        <form>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Velocidad inicial</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" value="{!! $mrua->vi !!}" disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Velocidad final</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" value="{!! $mrua->vf !!}" disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Aceleración</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control-plaintext" value="?" readonly>
                                </div>
                            </div>
                            <div class="form-group text-center">
                                <h3>
                                    $$a = {v_f - v_i \over t_\delta}
                                    = {{!! $mrua->vf !!}_{m/s} - {!! $mrua->vi !!}_{m/s} \over {!! $mrua->td !!}_s}
                                    = {!! $mrua->a !!}_{m/s²} $$
                                </h3>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
<script src="{{ asset('MathJax/MathJax.js?config=TeX-AMS-MML_HTMLorMML') }}"></script>
@endpush
