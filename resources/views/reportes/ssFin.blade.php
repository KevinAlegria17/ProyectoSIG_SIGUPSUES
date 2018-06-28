<style>

.col-md-12 {
  width: 100%;
} 

body {
  font-family: ‘Arial Black’, Gadget, sans-serif;
  margin: 10mm 10mm 10mm 10mm;

}
.box {
  position: relative;
  border-radius: 3px;
  background: #ffffff;
  border-top: 3px solid #d2d6de;
  margin-bottom: 20px;
  width: 100%;
  box-shadow: 0 1px 1px rgba(0,0,0,0.1);
  background-color: #ECF0F5;
}

.box-header {
  color: #444;
  display: block;
  padding: 10px;
  position: relative;
}

.box-header.with-border {
  border-bottom: 1px solid #f4f4f4;
}



.box-body {
  border-top-left-radius: 0;
  border-top-right-radius: 0;
  border-bottom-right-radius: 3px;
  border-bottom-left-radius: 3px;
  padding: 10px;

}


.box-footer {
  border-top-left-radius: 0;
  border-top-right-radius: 0;
  border-bottom-right-radius: 3px;
  border-bottom-left-radius: 3px;
  border-top: 1px solid #f4f4f4;
  padding: 10px;
  background-color: #fff;
}


.table-bordered {
  border: 1px solid #f4f4f4;
}


.table {
  width: 100%;
  max-width: 100%;
  margin-bottom: 20px;
}

table {
  background-color: transparent;
  border-collapse: collapse;


}



.table-bordered>tbody>tr>th, .table-bordered>tfoot>tr>th, .table-bordered>thead>tr>td, .table-bordered>tbody>tr>td, .table-bordered>tfoot>tr>td .prueba {

  border-bottom: 1px solid #08088A;
}


.badge {
  display: inline-block;
  min-width: 20px;
  
  font-size: 13px;
  font-weight: 700;
  line-height: 2;
  color: #000000;
  
  white-space: nowrap;
  vertical-align: middle;
  background-color: #777;
  border-radius: 9px;
}

.bg-red {
  background-color: transparent ;
}




</style>
<body>
  <div class="col-md-12">
    <div class="box">
      <div class="box-header with-border">
        <h2> Reporte de cantidad de alumnos que han completado sus servicios sociales en el año {{$anio}}</h2>
        <p>Este reporte contiene la cantidad de alumnos que terminaron su servicio social en el año {{$anio}} y tambien los datos de estos alumnos</p>
      </div><!-- /.box-header -->
      <div class="box-body">
        <table  class="table-1 table table-bordered ">
          <thead>
            <tr >
              <th style="text-align: left;">Cantidad</th>
              
            </tr>
          </thead> 
          <tbody>
           @foreach($sss as $ss)
           <tr >
            <td>{{$ss->cuenta}}</td>
          @endforeach
          </tr>
        </tbody>
        <tfoot>
        </tfoot>
      </table>
      <table  class="table-1 table table-bordered ">
          <thead>
            <tr >
              <th style="text-align: left;">Alumnos</th>
              
            </tr>
          </thead> 
          <tbody>
          @foreach($sss2 as $ss2)
           <tr >
            <td>{{$ss2->carnet}}</td>
          </tr>
          @endforeach
          </tbody>
        <tfoot>
        </tfoot>
      </table>

    </div><!-- /.box-body -->
    <div class="box-footer clearfix">
    </div>
  </div><!-- /.box -->
</div>
</body>
</html>
