<div>             
     <style>.btn-hovercastel {
  --border: 5px;    /* the border width */
  --slant: 0.7em;   /* control the slanted corners */
  --color: #37E8FC; /* the color */
  
  font-size: 35px;
  padding: 0.4em 1.2em;
  border: none;
  cursor: pointer;
  font-weight: bold;
  color: var(--color);
  background: 
     linear-gradient(to bottom left,var(--color)  50%,#0000 50.1%) top right,
     linear-gradient(to top   right,var(--color)  50%,#0000 50.1%) bottom left;
  background-size: calc(var(--slant) + 1.3*var(--border)) calc(var(--slant) + 1.3*var(--border));
  background-repeat: no-repeat;
  box-shadow:
    0 0 0 200px inset var(--s,#0000),
    0 0 0 var(--border) inset var(--color);
  clip-path: 
      polygon(0 0, calc(100% - var(--slant)) 0, 100% var(--slant),
              100% 100%, var(--slant) 100%,0 calc(100% - var(--slant))
             );
  transition: color var(--t,0.3s), background-size 0.3s;
}
.btn-hovercastel:focus-visible {
  outline-offset: calc(-1*var(--border));
  outline: var(--border) solid #000c;
  clip-path: none;
  background-size: 0 0;
}
.btn-hovercastel:hover,
.btn-hovercastel:active{
  background-size: 100% 100%;
  color: #fff;
  --t: 0.2s 0.1s;
}
.btn-hovercastel:active {
  --s: #0005;
  transition: none;
}</style>
     <section><button class="btn-hovercastel">Ver Download</button>
<button class="btn-hovercastel" style="--color:#f3738a;--border:2px;--slant:.5em">Sex Online</button>
<button class="btn-hovercastel" style="--color:#69db3a;--slant:40px;--border:8px">Access Now</button></section>
     <script></script>
     <?php  ?>           
     
</div>