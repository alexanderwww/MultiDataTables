<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0" shrink>
    <title>Document</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!--    Datatables  -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.css"/>  
    <title></title>

    <!-- ----------------------------MultipleDatatables  -->

      <!-- Bootstrap -->
  <!-- <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"> -->

  <!-- Datatables -->

  <!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.13/css/dataTables.bootstrap.min.css"> -->


  <!-- <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script> -->

  <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->


  <!-- <script src="https://nightly.datatables.net/js/jquery.dataTables.js"></script>
  <script src="https://nightly.datatables.net/js/dataTables.bootstrap.js"></script>
  
  <link href="https://nightly.datatables.net/responsive/css/responsive.dataTables.css?_=0733d80df58ca2854b640850303e9ae6.css" rel="stylesheet" type="text/css" />
  
  <script src="https://nightly.datatables.net/responsive/js/dataTables.responsive.js?_=0733d80df58ca2854b640850303e9ae6"></script>  -->

  <!-- ----------------------------------Necesarios  -->

    <!-- Local  -->
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>

    <!-- Ext  -->
<!-- <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script> -->

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


</head>
<body>
    
    <div>
        <H1>Agregar Btn eliminar y editar</H1>
    </div>

    <!-- <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <table id="tablaUsuarios1" class="table-striped table-bordered" style="width: 100%;">
                    <thead>
                        <tr>
                            
                            <th>ID</th>
                            <th>User</th>
                            <th>FirstName</th>
                          
                        </tr>
                    </thead>

                    <tbody></tbody>
                
                </table>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <table id="tablaUsuarios2" class="table-striped table-bordered" style="width: 100%;">
                    <thead>
                        <tr>
                            
                            <th>ID</th>
                            <th>User</th>
                            <th>FirstName</th>
                          
                        </tr>
                    </thead>

                    <tbody></tbody>
                
                </table>
            </div>
        </div>

    </div> -->

    <!-- --------------------------------------MultiTable  -->

    <div class="container">
      
      <!-- Nav tabs -->
      <ul id="myTabs" class="nav nav-tabs" role="tablist">
        <li role="presentation" class="active">
          <a  href="#1" aria-controls="Table 1" role="tab" data-toggle="tab">Table 1</a>
        </li>
        <li role="presentation">
          <a href="#2" aria-controls="Table 2" role="tab" data-toggle="tab">Table 2</a>
        </li>
        <li role="presentation">
          <a href="#3" aria-controls="Table 3" role="tab" data-toggle="tab">Table 3</a>
        </li>
      </ul>
  
      <!-- Tab panes -->
      <div class="tab-content ">
        
        <!-- tabpanel -->
        <div role="tabpanel" class="tab-pane active" id="1">
  
        <table id="example" class="table table-striped table-hover table-bordered" width="100%">
          <thead>
            <tr>
              <th>Name</th>
              <th>Position</th>
              <th>Office</th>

            </tr>
          </thead>
  
  
          <tbody>
            <!-- <tr>
              <td>Tiger num#1</td>
              <td>System Architect</td>
              <td>Edinburgh</td>
            </tr>

            <tr>
              <td>Tiger num#1</td>
              <td>System Architect</td>
              <td>Edinburgh</td>
            </tr>
            <tr>
              <td>Tiger num#1</td>
              <td>System Architect</td>
              <td>Edinburgh</td>
            </tr>
            <tr>
              <td>Tiger num#1</td>
              <td>System Architect</td>
              <td>Edinburgh</td>
             </tr>  -->
           </tbody>
        </table>
        
        <!-- /tabpanel -->
        </div>
        
        <!-- tabpanel -->
        <div role="tabpanel" class="tab-pane" id="2">
  
        <table id="example1" class="table table-striped table-hover table-bordered" width="100%">
          <thead>
            <tr>
              <th>Age</th>
              <th>Start date</th>
              <th>Salary</th>
            </tr>
          </thead>
  
  
          <tbody>
  
            <!-- <tr>
              <td>Elton Baldwin</td>
              <td>Data Coordinator</td>
              <td>Edinburgh</td>

            </tr>
            <tr>
              <td>Zenaida Frank</td>
              <td>Software Engineer</td>
              <td>New York</td>

            </tr>
            <tr>
              <td>Zorita Serrano</td>
              <td>Software Engineer</td>
              <td>San Francisco</td>

            </tr> -->

          </tbody>
        </table>
  
        <!-- /tabpanel -->
        </div>
        
        <!-- tabpanel -->
        <div role="tabpanel" class="tab-pane" id="3">
  
        <table id="example2" class="table table-striped table-hover table-bordered" width="100%">
          <thead>
            <tr>
              <th>Name</th>
              <th>Position</th>
              <th>Office</th>
            </tr>
          </thead>

          <tbody>
            <!-- <tr>
              <td>Gloria Little</td>
              <td>Systems Administrator</td>
              <td>New York</td>

            </tr>
            <tr>
              <td>Bradley Greer</td>
              <td>Software Engineer</td>
              <td>London</td>

            </tr>
            <tr>
              <td>Dai Rios</td>
              <td>System Architect</td>
              <td>Edinburgh</td>

            </tr>
            <tr>
              <td>Jenette Caldwell</td>
              <td>Financial Controller</td>
              <td>New York</td>

            </tr> -->
<!--  
            <tr>
              <td>Angelica Ramos</td>
              <td>System Architect</td>
              <td>London</td> -->

            </tr>


          </tbody>
        </table>
  
        <!-- /tabpanel -->
        </div>
        
      <!-- /Tab panes -->
      </div>
      
    <!-- /container -->
    </div>

    <!-- Optional JavaScript -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
      
    <!--    Datatables-->
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.js"></script>  
    <script src="js/ajax.js"></script>

</body>
</html>