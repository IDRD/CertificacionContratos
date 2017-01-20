<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Certificación contratistas-persona jurídica</title>
  <link rel="stylesheet" href="public/Css/pdf.css" media="screen">

  <style>
   
  </style>
  
</head>
<body>
  <center>
    <p>
      <img src="public/Img/cabecera.png">
    </p>
    <br>
    <span class="Neg">      
      EL  SUSCRITO  RESPONSABLE DEL  ÁREA  APOYO  A  LA  CONTRATACION DEL INSTITUTO DISTRITAL PARA LA RECREACION Y EL DEPORTE. N.I.T. - IDRD: 860.061.099 - 1
      <br><br>
      HACE CONSTAR
    </span>
  </center>
  <br>
  <p class="TextoInicio">
    Que revisada la documentación que reposa en los archivos de  la entidad, se establece que el IDRD suscribió EL <span class="Mayus Vino">{{$data['Tipo_Contrato']}}</span>, que se relaciona a continuación, con <span class="Mayus Vino">{{$data['Nombre_Contratista']}}</span> identificado (a) con <span class="Mayus Vino">{{$data['Tipo_Documento']}}</span> No. <span class="Mayus Vino">{{$data['Cedula']}} - {{$data['Dv']}}</span>, representada legalmente por <span class="Mayus Vino">{{$data['Nombre_Representante']}}</span>, con <span class="Mayus Vino">{{$data['Tipo_Documento_Representante']}}</span> No. <span class="Mayus Vino">{{$data['Cedula_Representante']}}</span>, con las siguientes características:
  </p>   
    <br>
    <div class="Objeto">
      OBJETO:  <span class="Mayus Vino">{{$data['Objeto']}}</span>
    </div> 
    <div class="TableDiv">
      <div class="table">
        <div class="table-row titulo">
          <div class="table-tit">No. Contrato</div>
          <div class="table-cell" style="background-color: #A4A4A4;">
            <span class="Mayus Vino">{{$data['Numero_Contrato']}}</span>
             de 
            <span class="Mayus Vino">{{$data['Anio']}}</span></div>
        </div>

        <div class="table-row">
          <div class="table-cell">
            <span class="Neg">VALOR INICIAL</span>
          </div>
          <div class="table-cell Vino">${{$data['Valor_Inicial']}}</div>
        </div>

        <div class="table-row">
          <div class="table-cell Neg">
            FECHA FIRMA
          </div>
          <div class="table-cell Vino">
            {{$data['Fecha_Firma']}}
          </div>
        </div>

        <div class="table-row">
          <div class="table-cell Neg">
            ACTA DE  INICIO
          </div>
          <div class="table-cell Vino">
            {{$data['Fecha_Inicio']}}
          </div>
        </div>

        <div class="table-row">
          <div class="table-cell Neg">
            PLAZO
          </div>
          <div class="table-cell Mayus Vino">
            {{$data['Meses_Letra']}} ({{$data['Meses_Duracion']}}) Meses y {{$data['Dias_Letra']}} ({{$data['Dias_Duracion']}}) Días - CONTADOS A PARTIR DEL ACTA DE INICIO
          </div>
        </div>

        <div class="table-row">
          <div class="table-cell Neg">FECHA DE TERMINACION</div>
          <div class="table-cell Vino">
            {{$data['Fecha_Fin']}}
          </div>
        </div>

        @if($data['Fecha_Terminacion_Anticipada'] != 0)
            <div class="table-row">
              <div class="table-cell Neg">FECHA DE TERMINACION ANTICIPADA</div>
              <div class="table-cell Vino">
                {{$data['Fecha_Terminacion_Anticipada']}}
              </div>
            </div>
          @endif

          @if($data['CountAdiciones'] > 0)
            <div class="table-row">
              <div class="table-tit Neg Cesion">
                ADICIONES
              </div>
              <div class="table-cell Vino">
                <div class="tableO">
                  @foreach($data['Adiciones'] as $Adiciones)              
                <div class="table-rowO">
                  <div class="table-cellOT Neg">
                    {{ $Adiciones['Numero']}}.
                  </div>
                  <div class="table-cellO Vino">
                    {{ $Adiciones['Valor_Adicion'] }}
                  </div>
                </div>
                @endforeach
                </div>            
              </div>
            </div>
          @endif

          @if($data['CountProrrogas'] > 0)
            <div class="table-row">
              <div class="table-tit Neg Cesion">
                PRORROGAS
              </div>
              <div class="table-cell Vino">
                <div class="tableO">
                  @foreach($data['Prorrogas'] as $Prorrogas)              
                <div class="table-rowO">
                  <div class="table-cellOT Neg">
                    {{ $Prorrogas['Numero']}}.
                  </div>
                  <div class="table-cellO Vino">
                    {{$Prorrogas['Meses_Letra']}} ({{$Prorrogas['Meses']}}) Meses y {{$Prorrogas['Dias_Letra']}} ({{$Prorrogas['Dias']}}) Días.
                  </div>
                </div>
                @endforeach
                </div>            
              </div>
            </div>
          @endif

          @if($data['CountSuspenciones'] > 0)
            <div class="table-row">
              <div class="table-tit Neg Cesion">
                SUSPENCIONES
              </div>
              <div class="table-cell Vino">
                <div class="tableO">
                  @foreach($data['Suspenciones'] as $Suspenciones)              
                <div class="table-rowO">
                  <div class="table-cellOT Neg">
                    {{ $Suspenciones['Numero']}}.
                  </div>
                  <div class="table-cellO Vino">
                    Desde la fecha {{$Suspenciones['Fecha_Inicio']}} hasta {{$Suspenciones['Fecha_Fin']}}, con reinicio el {{$Suspenciones['Fecha_Reinicio']}}. Con duración de {{$Suspenciones['Meses_Letra']}} ({{$Suspenciones['Meses']}}) Meses y {{$Suspenciones['Dias_Letra']}} ({{$Suspenciones['Dias']}}) Días. 
                  </div>
                </div>
                @endforeach
                </div>            
              </div>
            </div>
          @endif

          @if($data['CountCesiones'] > 0)           
              @foreach($data['Cesiones'] as $Cesiones)              
                <div class="table-row">
                  <div class="table-tit Neg Cesion">FECHA DE CESIÓN</div>   
                  <div class="table-tit Neg Vino">{{$Cesiones['Fecha_Cesion']}}</div>
                </div>
                <div class="table-row">
                  <div class="table-cell Neg">VALOR CEDIDO</div>
                  <div class="table-cell Vino">${{$data['Cesiones'][0]['Valor_Cedido']}}</div>
                </div>
              @endforeach
          @endif

          @if($data['CountObligaciones'] > 0)           
          <div class="table-row">
            <div class="table-cell Neg">
              OBLIGACIONES ESPECIFICAS
            </div>
            <div class="table-cell Vino">
              <div class="tableO">
                @foreach($data['Obligaciones'] as $Obligaciones)              
                <div class="table-rowO">
                  <div class="table-cellOT Neg">
                    {{ $Obligaciones['Numero']}}.
                  </div>
                  <div class="table-cellO Vino">
                    {{ $Obligaciones['Obligacion'] }}.
                  </div>
                </div>
                @endforeach
              </div>            
            </div>
          </div>
          @endif

      </div>
    </div>
    <br>
    <div class="TextoInicio">
      <span>
        Para constancia se expide a solicitud de la parte interesada en Bogotá, D.C., a los <span class="Minus Vino">{{$data['Dia_Actual_Letra']}}</span> (<span class="Minus Vino">{{$data['Dia_Actual']}}</span>) días del mes de <span class="Minus Vino">{{$data['Fecha_A']}}</span> de <span class="Minus Vino">{{$data['Anio_Actual']}}</span>.
      </span>
      <br><br>
      <img src="public/Img/firma.png">
    </div>
    <br><br>
    <div class="footer">
      <img src="public/Img/piepaginapdf.jpg">
    </div>   
  </body>
</html>