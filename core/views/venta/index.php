<?php
   include(MODELS_DIR.'header.php');
?>
<body>
    <div class="contenedor">
         <div class="panel_menu">
            <?php  include(MODELS_DIR.'menu.php'); ?> 
         </div>
         <div class="panel_venta">
            
            
               
               
         </div>
         
    </div>
</body>
</html>
<script type="text/javascript">
    $(document).ready(function(){
         $('#divTabla').DataTable();

        $.ajax({
          type: "POST",
          data: $("#session").serialize(),
          url: '_DIR'+'session/session.php',
        }).done(function(res){

        });
         // var p = confirm("Estas seguro?");
         //    if (p == true) {
         //      // alert("feliciddes");
         //    }else{
         //      // alert("digistes que no :(");
         //    }
    });
</script>