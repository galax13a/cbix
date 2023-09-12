<div>             
     <style>.btn-hover2 {
  width: 170px;
  height: 70px;
  font-weight: bold;
  font-size: 20px;
  font-family: "Josefin Sans", sans-serif;
  background-color: #fdcb6e;
  cursor: pointer;
  box-shadow: 5px 5px 0 0;
  transition: 0.3s;
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 20px;
  position: relative; /* Necesario para el posicionamiento absoluto del enlace */
}

.btn-hover2 a {
  text-decoration: none;
  color: #000;
  z-index: 1000;
  position: absolute; /* Coloca el enlace dentro del botón */
}

.btn-hover2::after {
  content: "";
  top: 0;
  left: 0;

  opacity: 0;
  transition: 0.3s;
}

.btn-hover2:hover {
  box-shadow: -5px -5px 0 0;
  transform: scale(0.9);
}

.btn-hover2:hover::after {
  opacity: 1;
}</style>
     <section><a href="#" class="btn-hover2 m-2 p-2 text-center">Read More</a></section>
     <script></script>
     <?php  ?>           
     
</div>