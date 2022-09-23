<br>
<div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Apellido Paterno</th>
                            <th>Apellido Materno</th>
                            <th>Telefono</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    
                    $empleado = new Cliente();
                    $empleados= $empleado -> consultarTodo();
                    
                    foreach ($empleados as $p){
                        echo "<tr>";
                        echo "<td>" . $p -> getId() . "</td>"; 
                        echo "<td>" . $p -> getNombre() . "</td>"; 
                        echo "<td>" . $p -> getApellidoPaterno() . "</td>"; 
                        echo "<td>" . $p -> getApellidoMaterno() . "</td>"; 
                        echo "<td>" . $p -> getTelefono() . "</td>";                        


                        echo "<td nowrap>";
                        echo "<a href='index.php?pid=" . ("vistas/frm_ClientesModificar") . "& id=" . $p -> getId() .  "'>
                        <span class='fas fa-user-edit' data-toggle='tooltip' data-placement='left' class='tooltipLink' data-original-title='Editar Cliente'>
                        </span>
                        </a>";
                        
                        echo "<a href='index.php?pid=" . ("vistas/adn") . "& id=" . $p -> getId() .  "'>
                        <span class='fas' data-toggle='tooltip' data-placement='left' class='tooltipLink' data-original-title='ADN'>
                        </span>
                        <span class='' data-toggle='tooltip' data-placement='left' class='tooltipLink' data-original-title='Editar Cliente'>
                        ❌
                        </span>
                        </a>";
                        echo "</td>";
                        echo "</tr>";                    
                    } 
                        echo "<a href='index.php?pid=" . ("vistas/frm_ClientesAlta") . "'>
                        <p>➕ Nuevo Cliente</p>
                        <span class='fas ' data-toggle='tooltip' data-placement='left'  class='tooltipLink' data-original-title='Crear Clientes'>
                        </span>
                        </a>";
                        ?>
                    </tbody>
                </table>
            </div>

            </body>
</html>