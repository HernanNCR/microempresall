<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Inicio</title>
    <link rel="stylesheet" href="registrar.css">
</head>
<body>
    <header class="header">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid" style="padding-left: 145px;">
              <a class="navbar-brand" href="#" style="color: white;">CobraMex</a>
            </div>
        </nav>
    </header>

    
    <div class="navegacion">
        <div class="navegar">
            
            <ul class="navbar-nav">
                <div class="logo">
                    <img src="logo.png" width="100px">
                </div>
                <div class="nav-header">
                    <h3>¿Qué haremos hoy?</h3>
                </div>
                <a href="index.css" class="contenedor">
                    <div class="navbar-item">
                        <li class="nav-item">
                            Menú
                        </li>
                    </div>
                </a>
                
                <a href="registra.html" class="contenedor">
                    <div class="navbar-item">
                        <li class="nav-item">
                            Otorgar Préstamo
                        </li>
                    </div>
                </a>
                
                <a href="iniciasesion.html" class="contenedor">
                    <div class="navbar-item">
                        <li class="nav-item">
                            Registro de Nuevo Usuario
                        </li>
                    </div>
                </a>
                
                
                <a href="pdf.html" class="contenedor">
                    <div class="navbar-item">
                        <li class="nav-item">
                            Seguimiento de Préstamo
                        </li>
                    </div>
                </a>

                <a href="genera.html" class="contenedor">
                    <div class="navbar-item">
                        <li class="nav-item">
                            Generar Estado de Cuenta
                        </li>
                    </div>
                </a>
                
                
                
            </ul>
      </div>
    </div>
    <div class="menu">
        <div class="registrar">
            <div class="menuheader" style="padding-left: 50px;">
                Registro Nuevo Usuario 
            </div> 
            <div class="registro">
                <div class="form-floating mb-3" id="form">
                    <input type="email" name="nombre"  class="form-control" id="floatingInput" placeholder="name@example.com" required>
                    <label>Nombre</label>
                </div>
                <div class="form-floating mb-3" id="form">
                    <input type="text" name="Apaterno" class="form-control" id="floatingPassword" placeholder="Password" required>
                    <label>Apellido Paterno</label>
                </div>
                <div class="form-floating mb-3" id="form">
                    <input type="text"  name="Amaterno" class="form-control" id="floatingInput" placeholder="name@example.com" required>
                    <label>Apellido Materno</label>
                </div>
                <div class="form-floating mb-3" id="form">
                    <input type="date" name="integracion" class="form-control" id="floatingPassword" placeholder="Password" required>
                    <label>Fecha de Integracion</label>
                </div>
                <div class="form-floating mb-3" id="form">
                    <input type="text" name="direccion" class="form-control" id="floatingInput" placeholder="name@example.com" required>
                    <label>Dirección</label>
                </div>
                <div class="form-floating mb-3" id="form">
                    <input type="text" name="telefono" class="form-control" id="floatingPassword" placeholder="Password" required>
                    <label>Telefono</label>
                </div>
                
                <div class="form-floating mb-3" id="form">
                    <input type="submit" class="btn btn-danger" Value="Registrar Usuario">
                    
                </div>

                
            </div>
        </div>
        
    </div>

    
    





    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>