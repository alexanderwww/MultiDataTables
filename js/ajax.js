$(document).ready(function(){
    
    // $("#tablaUsuarios1").DataTable({
    //     "ajax":{
    //         "url":"conexionBDD/consulta.php",
    //         'dataSrc': 'Data'

    //     },
    //     "columns":
    //     [
    //         {"data":"user_id"},
    //         {"data":"user_name"},
    //         {"data":"user_firstname"},
    //         // {"data":"user_lastname"},
    //         // {"data":"user_gerder"},
    //         // {"data":"user_password"},
    //         // {"data":"user_status"},
    //     ]

    // })


    // -------------MultiTables 

    var table = $('#example').DataTable({
        responsive: true
    //     "ajax":{
    //         "url":"conexionBDD/consulta.php",
    //         'dataSrc': 'Data'

    //     },
    //     "columns":
    //     [
    //         {"data":"user_id"},
    //         {"data":"user_name"},
    //         {"data":"user_firstname"},
    //     ]
      }); 
    
      var table1 = $('#example1').DataTable({
        responsive: true

        //     "ajax":{
        //     "url":"conexionBDD/consulta.php",
        //     'dataSrc': 'Data'

        // },
        // "columns":
        // [
        //     {"data":"user_id"},
        //     {"data":"user_name"},
        //     {"data":"user_firstname"},
        // ]
      });
    
      var table2 = $('#example2').DataTable({
        responsive: true

        //     "ajax":{
        //     "url":"conexionBDD/consulta.php",
        //     'dataSrc': 'Data'

        // },
        // "columns":
        // [
        //     {"data":"user_id"},
        //     {"data":"user_name"},
        //     {"data":"user_firstname"},
        // ]
      });
    
    
      // Show tab when clicked
      $('#myTabs a').click(function (e) {
        e.preventDefault();
        $(this).tab('show');
      });
     
      // Recalculate column widths when displaying tab - this will active Responsive
      $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
        $.fn.dataTable.tables( { visible: true, api: true } ).columns.adjust();
      });

})