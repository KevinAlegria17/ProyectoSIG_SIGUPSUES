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

.header { 
  position: fixed; top: -20px; left: 0px; right: 0px;  height: 50px; }
.footer { 
  position: fixed; top: 950px; left: 0px; right: 0px;  height: 50px; }


.cuerpo{
    position: fixed; left: 0px; right: 0px;  height: 50px; margin-top: 50px;}

    table {
     width: 100%;
     border: 1px solid #000;
   }
   th, td {
     width: 25%;
     text-align: left;
     vertical-align: top;
     border: 1px solid #000;
     border-collapse: collapse;
     padding: 0.3em;
     caption-side: bottom;
   }
   caption {
     padding: 0.3em;
     color: #fff;
     background: #000;
   }
   th {
     background: #eee;
   }


 </style>
 <body>
  <div class="row header">
    <div style="width: 25%; float: left; ">
      <p align="left">Generado:{{$generado}}</p>
    </div>
    <div style="width: 50%; float: left; ">
    </div>
    <div style="width: 25%; float: left;">
      <p align="right">Pagina 1/2</p>
    </div>
  </div>
  <br>
  <br>
  <div class="row cuerpo">
    <div align="center" style="width: 20%; float: left; ">
      <img src="../public/img/logoues2.png" width="100" height="125">
    </div>
    <div style="width: 60%; float: left; ">
      <h3 align="center">UNIVERSIDAD DE EL SALVADOR
        <br>FACULTAD DE INGENIERIA Y ARQUITECTURA
        <br>SUBUNIDAD DE PROYECCION SOCIAL</h3>
    </div>
    <div align="center" style="width: 20%; float: left; ">
      <img src="../public/img/fia.png" width="100" height="100">
    </div>
    <div style="width: 100%; clear: both; ">
      <h4 align="center">REPORTE DE DINERO AHORRADO</h4>
      <p align="center" >Desde {{$fecha1}} HASTA {{$fecha2}}</p>
      <p>Este reporte contiene informacion acerca de la cantidad de dinero que se ha ahorrado en un año para las empresas que han solicitado servicios sociales.</p>
      <table  class="table-1 table table-bordered ">
              <thead>
                <tr >
                  <th style="text-align: left;">Monto</th>
                </tr>
              </thead> 
              <tbody>
                @if ($dinero==Null)
                <tr >
                  <td>No se encontraron registros asociados a este año</td>
                </tr>
                @else
                @foreach($dinero as $ss)
                <tr >
                  <td>{{$ss->monto}}</td>
                </tr>
                @endforeach
                @endif
              </tbody>
            </table>
    </div>
    </div>
    <div class="row footer">
      <div style="width: 100%; float: left; ">
        <p align="right">Pagina 1/2</p>
    </div>
    </div>
  </body>
  </html>


