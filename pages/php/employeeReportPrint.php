<html>
<head>
  <title>Report Print</title>

  <style media="print">

  body {
    background-color: white;
    color: black;
    font-size: small;
    font-family: sans-serif, helvetica, tahoma, arial;
    padding: 0px;
    margin: 0px;
  }

  .page-break  {
    display:block;
    page-break-before:always;
  }
  .navbar{
    position: relative;
    width: 100%;
    min-height: 60px;
    background-color: #212121;
    -webkit-print-color-adjust: exact;
    padding: 10px 40px;
  }
  .tablePrint{
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
  }

  .tablePrint td, .tablePrint th {
    border: 1px solid #ddd;
    padding: 8px;
    -webkit-print-color-adjust: exact;
  }

  .tablePrint tr:nth-child(even){
    background-color: #f2f2f2;
    -webkit-print-color-adjust: exact;
  }

  .tablePrint th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #0099CC;
    color: white;
    -webkit-print-color-adjust: exact;
  }
  </style>

</head>

<body>

  <div class="row">
    <div class="navbar">
      <span><img src="../../assets/img/logo-w.png" style="height:50px; width:50px;">&nbsp; <strong style="color:white;position:relative;top:-22px;left:40px;font-size:14px;">DEPARTMENT REPORT</strong></span>
    </div>
    <br>
  </div>

  <div class="row" style="padding:20px;">
    <h4>BASIC INFORMATION:</h4><br>
    <center>
      <table class="table tablePrint" id="basicInfoTablePrint" cellpadding='5'>

      </table>
    </center>
  </div>

  <div class="page-break"></div>
  <div class="navbar">
    <span><img src="../../assets/img/logo-w.png" style="height:50px; width:50px;">&nbsp; <strong style="color:white;position:relative;top:-22px;left:40px;font-size:14px;">DEPARTMENT REPORT</strong></span>
  </div>
  <div class="row" style="padding:20px;">
    <h4>ONGOING TASKS:</h4><br>
    <center>
      <table class="table tablePrint" id="tableOngoingPrint" cellpadding='5'>

      </table>
    </center>
  </div>

  <div class="page-break"></div>
  <div class="navbar">
    <span><img src="../../assets/img/logo-w.png" style="height:50px; width:50px;">&nbsp; <strong style="color:white;position:relative;top:-22px;left:40px;font-size:14px;">DEPARTMENT REPORT</strong></span>
  </div>
  <div class="row" style="padding:20px;">
    <h4>COMPLETED TASKS:</h4><br>
    <center>
      <table class="table tablePrint" id="tableCompletedPrint" cellpadding='5'>

      </table>
    </center>
  </div>

</body>
</html>
