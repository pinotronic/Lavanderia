<div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Descripción</th>
                            <th>Factor</th>
                            <th>Precio</th>
                            <th>$ Planchado</th>
                            <th>Puntos</th>
                            <th>Piezas</th>
                            <th>Descuento</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    
                    $producto = new Productos();
                    $productos= $producto -> consultarTodo();
                    
                    foreach ($productos as $p){
                        echo "<tr>";
                        echo "<td>" . $p -> getId() . "</td>"; 
                        echo "<td>" . $p -> getDescripcion() . "</td>"; 
                        echo "<td>" . $p -> getFactor() . "</td>"; 
                        echo "<td>" . $p -> getPrecio() . "</td>"; 
                        echo "<td>" . $p -> getPlanchado() . "</td>"; 
                        echo "<td>" . $p -> getPuntos() . "</td>";
                        echo "<td>" . $p -> getPiezas() . "</td>";
                        echo "<td>" . $p -> getDescuento() . "</td>";


                        echo "<td nowrap>";
                        echo "<a href='index.php?pid=" . ("vistas/frm_ProductosModificar") . "& id=" . $p -> getId() .  "'>
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
                        echo "<a href='index.php?pid=" . ("vistas/frm_ProductosAlta") . "'>
                        <p>➕ Nuevo Producto</p>
                        <span class='fas ' data-toggle='tooltip' data-placement='left'  class='tooltipLink' data-original-title='Crear Empleados'>
                        </span>
                        </a>";
                        ?>
                    </tbody>
                </table>
            </div>

            </body>
</html>