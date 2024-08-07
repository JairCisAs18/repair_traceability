@include('header')
<body>
  <script src="{{ url ('scripts/store.js') }}"></script>
  <!-- <h2>Piezas entrantes</h2>
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Introducir piezas</button> -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Introducir piezas</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="/addPart" method="POST">
            <label for="process">Proceso:</label>
            <select name="process" id="process">
              @foreach ($processes as $pr)
                <option value="{{$pr->id}}">{{$pr->PROCESS_NAME}}</option>
              @endforeach
            </select>
            &nbsp;&nbsp;&nbsp;&nbsp;
            <label for="sna">SNA:</label>
            @csrf
            <input type="text" name="sna" id="sna" autocomplete="off">
            <br><br>
            <div class="container-fluid d-flex justify-content-center"><input type="submit" value="Registrar" class="btn btn-success"></div>
            <ul id="list"></ul>
            <div id="items"></div>
            <div id="items2"></div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="container-sm mt-2 rounded pb-1" style="background-color: lightgrey;">
    <div class="container-fluid my-1 d-flex justify-content-around align-items-center">
      <h2>Piezas entrantes</h2>
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Introducir piezas</button>
    </div>
    <table class="table">
      <thead>
        <tr class="table-primary">
          <th scope="col" class="text-center">RNO</th>
          <th scope="col" class="text-center">SNA</th>
          <th scope="col" class="text-center">Fecha de registro</th>
          <th scope="col" class="text-center">Proceso</th>
        </tr>
      </thead>
      <tbody>
      @foreach ($parts as $p)
        <tr>
          <th class="text-center">{{$p->getRNO()}}</th>
          <td class="text-center">{{$p->SNA}}</td>
          <td class="text-center">{{$p->INIT_DATE}}</td>
          <td class="text-center">{{$p->getProcess()}}</td>
        </tr>
      @endforeach
      </tbody>
    </table>
  </div>
</body>