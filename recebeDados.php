<?php

$nome  = $_POST['nome'];
$idade = $_POST['idade'];

if($nome==''){
    echo json_encode('
<script>
 Command: toastr["info"]("Digite todos os campos! ", "Atenção!")

toastr.options = {
  "closeButton": false,
  "debug": true,
  "newestOnTop": false,
  "progressBar": false,
  "positionClass": "toast-top-right",
  "preventDuplicates": false,
  "onclick": null,
  "showDuration": "300",
  "hideDuration": "1000",
  "timeOut": "5000",
  "extendedTimeOut": "1000",
  "showEasing": "swing",
  "hideEasing": "linear",
  "showMethod": "fadeIn",
  "hideMethod": "fadeOut"
}
            
</script>
    ');
}else{
    echo json_encode('
<script>
 Command: toastr["success"]("seu nome é:'.$nome.'.<br/> sua idade é'.$idade.' ", "Enviado!")

toastr.options = {
  "closeButton": false,
  "debug": true,
  "newestOnTop": false,
  "progressBar": false,
  "positionClass": "toast-top-right",
  "preventDuplicates": false,
  "onclick": null,
  "showDuration": "300",
  "hideDuration": "1000",
  "timeOut": "5000",
  "extendedTimeOut": "1000",
  "showEasing": "swing",
  "hideEasing": "linear",
  "showMethod": "fadeIn",
  "hideMethod": "fadeOut"
}
            
</script>

');
}
;