    <?php
        $notas=[];
        $nota="";
    ?>
    <br>
    <div class="container-fluid bg-dark "> <!-- Tarjeta Datos -->   
        <br>    
        <div class="card mx-auto" style="width: 82rem;"><!--  -->                         
            <div class="card-body">
                <div class="row" id="cards">

                    <div class="col-1">
                        <div >
                            <label for="idDescription">Id</label>
                            <input type="number" name="idDescription" id="idDescription" class="form-control" placeholder="00" aria-describedby="helpId" >
                        </div> 
                    </div>
                    <div class="col-3"> <!-- Se cargara Automaticamente ojo --> 
                        <div >
                            <label for="descripcion">Descripción</label>
                            <input type="text" name="descripcion" id="descripcion" class="form-control" placeholder="descripcion" aria-describedby="helpId" >
                        </div> 
                    </div>
                    <div class="col-1">
                        <div >
                            <label for="cantidad">Cantidad</label>
                            <input type="number" name="cantidad" id="cantidad" class="form-control" placeholder="00" aria-describedby="helpId" >
                        </div> 
                    </div>
                    <div class="col-2">
                            <div >
                                <label for="color">Color</label>
                                <select class="form-control" name="color" id="color">
                                    <option value="-">-</option>
                                    <option value="Rojo">❤️ ROJO</option>
                                    <option value="Azul">💙 AZUL</option>
                                    <option value="verde">💚 VERDE</option>
                                    <option value="morado">💜 MORADO</option>
                                    <option value="amarillo">💛 AMARILLO</option>
                                    <option value="rosa">   ROSA</option>
                                    <option value="blanco">🤍 BLANCO</option>
                                    <option value="cafe">🤎 CAFE</option>
                                    <option value="gris">   GRIS</option>
                                    <option value="negro">🖤 NEGRO</option>
                                    <option value="naranja">🧡 NARANJA</option>
                                </select>
                            </div>
                    </div>
                    <div class="col-2">
                        <div class="form-group">
                        <label for="avisos">Avisos</label>
                            <select class="form-control" name="avisos" id="avisos">
                                <option value="-">-</option>
                                <option value="sin Garantia">SIN GARANTIA</option>
                                <option value="roto">ROTO</option>
                                <option value="decolorado">DECOLORADO</option>
                                <option value="desbastillado">DESBASTILLADO</option>
                                <option value="descocido">DESCOCIDO</option>
                                <option value="teñido">TEÑIDO</option>
                                <option value="sin botones">SIN BOTONES</option>
                                <option value="quemado">QUEMADO</option>
                                <option value="amarillo">AMARILLADO</option>
                                <option value="dos tonos">DOS TONOS</option>
                                <option value="lavado en casa">LAVADO EN CASA</option>
                                <option value="oxido">OXIDO</option>
                                <option value="pintado">PINTADO</option>
                                <option value="riesgo adornos">RIESGO ADORNOS</option>
                                <option value="rayas">RAYAS</option>
                                <option value="luido">LUIDO</option>
                                <option value="cuadros">CUADROS</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-1">
                        <div >
                            <label for="precio">Precio</label>
                            <input type="number" name="precio" id="precio" class="form-control" placeholder="00" aria-describedby="helpId" >
                        </div> 
                    </div>
                    <div class="col-1">
                        <div >
                            <label for="valor">Valor</label>
                            <input type="number" name="valor" id="valor" class="form-control" placeholder="00" aria-describedby="helpId" >
                        </div> 
                    </div>


                    <br>
                    <button  type="submit" class="btn btn-dark" id ="insertar" name="insertar">Agregar al carrito</button>   
 

                </div>
            </div>
        </div>

        <br> 
    </div>

    <br>
    <div class="container-fluid bg-dark  "><!-- Carrito de compra-->
        <br>  
        <div class="card mx-auto" style="width: 82rem;">
            <div class="card-body">
                <h4>Carrito de compras</h4>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>            
                        <th scope="col">Id</th>
                        <th scope="col">Descripción</th>
                        <th scope="col">Colores</th>
                        <th scope="col">Avisos</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Valor</th>
                        <th scope="col">total</th>
                        <th scope="col">Acciones</th>
                    </tr>
                    </thead>
                    <tbody id="items"></tbody>
                    <tfoot>
                    <tr id="footer">
                        <th scope="row" colspan="5">Carrito vacío - comience a comprar!</th>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>
        <br>
    </div>

    <br>
    <div class="container-fluid bg-dark"><!-- Entrega y total --> 
        <br> 
        <div class="row ">
            <div class="col-12 col-sm-5 col-md-4 col-lg-3 mx-auto" >
                <div class="card" >
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="fechaEntrega">Fecha de Entrega</label>
                                    <input type="date" name="fechaEntrega" id="fechaEntrega" class="form-control"  aria-describedby="helpId" >
                                </div> 
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="horaEntrega">Hora de Entrega</label>
                                    <input type="time" name="horaEntrega" id="horaEntrega" class="form-control"  aria-describedby="helpId" >
                                </div> 
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                            <div class="form-group">
                                <label for="color">Color</label>
                                <select class="form-control" name="color" id="color">
                                    <option value="-">-</option>
                                    <option value="aojo">❤️ ROJO</option>
                                    <option value="azul">💙 AZUL</option>
                                    <option value="verde">💚 VERDE</option>
                                    <option value="morado">💜 MORADO</option>
                                    <option value="amarillo">💛 AMARILLO</option>
                                    <option value="rosa">   ROSA</option>
                                    <option value="blanco">🤍 BLANCO</option>
                                    <option value="cafe">🤎 CAFE</option>
                                    <option value="gris">   GRIS</option>
                                    <option value="negro">🖤 NEGRO</option>
                                    <option value="naranja">🧡 NARANJA</option>
                                </select>
                            </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="numTicket">Num.Ticket</label>
                                    <input type="text" name="numTicket" id="numTicket" class="form-control"  aria-describedby="helpId" >
                                </div> 
                            </div>
                        </div>
                    </div>  
                </div> 
            </div>
            <div class="col-12 col-sm-5 col-md-4 col-lg-3 mx-auto" >
                <div class="card">
                            <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="subTotal">Sub. Total</label>
                                    <input type="number" name="subTotal" id="subTotal" class="form-control"  aria-describedby="helpId" >
                                </div> 
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="iva">Iva</label>
                                    <input type="number" name="iva" id="iva" class="form-control"  aria-describedby="helpId" >
                                </div> 
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                            <div class="form-group">
                                    <label for="Total">Total</label>
                                    <input type="number" name="total" id="total" class="form-control"  aria-describedby="helpId" >
                                </div> 
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="prepago">Prepago</label>
                                    <input type="number" name="prepago" id="prepago" class="form-control"  aria-describedby="helpId" >
                                </div> 
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="saldo">Saldo</label>
                                    <input type="number" name="saldo" id="saldo" class="form-control"  aria-describedby="helpId" >
                                </div> 
                            </div>
                        </div>
                        <div class="row">
                        <div class="col-1">
                        <div class="form-group">
                            <br>
                            <button  type="submit" class="btn btn-primary" name="Cobrar">Cobrar</button>   
                        </div> 
                    </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>   
        <br>      
    </div>

    <template id="template-footer"><!-- template-footer -->
        <th scope="row" colspan="2">Total productos</th>
        <td>10</td>
        <td>
            <button class="btn btn-danger btn-sm" id="vaciar-carrito">
                vaciar todo
            </button>
        </td>
        <td class="font-weight-bold">$ <span>5000</span></td>
    </template>
    
    <template id="template-carrito"><!-- template-carrito -->
      <tr>
        <th scope="row">id</th>
        
        <td>16</td>
        <td>toalla</td>
        <td>blanca</td>
        <td>avisos</td>
        <td>50</td>
        <td>1</td>
        <td>$ <span>500</span></td>
        <td>
            <button class="btn btn-info btn-sm">
                +
            </button>
            <button class="btn btn-danger btn-sm">
                -
            </button>
        </td>
        
      </tr>
    </template>

    <template id="template-card"><!-- template-card -->
      <div class="col-12 mb-2">
        <div class="card">
          <div class="card-body">
            <h5>Titulo</h5>
            <p>precio</p>
            <button class="btn btn-dark">Comprar</button>
          </div>
        </div>
      </div>
    </template>

    <script src="./js/app.js"></script>
</body>
</html>