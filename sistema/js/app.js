
const cards = document.getElementById('cards')
const items = document.getElementById('items')
const footer = document.getElementById('footer')
const templateFooter = document.getElementById('template-footer').content
const templateCarrito = document.getElementById('template-carrito').content
const SubTotal = document.getElementById('subTotal').content
const fragment = document.createDocumentFragment()
let carrito = {}
var lProductos = []
document.addEventListener('DOMContentLoaded', e => { fetchData() });
cards.addEventListener('click', e => { addCarrito(e) });
items.addEventListener('click', e => { btnAumentarDisminuir(e) })



document.addEventListener('DOMContentLoaded', e => {
    fetchData()
    if (localStorage.getItem('carrito')) {
        carrito = JSON.parse(localStorage.getItem('carrito'))
        pintarCarrito()
    }
});

// Traer productos
const fetchData = async () => {
    const res = await fetch('archivo.json');
    const data = await res.json()
    // console.log(data)
    //pintarCards(data)
}

// Pintar productos
// const pintarCards = data => {
//     //console.log(data)
    
//     data.forEach(item => {
        
//         templateCard.querySelector('h5').textContent = item.title
//         templateCard.querySelector('p').textContent = item.precio        
//         templateCard.querySelector('img').setAttribute("src", item.thumbnailUrl)
//         templateCard.querySelector('button').dataset.id = item.id
//         const clone = templateCard.cloneNode(true)
//         fragment.appendChild(clone)
//     })
//     cards.appendChild(fragment)
// }

// Agregar al carrito
const addCarrito = e => {
    if (e.target.classList.contains('btn-dark')) {
        // console.log(e.target.dataset.id)
        // console.log(e.target.parentElement)
        setCarrito(e.target.parentElement)
    }
    e.stopPropagation()
    //alert(listaProductos[2].$descripcion)
}

const setCarrito = item => {
    //console.log(item)
    //console.log("input[name='idDescription']")
    
    const producto = {        
        idDescription: item.querySelector("input[name='idDescription']").value,
        descripcion: item.querySelector("input[name='descripcionDos']").value,
        cantidad:  item.querySelector("input[name='cantidad']").value,
        color: item.querySelector("select[name='color']").value,
        avisos: item.querySelector("select[name='avisos']").value,
        precio: item.querySelector("input[name='precio']").value,
        valor: item.querySelector("input[name='valor']").value,
        //cantidad: 0
    }
     //console.log(producto.idDescription)
     
    if (carrito.hasOwnProperty(producto.idDescription)) {
        alert(producto.cantidad = carrito[producto.idDescription].cantidad)
        producto.cantidad = carrito[producto.idDescription].cantidad + 1
    }

    carrito[producto.idDescription] = { ...producto }
    
    pintarCarrito()
}

const pintarCarrito = () => {
    //
    items.innerHTML = ''
    console.log(lProductos)
    Object.values(carrito).forEach(producto => {
        templateCarrito.querySelector('th').textContent = producto.cantidad
        templateCarrito.querySelectorAll('td')[0].textContent = producto.idDescription
        templateCarrito.querySelectorAll('td')[1].textContent = producto.descripcion
        templateCarrito.querySelectorAll('td')[2].textContent = producto.color
        templateCarrito.querySelectorAll('td')[3].textContent = producto.avisos
        templateCarrito.querySelectorAll('td')[4].textContent = producto.precio
        templateCarrito.querySelectorAll('td')[5].textContent = producto.valor
        templateCarrito.querySelector('span').textContent = producto.precio * producto.cantidad
        
        //botones
        templateCarrito.querySelector('.btn-info').dataset.idDescription = producto.idDescription
        templateCarrito.querySelector('.btn-danger').dataset.idDescription = producto.idDescription

        const clone = templateCarrito.cloneNode(true)
        fragment.appendChild(clone)
    })
    items.appendChild(fragment)

    pintarFooter()

    localStorage.setItem('carrito', JSON.stringify(carrito))
}

const pintarFooter = () => {
    footer.innerHTML = ''
    
    if (Object.keys(carrito).length === 0) {
        footer.innerHTML = `
        <th scope="row" colspan="5">Carrito vacío </th>
        `
        return
    }
    
    // sumar cantidad y sumar totales
    const nCantidad = Object.values(carrito).reduce((acc, { cantidad }) => acc + cantidad, 0)
    const nPrecio = Object.values(carrito).reduce((acc, {cantidad, precio}) => acc + cantidad * precio ,0)
    // console.log(nPrecio)

    templateFooter.querySelectorAll('td')[0].textContent = nCantidad
    templateFooter.querySelector('span').textContent = nPrecio

    
    llenarTotales(nPrecio)

    const clone = templateFooter.cloneNode(true)
    fragment.appendChild(clone)

    footer.appendChild(fragment)

    const boton = document.querySelector('#vaciar-carrito')
    boton.addEventListener('click', () => {
        carrito = {}
        pintarCarrito()
    })

}

const btnAumentarDisminuir = e => {
    // console.log(e.target.classList.contains('btn-info'))
    if (e.target.classList.contains('btn-info')) {
        const producto = carrito[e.target.dataset.idDescription]
        producto.cantidad++
        carrito[e.target.dataset.idDescription] = { ...producto }
        pintarCarrito()
    }

    if (e.target.classList.contains('btn-danger')) {
        const producto = carrito[e.target.dataset.idDescription]
        producto.cantidad--
        if (producto.cantidad === 0) {
            delete carrito[e.target.dataset.idDescription]
        } else {
            carrito[e.target.dataset.idDescription] = {...producto}
        }
        pintarCarrito()
    }
    e.stopPropagation()
}

function llenarTotales(nPrecio){
    document.querySelector('#subTotal').value = nPrecio
    var precio =nPrecio
    var iva = precio * 0.16
    iva  = Number(iva .toFixed(2));
    var total = (nPrecio + iva)
    total  = Number(total .toFixed(2));
    document.querySelector('#iva').value = iva
    document.querySelector('#total').value = total
}

