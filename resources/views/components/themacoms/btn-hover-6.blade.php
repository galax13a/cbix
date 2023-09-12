<div>             
     <style>.btn-hover6 {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 180px;
  height: 50px;
  background: #232323;
  text-decoration: none;
  text-transform: uppercase;
  text-align: center;
  line-height: 50px;
  color: #FF0;
  font-size: 20px;
  font-family: verdana;
  letter-spacing: 4px;
}

.btn-hover6:before,
.btn-hover6:after,
.btn-hover6 span:before,
.btn-hover6 span:after {
  content: '';
  position: absolute;
  width: 10px;
  height: 10px;
  background: #FF0;
  transition: 1s;
  mix-blend-mode: hue;
}

.btn-hover6:before {
  top: -2px;
  left: -2px;
}

.btn-hover6:after {
  top: -2px;
  right: -2px;
}

.btn-hover6 span:before {
  bottom: -2px;
  left: -2px;
}

.btn-hover6 span:after {
  bottom: -2px;
  right: -2px;
}

.btn-hover6:hover:before,
.btn-hover6:hover:after,
.btn-hover6:hover span:before,
.btn-hover6:hover span:after {
  width: calc(180px / 2);
  height: calc(50px / 2);
}</style>
     <section><a href="#" class="btn-hover6">Mi Botón</a></section>
     <script></script>
     <?php  ?>           
     
</div>