<div>             
     <style>.btn-sexy2 {
  --i: var(--light, 0);
  --not-i: calc(1 - var(--i));
  --j: var(--press, 0);
  --not-j: calc(1 - var(--j));
  z-index: var(--i);
  border: none;
  width: 2em;
  height: 2em;
  border-radius: 15%;
  transform: scale(calc(1 - var(--j) * 0.02));
  box-shadow: calc(var(--not-j) * -0.25em) calc(var(--not-j) * -0.25em) 0.25em rgba(252, 252, 252, var(--not-j)), calc(var(--not-j) * 0.25em) calc(var(--not-j) * 0.25em) 0.25em rgba(210, 218, 230, var(--not-j)), inset calc(var(--j) * 0.25em) calc(var(--j) * 0.25em) 0.25em rgba(210, 218, 230, var(--j)), inset calc(var(--j) * -0.25em) calc(var(--j) * -0.25em) 0.25em rgba(252, 252, 252, var(--j));
  background: #e8e8e8;
  font-size: 2.5em;
  transition: box-shadow 0.3s, transform 0.3s cubic-bezier(0.2, 4, 1, 3);
  cursor: pointer;
}
.btn-sexy2::after {
  filter: Contrast(0) Sepia(var(--i)) Hue-Rotate(calc(var(--hue) - 50deg)) Saturate(5) Opacity(calc(var(--i) + 0.21 * var(--not-i))) Drop-Shadow(1px 1px hsla(0, 0%, 100%, var(--not-i)));
  transition: filter 0.3s;
  content: attr(data-ico);
}
.btn-sexy2:focus {
  outline: none;
}
.btn-sexy2:hover, .btn-sexy2:focus {
  --light: 1;
}
.btn-sexy2:active {
  --press: 1;
}</style>
     <section><button class="btn-sexy2" aria-label="heart" data-ico="❤️" style="--hue: 344deg"></button>
<button class="btn-sexy2" aria-label="like" data-ico="👍" style="--hue: 247deg"></button>
<button class="btn-sexy2" aria-label="star" data-ico="⭐" style="--hue: 48deg"></button></section>
     <script></script>
     <?php  ?>           
     
</div>