const imagem = document.getElementById("imagemPrincipal");

function mostrarImagem(numero) {
  if (numero === 1) {
    imagem.src = "img/Neymar.jpg";
  } else if (numero === 2) {
    imagem.src = "img/Cr7.png";
  } else if (numero === 3) {
    imagem.src = "img/ferreirinha.jpg";
  }
}
