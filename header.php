<?php
    function header_paginas($dni=null,$conexion=null){
        $nombre='';
        if($dni==null or $conexion==null){
            
            return "<header>
                        <a id='header_organization_name' href='index.php'>MEDHEALTH<img src='src/icons/home_icon.jpg'></a>
                        <navbar>
                            <a id='header_help_btn' href='#'>AYUDA</a>
                            <a id='header_about_btn' href='#'>ACERCA DE</a>
                            <a id='header_login_btn' href='login.php'>INICIAR SESION</a>
                        </navbar>
                    </header>";
        }else{
            $consulta="SELECT nombre FROM `usuario` WHERE dni=$dni;";
            $sel = $conexion -> query($consulta);

            while($fila = $sel -> fetch_assoc()){
                $nombre=$fila['nombre'];
            }

            return array("<header>
                        <a id='header_organization_name' href='index.php'>MEDHEALTH<img src='src/icons/home_icon.jpg'></a>
                        <navbar>
                            <a id='header_help_btn' href='#'>AYUDA</a>
                            <a id='header_about_btn' href='cerrar_sesion.php'>CERRAR SESION</a>
                            <a id='header_login_btn' href='user_index.php'>$nombre</a>
                        </navbar>
                    </header>",$nombre);
        }
    }
    
?>