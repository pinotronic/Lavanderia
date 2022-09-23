            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Id Empleado</th>
                            <th>Nombre</th>
                            <th>Apellido Paterno</th>
                            <th>Tipo Empleado</th>
                            <th>Sucursal</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    
                    $empleado = new Empleado();
                    $empleados= $empleado -> consultarTodo();
                    
                    foreach ($empleados as $p){
                        echo "<tr>";
                        echo "<td>" . $p -> getId() . "</td>"; 
                        echo "<td>" . $p -> getNombre() . "</td>"; 
                        echo "<td>" . $p -> getApellidoPaterno() . "</td>"; 
                        echo "<td>" . $p -> getTipoEmpleado() . "</td>"; 
                        echo "<td>" . $p -> getSucursal() . "</td>";                        


                        echo "<td nowrap>";
                        echo "<a href='index.php?pid=" . ("vistas/frm_EmpleadosModificar") . "& id=" . $p -> getId() .  "'>
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
                        echo "<a href='index.php?pid=" . ("vistas/frm_EmpleadosAlta") . "'>
                        <p>➕ Nuevo Empleado</p>
                        <span class='fas ' data-toggle='tooltip' data-placement='left'  class='tooltipLink' data-original-title='Crear Empleados'>
                        </span>
                        </a>";
                        ?>
                    </tbody>
                </table>
            </div>

            </body>
</html>