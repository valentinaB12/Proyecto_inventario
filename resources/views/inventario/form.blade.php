
<div class="row g-3">
    <div class="col">
      <label for="Email" class="form-label">Email</label>
      <input type="email" class="form-control" name="Email" id="Email" value="{{isset($datos->Email)? $datos->Email:''}}" aria-describedby="emailHelp">
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="col">
      <label for="Nombres" class="form-label">Nombre</label>
      <input type="text" class="form-control" name="Nombres" id="Nombres" value="{{isset($datos->Nombres)? $datos->Nombres:''}}">
    </div>
</div>
<div class="row g-3">
    <div class="col">
        <label for="Apellidos" class="form-label">Apellido</label>
        <input type="text" class="form-control" name="Apellidos" id="Apellidos" value="{{isset($datos->Apellidos)? $datos->Apellidos:''}}">
    </div>
    <div class="col">
        <label for="Area" class="form-label">Area</label>
        <input type="text" class="form-control" name="Area" id="Area" value="{{isset($datos->Area)? $datos->Area:''}}">
    </div>
</div>
    <div class="mb-3">
        <label for="Tipo de Computador" class="form-label">Tipo de Computador</label>
        <select type="text" class="form-select" name="Tipo de Computador" id="Tipo de Computador" aria-label="Default select example" value="{{isset($datos->Tipo_de_Computador)? $datos->Tipo_de_Computador:''}}">

            <option value="AIO" name="Tipo de Computador" id="Types of Computers">AIO</option>
            <option value="Laptop" name="Tipo de Computador" id="Types of Computers">Laptop</option>

        </select>
    </div>
<div class="row g-3">
    <div class="col">
        <label for="Marca" class="form-label">Marca</label>
        <input type="text" class="form-control" name="Marca" id="Marca" value="{{isset($datos->Marca)? $datos->Marca:''}}">
    </div>
    <div class="col">
        <label for="Model" class="form-label">Model</label>
        <input type="text" class="form-control" name="Model" id="Model" value="{{isset($datos->Model)? $datos->Model:''}}">
    </div>
</div>
<div class="row g-3">
    <div class="col">
        <label for="Numero_serial" class="form-label">S/N</label>
        <input type="text" class="form-control" name="Numero_serial" id="Numero_serial" value="{{isset($datos->Numero_serial)? $datos->Numero_serial:''}}">
    </div>
    <div class="col">
        <label for="SO" class="form-label">SO</label>
        <select class="form-select" id="SO" name="SO" aria-label="Default select example" value="{{isset($datos->SO)? $datos->SO:''}}">
            <option value="Windows">Windows</option>
            <option value="Linux">Linux</option>
            <option value="Mac">Mac</option>
        </select>
    </div>
</div>
<div class="row g-3">
    <div class="col">
        <label for="RAM" class="form-label">RAM</label>
        <input type="text" class="form-control" name="RAM" id="RAM" value="{{isset($datos->RAM)? $datos->RAM:''}}">
    </div>
    <div class="col">
        <label for="DD" class="form-label">DD</label>
        <input type="text" class="form-control" name="DD" id="DD" value="{{isset($datos->DD)? $datos->DD:''}}">
    </div>
</div>
<div class="row g-3">
    <div class="col">
        <label for="Marca del monitor" class="form-label">Marca del monitor</label>
        <input type="text" class="form-control" name="Marca del monitor" id="Marca del monitor" value="{{isset($datos->Marca_del_monitor)? $datos->Marca_del_monitor:''}}">
    </div>
    <div class="col">
        <label for="Serial monitor" class="form-label">Serial monitor</label>
        <input type="text" class="form-control" name="Serial monitor" id="Serial monitor" value="{{isset($datos->Serial_monitor)? $datos->Serial_monitor:''}}">
    </div>
</div>

<div class="d-grid gap-2 d-md-flex justify-content-md-end" style="margin: 1rem">



</div>



