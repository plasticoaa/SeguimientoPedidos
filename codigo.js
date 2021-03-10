$('#formLogin').submit(function(e){
    e.preventDefault();
    var envio = $.trim($("#envio").val());    
    
    if(envio.length == "" ){
    Swal.fire({
        type:'warning',
        title:'Debe ingresar un ID de Envio',
    });
    return false; 
    }else{
        $.ajax({
            url:"bd/consulta.php",
            type:"POST",
            datatype: "json",
            data: {envio:envio}, 
            success:function(data){               
                    
                    if(data == "null"){
                    Swal.fire({
                        type:'error',
                        title:'ID de Envio Incorrecto'
                    });
                }else{
                    Swal.fire({
                        type:'success',
                        title:'Envio Localizado',
                        confirmButtonColor:'#3085d6',
                        confirmButtonText:'Ver Estado'
                    }).then((result) => {
                        if(result.value){
                            window.location.href = "seguimiento.php";
                        }
                    })
                    
                }
                
            }   
        });
    }     
});