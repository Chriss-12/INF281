<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>qr</title>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>

	<link href="css/estilos.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css" />
  </head>
  <body style="background-color:#B5B2B2">
  <div class="navegacion">
                <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        
        <div class="col-md-10">
            <ul class="nav navbar-nav">
                <li>
                    <h1><b>Paguina de Control</b></h1>
                </li>
            </ul>
            
        </div>
        <div class="col-md-2">
            <tr>
                <td>
                    <a href="salirSesion.php" class="btn btn-danger">
                        Salir
                    </a>
                </td>
            </tr>     
             
        </div>
    </nav>

            </div> 
            <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
            <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
   


    <div class="container">
        <div class="row">
            <div class="col-md-6">

                <div class="card">
                    <div class="card-header">
                    <h1 style="color:rgb(71, 0,100)"> <B> GENERAR CODIGO ALEATORIO </B></h1>
                    </div>
                    <div class="card-body">
                        <form  name="form1" method="post" action="">
                        <input style="font-size:13px;" name="password" type="text" value="" size="75">
                        <input type="button" onClick="FX_passGenerator('form1','password')" value="Generar" class="btn btn-primary btn-lg"  >
                    </div>
                   
                </div>
                <br>
                <div class="card">
                    <div class="card-header">
                    <h1 style="color:rgb(71, 0,100)"> <B> CONVERTIR A QR</B></h1>
                    </div>
                    <div class="card-body">
                        <input type="text" id="texto" class="form-control" >
                        <button class="btn btn-primary btn-lg" id="enviar_qr">Generar QR</button>
                    </div>
                    
                </div>

                
                
            </div>
            <div class="col-md-6">
            <div align="center"><img src="qr1.png"></div>

            </div>
            
        </div>
    </div>
  

    <!-- Option 1: Bootstrap Bundle with Popper -->
    
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    
    
    <script language="JavaScript" type="text/JavaScript">

        function FX_passGenerator(form,element) {
        var thePass = "";
        var randomchar = "";
        var numberofdigits = Math.floor((Math.random() * 7) + 6);
        for (var count=1; count<=numberofdigits; count++) {
            var chargroup = Math.floor((Math.random() * 3) + 1);
            if (chargroup==1) {
            randomchar = Math.floor((Math.random() * 26) + 65);
            }
            if (chargroup==2) {
            randomchar = Math.floor((Math.random() * 10) + 48);
            }
            if (chargroup==3) {
            randomchar = Math.floor((Math.random() * 26) + 97);
            }
            thePass+=String.fromCharCode(randomchar);
        }
        eval('document.'+form+'.'+element+'.value = thePass');
        }

    </script> 



    



</form> 

    <script>
           let enviar = document.querySelector('#enviar_qr');

           enviar.addEventListener('click', e=>{
               e.preventDefault();

                let link = document.querySelector('#texto').value;
                let datos = new FormData();

                datos.append('link', link);

                let peticion = {
                    method : 'POST',
                    body: datos 
                }

                fetch('generador.php',peticion)
                .then(respuesta => respuesta.json())
                .then(respuesta =>{

                    let a = document.createElement('a');
                    a.href = respuesta.file;
                    a.download = "codigo_1.png";
                    a.click();

                }).catch(error =>{
                    console.log(error);
                })


           })


    </script>
  </body>
</html>