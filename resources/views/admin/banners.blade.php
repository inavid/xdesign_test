@extends('layouts.app')

@section('content')
<div class="container" style="margin-top: 10px;">
    <div class="row">
        <div class="col-md-3">
            <div class="list-group">
              <a href="#" class="list-group-item active">
                Crear
              </a>
              <a href="#" class="list-group-item">Editar</a>
              <a href="#" class="list-group-item">Eliminar</a>
            </div>
        </div>
        <div class="col-md-8 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Banners</div>
                <form style="margin: 10px;">
                    <div class="form-group">
                        <label for="tipo">Tipo:</label>
                        <select class="form-control" id="tipo">
                            <option value="1">Webcast</option>
                            <option value="2">Sports World Day</option>
                        </select>
                    </div>
                    <div class="webcast-fields">
                        <div class="form-group">
                            <label for="periodo">Periodo:</label>
                            <input type="text" class="form-control" id="periodo">
                        </div>
                        <div class="form-group">
                            <label for="periodo">Fecha del evento:</label>
                            <input type="text" class="form-control" id="periodo">
                        </div>
                        <div class="form-group">
                            <label for="hora">Hora del evento:</label>
                            <input type="text" class="form-control" id="hora">
                        </div>
                        <div class="form-group">
                            <label for="hora">Flyer evento:</label>
                            <input type="file" class="form-control" id="flyer">
                        </div>
                        <div class="form-group">
                            <label for="url">Link registro:</label>
                            <input type="text" class="form-control" id="url">
                        </div>
                        <div class="form-group">
                            <label for="background">Background:</label>
                            <input type="file" class="form-control" id="background">
                        </div>
                    </div>
                    <div class="swday-fields">
                        <div class="form-group">
                            <label for="periodo">Fecha del evento:</label>
                            <input type="text" class="form-control" id="periodo">
                        </div>
                        <div class="form-group">
                            <label for="hora">Flyer evento:</label>
                            <input type="file" class="form-control" id="flyer">
                        </div>
                        <div class="form-group">
                            <label for="mail_contact">Correo asistencia:</label>
                            <input type="text" class="form-control" id="mail_contact">
                        </div>
                        <div class="form-group">
                            <label for="background">Background:</label>
                            <input type="file" class="form-control" id="background">
                        </div>
                    </div>
                    <div class="row text-center">
                        <div class="col-md-5 col-md-offset-1">
                            <button type="submit" class="btn btn-success btn-block">Guardar</button>
                        </div>
                        <div class="col-md-5">
                            <button class="btn btn-warning btn-block">Limpiar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
    @parent
    <script src="{{ asset('js/admin/banners.js') }}"></script>
@endsection