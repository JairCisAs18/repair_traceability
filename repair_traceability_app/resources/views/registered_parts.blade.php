@include('header')
<body>
  <h2>Piezas registradas</h2>
  <table class="table">
        <thead>
          <tr>
            <th scope="col" class="text-center">RNO</th>
            <th scope="col" class="text-center">SNA</th>
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
            <!-- <td class="text-center">{{$p->INIT_DATE}}</td>
            <td class="text-center">{{$p->END_DATE}}</td>
            <td class="text-center">{{$p->IN_PROCESS}}</td>
            <td class="text-center">{{$p->REPAIRED}}</td>
            <td class="text-center">{{$p->SCRAP}}</td> -->
          </tr>
        @endforeach
        </tbody>
    </table>
    <form action="/addPart" method="POST">
      <label for="sna">SNA:</label>
      @csrf
      <input type="text" name="sna">
      <input type="submit">
    </form>
  </body>