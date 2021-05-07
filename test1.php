<style type="text/css">
  .div-imagen {
  display:inline-block;
  position:relative;
}

.div-imagen > div {
  position:absolute;
  top:0;
  left:0;
  z-index:-1;
  padding:10px;
  margin:0;
}

.desvanecer:hover {
  opacity: 0.07;
  -webkit-transition: opacity 500ms;
  -moz-transition: opacity 500ms;
  -o-transition: opacity 500ms;
  -ms-transition: opacity 500ms;
  transition: opacity 500ms;
}
</style>


<div class="div-imagen">
  <div>
      Descripción de la foto que quieres que se muestre
  </div>
  <img class="desvanecer" src="http://placehold.it/200x200" />
</div>