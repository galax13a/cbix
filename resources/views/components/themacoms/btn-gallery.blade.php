<div>             
     <style>.click-btn {
  display: flex;
  width: 120px;
  height: 40px;
  justify-content: center;
  align-items: center;
  margin: 0.5rem;
  line-height: 35px;
  border: 1px solid;
  border-radius: 5px;
  text-align: center;
  font-size: 16px;
  color: #000;
  text-decoration: none;
  transition: all 0.35s;
  box-sizing: border-box;
}

.buttons-wrapper {
  display: flex;
  flex-wrap: wrap;
}

.updating {
  margin: 3em;
  text-align: center;
}

.btn-style1 {
  position: relative;
  border-color: #979695;
  color: #979695;
}
.btn-style1:hover {
  transform: translateY(-0.25em);
  border-color: #5e5e5e;
  color: #5e5e5e;
}
.btn-style1:hover::before {
  opacity: 1;
}
.btn-style1::before {
  width: 100%;
  height: 1em;
  position: absolute;
  left: 0;
  bottom: -1.35em;
  background: radial-gradient(ellipse at center, rgba(0, 0, 0, 0.35) 0%, rgba(0, 0, 0, 0) 80%);
  opacity: 0;
  transition: all 0.65s;
  content: "";
}

.btn-style2 {
  border-color: #dd7e2a;
  color: #dd7e2a;
}
.btn-style2:hover {
  box-shadow: 0 0.25em 0.25em -0.1em #b5c952;
  transform: translateY(-0.25em);
  border-color: #b5c952;
  color: #b5c952;
}

.btn-style3 {
  border-color: #979695;
  color: #979695;
}
.btn-style3:hover {
  transform: translateY(-0.25em);
  box-shadow: 0 0 0.5em 0em #5e5e5e;
  border-color: #5e5e5e;
  color: #5e5e5e;
}

.btn-style4 {
  border-color: #716eef;
  color: #716eef;
}
.btn-style4:hover {
  box-shadow: inset 0 0 0.55em 0em #dd648a;
  border-color: #dd648a;
  color: #dd648a;
}

.btn-style5 {
  border-color: #979695;
  color: #979695;
  box-shadow: 0.3em 0.3em 0 #dd6395;
}
.btn-style5:hover {
  box-shadow: -0.3em -0.3em 0 #979695;
  background-color: #dd6395;
  border-color: #dd6395;
  color: #fff;
}

.btn-style500 {
  border-color: #716eef;
  color: #716eef;
}
.btn-style500:hover {
  color: #fff;
  transition-delay: 0.2s;
  animation: ani500 0.6s forwards;
  background: radial-gradient(circle, #716eef 0.2em, transparent 0.3em) 6em 6em/1em 1em, radial-gradient(circle, #716eef 0.2em, transparent 0.3em) 0 0/1em 1em;
}

@keyframes ani500 {
  100% {
    background-size: 2.375em 2.375em, 0.1em 0.1em;
  }
}
.btn-style501 {
  background-image: linear-gradient(to right, #a1c4fd 0%, #c2e9fb 51%, #a1c4fd 100%);
  background-size: 200% auto;
  background-position: left top;
  border-color: transparent;
  color: #464646;
}
.btn-style501:hover {
  background-position: right bottom;
  color: #000;
}

.btn-style502 {
  border-color: #716eef;
  color: #fff;
  background: repeating-linear-gradient(40deg, #716eef 0%, #716eef 5%, #fbb8a9 5%, #c15b44 10%);
  text-shadow: 1px 1px 0em #000;
}
.btn-style502:hover {
  background-position: 120px;
  text-shadow: 2px 2px 0.2em #000;
}

.btn-style503 {
  border-color: #dd6395;
  color: #dd6395;
  transition: all 0.5s;
}
.btn-style503:hover {
  box-shadow: inset 5em 0 0 0 #dd7e2a, inset -5em 0 0 0 #dd7e2a;
  border-color: #dd7e2a;
  color: #fff;
}

.btn-style504 {
  border-color: #dd7e2a;
  color: #dd7e2a;
  transition: all 0.5s;
}
.btn-style504:hover {
  box-shadow: inset 0 1.5em 0em 0em #dd648a, inset 0 -1.5em 0em 0em #dd648a;
  border-color: #dd648a;
  color: #fff;
}

.btn-style505 {
  border-color: #716eef;
  color: #716eef;
  transition: all 0.5s;
}
.btn-style505:hover {
  box-shadow: inset 0 0 0 2em #dd648a;
  border-color: #dd648a;
  color: #fff;
}

.btn-style506 {
  position: relative;
  border-color: #dd7e2a;
  color: #dd7e2a;
  overflow: hidden;
}
.btn-style506::before {
  width: 20%;
  height: 100%;
  position: absolute;
  top: 50%;
  left: 0;
  background-color: #dd7e2a;
  transform: rotateZ(-45deg) translate(-50%, -50%);
  transition: all 0.3s;
  content: "";
  z-index: -1;
}
.btn-style506:hover {
  color: #fff;
}
.btn-style506:hover::before {
  width: 100%;
  top: 0;
  transform: none;
}

.btn-style507 {
  position: relative;
  border-color: #dd6395;
  color: #dd6395;
  overflow: hidden;
}
.btn-style507::before {
  width: 15%;
  height: 100%;
  position: absolute;
  top: 0;
  left: 0;
  background-color: #dd6395;
  transform: rotateZ(-45deg) translate(-50%, -50%);
  transition: all 0.3s;
  content: "";
  z-index: -1;
}
.btn-style507:hover {
  color: #fff;
  transition-delay: 0.35s;
}
.btn-style507:hover::before {
  animation: ani507 0.6s forwards;
}

@keyframes ani507 {
  10% {
    width: 0;
    transform: rotateZ(-45deg) translate(-100%, -50%);
  }
  20% {
    width: 0;
    transform: rotateZ(0) translate(-100%, 85%);
  }
  60% {
    width: 100%;
    transform: rotateZ(0) translate(0, 85%);
  }
  100% {
    width: 100%;
    transform: rotateZ(0) translate(0, 0);
  }
}
.btn-style508 {
  position: relative;
  border-color: #5e5e5e;
  color: #5e5e5e;
  overflow: hidden;
}
.btn-style508::before {
  width: 100%;
  height: 100%;
  position: absolute;
  top: 0;
  left: 0;
  border-radius: 5px;
  transform: translate(-100%, 0) rotate(50deg);
  transform-origin: top left;
  transition: all 0.35s;
  background-color: #117831;
  z-index: -1;
  content: "";
}
.btn-style508:hover {
  color: #fff;
  border-color: #117831;
}
.btn-style508:hover::before {
  transform: translate(0, 0);
}

.btn-style509 {
  position: relative;
  background-color: #716eef;
  border-color: #716eef;
  color: #fff;
}
.btn-style509::before, .btn-style509::after {
  width: 49px;
  height: 35px;
  position: absolute;
  border-radius: 50%;
  background-color: #4b48cb;
  transition: all 1s ease;
  transform: scale(0);
  content: "";
  z-index: -1;
}
.btn-style509::before {
  top: -8px;
  left: 10%;
}
.btn-style509::after {
  bottom: -8px;
  right: 15%;
}
.btn-style509:hover {
  background-color: #4b48cb;
  border-color: #4b48cb;
}
.btn-style509:hover::before, .btn-style509:hover::after {
  transform: scale(1);
}

.btn-style510 {
  position: relative;
  background-color: #5e5e5e;
  border-color: #5e5e5e;
  color: #fff;
  overflow: hidden;
}
.btn-style510::before, .btn-style510::after {
  height: 100%;
  position: absolute;
  top: 0;
  left: 0;
  transform: translateX(-100px) skewX(-15deg);
  content: "";
}
.btn-style510::before {
  width: 60px;
  background: rgba(255, 255, 255, 0.5);
  filter: blur(30px);
  opacity: 0.5;
}
.btn-style510::after {
  width: 30px;
  left: 30px;
  background: rgba(255, 255, 255, 0.2);
  filter: blur(5px);
}
.btn-style510:hover {
  background-color: #dd6395;
  border-color: #dd6395;
}
.btn-style510:hover::before {
  opacity: 1;
}
.btn-style510:hover::before, .btn-style510:hover::after {
  transform: translateX(300px) skewX(-15deg);
  transition: all 0.9s ease;
}

.btn-style511 {
  position: relative;
  border-color: transparent;
  background-color: transparent;
  color: #484848;
  overflow: hidden;
}
.btn-style511 span {
  position: relative;
  z-index: 2;
}
.btn-style511::before, .btn-style511::after {
  width: 100%;
  height: 50%;
  position: absolute;
  left: 0;
  background-color: #dd6395;
  transition: all 0.25s;
  content: "";
  z-index: 1;
}
.btn-style511::before {
  top: 0;
  transform: translate(-100%, 0);
}
.btn-style511::after {
  bottom: 0;
  transform: translate(100%, 0);
}
.btn-style511:hover {
  color: #fff;
}
.btn-style511:hover::before, .btn-style511:hover::after {
  transform: translate(0, 0);
}

.btn-style700 {
  position: relative;
  border-color: #979695;
  color: #979695;
}
.btn-style700::before, .btn-style700::after {
  position: absolute;
  top: 0;
  left: 0;
  border-color: #dd6395;
  border-radius: 5px;
  border-style: solid;
  transition: all 0.35s;
  content: "";
  z-index: 1;
}
.btn-style700::before {
  width: 0;
  height: 100%;
  border-width: 1px 0 1px 0;
}
.btn-style700::after {
  width: 100%;
  height: 0;
  border-width: 0 1px 0 1px;
}
.btn-style700:hover {
  border-color: #dd6395;
  color: #dd6395;
}
.btn-style700:hover::before {
  width: 100%;
  border-width: 1px 0 1px 0;
}
.btn-style700:hover::after {
  height: 100%;
  border-width: 0 1px 0 1px;
}

.btn-style701 {
  position: relative;
  border: none;
  color: #dd6395;
}
.btn-style701 span {
  width: 100%;
  display: block;
  position: relative;
}
.btn-style701::before, .btn-style701::after,
.btn-style701 span::before,
.btn-style701 span::after {
  width: 8px;
  height: 8px;
  position: absolute;
  transition: all 0.5s;
  border: 3px solid #dd6395;
  opacity: 0;
  content: "";
}
.btn-style701::before {
  top: 0;
  left: 0;
  border-right: none;
  border-bottom: none;
  transform: translate(-50%, -50%);
}
.btn-style701::after {
  bottom: 0;
  left: 0;
  border-right: none;
  border-top: none;
  transform: translate(-50%, 50%);
}
.btn-style701 span::before {
  top: 0;
  right: 0;
  border-left: none;
  border-bottom: none;
  transform: translate(50%, -50%);
}
.btn-style701 span::after {
  bottom: 0;
  right: 0;
  border-left: none;
  border-top: none;
  transform: translate(50%, 50%);
}
.btn-style701:hover {
  font-size: 16.5px;
  color: #dd2470;
}
.btn-style701:hover::before, .btn-style701:hover::after,
.btn-style701:hover span::before,
.btn-style701:hover span::after {
  opacity: 1;
  border-color: #dd2470;
  transform: translate(0%, 0%);
}

.btn-style702 {
  position: relative;
  border-color: transparent;
  color: #fff;
}
.btn-style702::before, .btn-style702::after {
  height: 100%;
  position: absolute;
  top: 0;
  transition: all 0.3s;
  content: "";
}
.btn-style702::before {
  width: 100%;
  left: 0;
  border-radius: 5px;
  background-color: #716eef;
  z-index: -1;
}
.btn-style702::after {
  width: 0;
  left: 50%;
  border-top: 1px solid transparent;
  border-bottom: 1px solid transparent;
  transform: translate(-50%, 0);
  z-index: 1;
}
.btn-style702:hover {
  color: #716eef;
}
.btn-style702:hover::before {
  transform: scale(0, 1);
}
.btn-style702:hover::after {
  width: 100%;
  border-color: #716eef;
  transition-delay: 0.2s;
}

.btn-style703 {
  position: relative;
  background-color: #dd7e2a;
  border-color: #dd7e2a;
  color: #fff;
}
.btn-style703::before, .btn-style703::after,
.btn-style703 span::before,
.btn-style703 span::after {
  width: 110%;
  height: 130%;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%) scale(0);
  transition: all 0.3s;
  border: 0px solid #dd7e2a;
  content: "";
}
.btn-style703::before {
  border-top-width: 1px;
  transition-delay: 0.3s;
  transform-origin: right top;
}
.btn-style703::after {
  border-bottom-width: 1px;
  transition-delay: 0.9s;
  transform-origin: left bottom;
}
.btn-style703 span::before {
  border-left-width: 1px;
  transition-delay: 0.6s;
  transform-origin: left top;
}
.btn-style703 span::after {
  border-right-width: 1px;
  transform-origin: right bottom;
}
.btn-style703:hover::before, .btn-style703:hover::after,
.btn-style703:hover span::before,
.btn-style703:hover span::after {
  transform: translate(-50%, -50%) scale(1);
}

.btn-style900 {
  position: relative;
  border-color: #dd6395;
  color: #dd6395;
  transition-delay: 0.3s;
  overflow: hidden;
}
.btn-style900:hover {
  transform: translateY(-0.3em);
  border-color: #dd2a73;
  color: rgba(221, 99, 149, 0);
  transition-delay: 0s;
}
.btn-style900:hover::before {
  opacity: 1;
  transform: translateX(0);
  transition-delay: 0.15s;
}
.btn-style900::before {
  width: 100%;
  height: 100%;
  position: absolute;
  top: 0;
  left: 0;
  opacity: 0;
  content: attr(data-hover);
  color: #dd6395;
  text-align: center;
  transform: translateX(-60%);
  transition: all 0.4s;
  z-index: 1;
}

.btn-style901 {
  position: relative;
  background-color: #dd7e2a;
  border-color: #dd7e2a;
  color: #fff;
  overflow: hidden;
}
.btn-style901::before {
  width: 25px;
  height: 100%;
  position: absolute;
  left: 0;
  top: 0;
  content: "";
  font-family: "FontAwesome";
  font-weight: bold;
  font-size: 10px;
  color: #fff;
  text-indent: 5px;
  border-radius: 0 50% 50% 0;
  background-color: rgba(223, 183, 148, 0.73);
  transform: translate(-20%, 0) scale(0, 1);
  transform-origin: left center;
  transition: all 0.25s;
  z-index: 1;
}
.btn-style901:hover {
  text-indent: 20px;
}
.btn-style901:hover::before {
  transform: translate(-20%, 0) scale(1, 1);
}

.btn-style902 {
  position: relative;
  border-color: #dd6395;
  background-color: #dd6395;
  color: #fff;
  overflow: hidden;
}
.btn-style902 span[data-name=hover] {
  display: inline-block;
  transition: all 0.25s;
  transform: translate(0, 0);
}
.btn-style902 span[data-name=me] {
  margin-left: 0.25em;
  transition: all 0.25s;
  opacity: 1;
}
.btn-style902 .block {
  width: 30%;
  height: 100%;
  position: absolute;
  top: 0;
  left: -30%;
  background-color: rgba(237, 157, 190, 0.5);
  border-radius: 0 200% 200% 0;
  transition: all 0.25s;
  z-index: 1;
}
.btn-style902 .block span {
  display: block;
}
.btn-style902 .block span::before {
  content: "";
  font-family: "FontAwesome";
}
.btn-style902:hover span[data-name=me] {
  opacity: 0;
}
.btn-style902:hover span[data-name=hover] {
  transition-delay: 0.2s;
  transform: translate(1.5em, 0);
}
.btn-style902:hover .block {
  transition-delay: 0.2s;
  left: 0;
}

.btn-style903 {
  position: relative;
  border-color: #716eef;
  color: #716eef;
}
.btn-style903::before {
  width: 15px;
  height: 1px;
  position: absolute;
  top: 50%;
  left: 0;
  transform: translate(0, -50%);
  transition: all 0.2s;
  transition-delay: 0.1s;
  background: #716eef;
  content: "";
}
.btn-style903:hover {
  background-color: #716eef;
  color: #fff;
}
.btn-style903:hover::before {
  left: 100%;
  transform: translate(-100%, -50%);
  background-color: #fff;
}

.btn-style904 {
  position: relative;
  background-color: #dd7e2a;
  border-color: #dd7e2a;
  color: #fff;
  overflow: hidden;
}
.btn-style904 span {
  position: relative;
  left: -0.5em;
  transition: all 0.25s;
}
.btn-style904::before, .btn-style904::after {
  height: 100%;
  position: absolute;
  right: 0;
  top: 0;
  background-color: rgba(223, 183, 148, 0.73);
  transition: all 0.25s;
  color: #fff;
}
.btn-style904::before {
  width: 25px;
  content: "";
  display: flex;
  justify-content: center;
  align-items: center;
  font-family: "FontAwesome";
  font-size: 10px;
  font-weight: bold;
  text-indent: 5px;
  border-radius: 50% 0 0 50%;
  z-index: 1;
}
.btn-style904::after {
  width: 100%;
  transform: translate(100%, 0);
  content: attr(data-hover);
  text-align: left;
  text-indent: 8px;
}
.btn-style904:hover {
  border-color: rgba(223, 183, 148, 0.73);
}
.btn-style904:hover span {
  left: -100%;
}
.btn-style904:hover::before {
  right: 70%;
}
.btn-style904:hover::after {
  right: 70%;
}

.btn-style905 {
  position: relative;
  background-color: #716eef;
  border-width: 5px;
  border-color: #716eef;
  color: #fff;
  box-sizing: border-box;
}
.btn-style905::before {
  width: 120%;
  height: 155%;
  position: absolute;
  top: 50%;
  left: 50%;
  border-radius: 20px;
  border: 1px solid #3936af;
  opacity: 0;
  transform: translate(-50%, -50%) scale(1.1);
  transform-origin: center center;
  transition: all 0.25s;
  content: "";
}
.btn-style905:hover {
  background-color: #3936af;
  border-color: #716eef;
  border-style: inset;
  border-radius: 20px;
}
.btn-style905:hover::before {
  opacity: 1;
  transform: translate(-50%, -50%) scale(1);
}

.btn-style906 {
  position: relative;
  background: #bf7b7b;
  border-color: #bf7b7b;
  color: #fff;
  overflow: hidden;
}
.btn-style906::before {
  width: 0;
  height: 4.5px;
  position: absolute;
  bottom: 0;
  left: 0;
  background-color: #562424;
  transition: all 0.35s;
  content: "";
  z-index: 2;
}
.btn-style906::after {
  width: 100%;
  height: 100%;
  position: absolute;
  top: 0;
  left: 0;
  border-radius: 5px;
  background-color: #8b5252;
  transform: translate(0, -100%);
  transition: all 0.35s;
  content: attr(data-hover);
  z-index: 1;
}
.btn-style906:hover::before {
  width: 100%;
}
.btn-style906:hover::after {
  transform: translate(0, 0);
}</style>
     <section><div class="container">
  <div class="category">
    <div>
      <h1>Shadow</h1>
    </div>
    <div class="buttons-wrapper">
      <div><a class="click-btn btn-style1" href="#">Hover me</a></div>
      <div><a class="click-btn btn-style2" href="#">Hover me</a></div>
      <div><a class="click-btn btn-style3" href="#">Hover me</a></div>
      <div><a class="click-btn btn-style4" href="#">Hover me</a></div>
      <div><a class="click-btn btn-style5" href="#">Hover me</a></div>
    </div>
  </div>
  <div class="category">
    <div>
      <h1>Background</h1>
    </div>
    <div class="buttons-wrapper">
      <div><a class="click-btn btn-style500" href="#">Hover me</a></div>
      <div><a class="click-btn btn-style501" href="#">Hover me</a></div>
      <div><a class="click-btn btn-style502" href="#">Hover me</a></div>
      <div><a class="click-btn btn-style503" href="#">Hover me</a></div>
      <div><a class="click-btn btn-style504" href="#">Hover me</a></div>
      <div><a class="click-btn btn-style505" href="#">Hover me</a></div>
      <div><a class="click-btn btn-style506" href="#">Hover me</a></div>
      <div><a class="click-btn btn-style507" href="#">Hover me</a></div>
      <div><a class="click-btn btn-style508" href="#">Hover me</a></div>
      <div><a class="click-btn btn-style509" href="#">Hover me</a></div>
      <div><a class="click-btn btn-style510" href="#">Hover me</a></div>
      <div><a class="click-btn btn-style511" href="#"><span>Hover me</span></a></div>
    </div>
  </div>

  <div class="category">
    <div>
      <h1>Border</h1>
    </div>
    <div class="buttons-wrapper">
      <div><a class="click-btn btn-style700" href="#">Hover me</a></div>
      <div><a class="click-btn btn-style701" href="#"><span>Hover me</span></a></div>
      <div><a class="click-btn btn-style702" href="#">Hover me</a></div>
      <div><a class="click-btn btn-style703" href="#"><span>Hover me</span></a></div>
    </div>
  </div>

  <div class="category">
    <div>
      <h1>Other</h1>
    </div>
    <div class="buttons-wrapper">
      <div><a class="click-btn btn-style900" href="#" data-hover="Click me!">Hover me</a></div>
      <div><a class="click-btn btn-style901" href="#">Hover me</a></div>
      <div>
        <a class="click-btn btn-style902" href="#">
          <div class="block"><span></span></div>
          <span data-name="hover">Hover</span>
          <span data-name="me">me</span>
        </a>
      </div>
      <div><a class="click-btn btn-style903" href="#">Hover me</a></div>
      <div>
        <a class="click-btn btn-style904" data-hover="Click me!" href="#">
          <span>Hover me</span>
        </a>
      </div>
      <div><a class="click-btn btn-style905" href="#">Hover me</a></div>
      <div><a class="click-btn btn-style906" href="#" data-hover="Click me!">Hover me</a></div>
    </div>
  </div>
</div></section>
     <script></script>
     <?php  ?>           
     
</div>