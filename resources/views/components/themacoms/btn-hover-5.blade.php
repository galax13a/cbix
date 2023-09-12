<div>             
     <style>.btn-hover5 {
  display: inline-block;
  position: relative;
  z-index: 1;
  overflow: hidden;
  text-decoration: none;
  font-family: sans-serif;
  font-weight: 600;
  font-size: 2em;
  padding: 0.75em 1em;
  color: blue;
  border: 0.15em solid blue;
  border-radius: calc(0.75em + 0.5em + 0.15em);
  transition: 4s;
}

.btn-hover5:before, .btn-hover5:after {
  content: "";
  position: absolute;
  top: -1.5em;
  z-index: -1;
  width: 200%;
  aspect-ratio: 1;
  border: none;
  border-radius: 40%;
  background-color: rgba(0, 0, 255, 0.25);
  transition: 4s;
}

.btn-hover5:before {
  left: -80%;
  transform: translate3d(0, 5em, 0) rotate(-340deg);
}

.btn-hover5:after {
  right: -80%;
  transform: translate3d(0, 5em, 0) rotate(390deg);
}

.btn-hover5:hover, .btn-hover5:focus {
  color: white;
}

.btn-hover5:hover:before, .btn-hover5:hover:after, .btn-hover5:focus:before, .btn-hover5:focus:after {
  transform: none;
  background-color: rgba(0, 0, 255, 0.75);
}</style>
     <section><a href="#" class="btn-hover5">Record Live</a></section>
     <script></script>
     <?php  ?>           
     
</div>