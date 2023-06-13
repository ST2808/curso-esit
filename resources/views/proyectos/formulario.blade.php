<div class="row mt-4">
    <div class="col-12 col-md-6 col-lg-4">
        <label for="NombreProyecto" class="form-label">Nombre de proyecto</label>
        <input name="NombreProyecto" type="text" class="form-control" id="NombreProyecto" aria-describedby="text" @error('NombreProyecto') class="border border-danger" @enderror value="{{old('NombreProyecto')}}">
        @error('NombreProyecto')
            <span id="NombreProyecto" class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="col-12 col-md-6 col-lg-4">
        <label for="UrlLogo" class="form-label">Logo del proyecto</label>
        <input name="UrlLogo" type="file" class="form-control" disabled id="UrlLogo" @error('UrlLogo') class="border border-danger" @enderror>
        @error('UrlLogo')
            <span id="UrlLogo" class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="col-12 col-md-6 col-lg-4">
        <label for="FuenteFondos" class="form-label">Fuente de los fondos</label>
        <input name="FuenteFondos" type="text" class="form-control" id="FuenteFondos" aria-describedby="FuenteFondos" @error('FuenteFondos') class="border border-danger" @enderror value="{{ old('FuenteFondos') }}">
        @error('FuenteFondos')
            <span id="FuenteFondos" class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="col-12 col-md-6 col-lg-4">
        <label for="descripcion" class="form-label">Descripción del proyecto</label>
        <textarea name="descripcion" type="text" class="form-control" id="descripcion" @error('descripcion') class="border border-danger" @enderror>{{old('descripcion')}}</textarea >
        @error('descripcion')
            <span id="descripcion" class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="col-12 col-md-6 col-lg-4">
        <label for="MontoPlanificado" class="form-label">Monto Planificado</label>
        <input name="MontoPlanificado" type="number" class="form-control" id="MontoPlanificado" aria-describedby="MontoPlanificado" @error('MontoPlanificado') class="border border-danger" @enderror value="{{old('MontoPlanificado')}}">
        @error('MontoPlanificado')
            <div id="MontoPlanificado" class="text-danger">{{$message}}</div>
        @enderror
    </div>
    <div class="col-12 col-md-6 col-lg-4">
        <label for="MontoPatrocinado" class="form-label">Monto Patrocinado</label>
        <input name="MontoPatrocinado" type="number" class="form-control" id="MontoPatrocinado" @error('MontoPatrocinado') class="border border-danger" @enderror value="{{old('MontoPatrocinado')}}">
        @error('MontoPatrocinado')
            <span id="MontoPatrocinado" class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="col-12 col-md-6 col-lg-4">
        <label for="MontoFondosPropios" class="form-label">Monto Fondos Propios</label>
        <input name="MontoFondosPropios" type="number" class="form-control" id="MontoFondosPropios" @error('MontoFondosPropios') class="border border-danger" @enderror value="{{old('MontoFondosPropios')}}">
        @error('MontoFondosPropios')
            <span id="MontoFondosPropios" class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="col-12 col-md-6 col-lg-4">
        <label for="FechaInicio" class="form-label">Fecha de inicio</label>
        <input name="FechaInicio" type="date" class="form-control" id="FechaInicio" @error('FechaInicio') class="border border-danger" @enderror value="{{old('FechaInicio')}}">
        @error('FechaInicio')
            <span id="FechaInicio" class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="col-12 col-md-6 col-lg-4">
        <label for="FechaFin" class="form-label">Fecha de finalización</label>
        <input name="FechaFin" type="date" class="form-control" id="FechaFin" @error('FechaFin') class="border border-danger" @enderror value="{{old('FechaFin')}}">
        @error('FechaFin')
            <span id="FechaFin" class="text-danger">{{$message}}</span>
        @enderror
    </div>

    <div class="d-flex justify-content-center align-items-center mt-5">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>
