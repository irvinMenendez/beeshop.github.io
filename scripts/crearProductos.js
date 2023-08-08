class producto{
	constructor(nombre,precio,cantidad,imagen){
		this.nombre = nombre;
		this.precio = precio;
		this.cantidad = cantidad;
		this.imagen = imagen;
		this.descripcion = `${nombre} es un producto de calidad `;
	}
		crearProducto(){
			const catalogo = document.querySelector(".catalogo");
			let enlace = document.createElement("A");
			let producto_nuevo = document.createElement("DIV");
			let imagenNuevoProducto = document.createElement("IMG");
			let titulo = document.createElement("H2");
			let precio = document.createElement("P");

			imagenNuevoProducto.classList.add("imgProducto");
			imagenNuevoProducto.setAttribute("src",this.imagen);
			imagenNuevoProducto.setAttribute("alt",this.nombre);

			titulo.classList.add("titulo_productos")
			precio.classList.add("enlace")
			precio.textContent = `Precio: ${this.precio}`
			titulo.textContent = this.nombre;
			producto_nuevo.classList.add("divisor_productos");
			enlace.setAttribute("href","#");			
			enlace.appendChild(producto_nuevo);
			producto_nuevo.appendChild(imagenNuevoProducto);
			producto_nuevo.appendChild(titulo);
			producto_nuevo.appendChild(precio);

			return enlace

	}
}
const catalogo = document.querySelector(".catalogo");



let polen = new producto("Polen orgánico","40$","250grs","imagenes/Tarro Polen Orgánico.jpg");

let mielConPanal = new producto("Miel con panal","28$","250grs","imagenes/Tarro Miel con Panal con Etiqueta Del Montañez (Vista ampliada).png");

let mielOrganica = new producto("Miel orgánica","16$","250grs","imagenes/Tarro Miel Orgánica1.jpg");

let inti = new producto("inti","500$","71kg","imagenes/Inti en Piscina.jpg");





const fragmento = document.createDocumentFragment();


	
fragmento.appendChild(mielOrganica.crearProducto());
fragmento.appendChild(polen.crearProducto());
fragmento.appendChild(mielConPanal.crearProducto());
fragmento.appendChild(inti.crearProducto());

catalogo.appendChild(fragmento);

