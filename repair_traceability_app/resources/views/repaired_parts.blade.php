@include('header')
<body>
  <script src="{{ url ('scripts/store.js') }}"></script>
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Introducir piezas</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="/add-repaired" method="POST">
            <div class="container-fluid d-flex justify-content-around align-items-start">
              <label for="sna" class="ms-3">SNA:</label>
              @csrf
              <input type="text" name="sna" id="sna" class="ms-3 h-50" autocomplete="off">
              <input type="submit" value="Registrar" class="btn btn-success ms-3">
            </div>
            <ul id="list"></ul>
            <div id="items"></div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="container-sm mt-2 rounded pb-1" style="background-color: lightgrey;">
    <div class="container-fluid my-1 d-flex justify-content-around align-items-center">
      <h2>Piezas reparadas</h2>
      <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Nueva pieza reparada</button>
    </div>
    <table class="table">
        <thead>
          <tr class="table-success">
            <th scope="col" class="text-center">RNO</th>
            <th scope="col" class="text-center">SNA</th>
            <th scope="col" class="text-center">Fecha de término</th>
            <th scope="col" class="text-center">Proceso</th>
            <!-- <th scope="col" class="text-center">INIT_DATE</th>
            <th scope="col" class="text-center">END_DATE</th>
            <th scope="col" class="text-center">IN_PROCESS</th>
            <th scope="col" class="text-center">REPAIRED</th>
            <th scope="col" class="text-center">SCRAP</th> -->
          </tr>
        </thead>
        <tbody>
        @foreach ($parts as $p)
          <tr>
            <th class="text-center">{{$p->getRNO()}}</th>
            <td class="text-center">{{$p->SNA}}</td>
            <td class="text-center">{{$p->END_DATE}}</td>
            <td class="text-center">{{$p->getProcess()}}</td>
            <!-- <td class="text-center">{{$p->INIT_DATE}}</td>
            <td class="text-center">{{$p->END_DATE}}</td>
            <td class="text-center">{{$p->IN_PROCESS}}</td>
            <td class="text-center">{{$p->REPAIRED}}</td>
            <td class="text-center">{{$p->SCRAP}}</td> -->
          </tr>
        @endforeach
        </tbody>
    </table>
  </div>
</body>