let body = document.getElementsByTagName("body")[0];
let $cta = document.querySelector(".cta");

const initDraw = () => {
  body.classList.add("is-active");
};

const initReading = e => {
  let $t = e.target;
  body.classList.toggle("is-reading");

  if (body.classList.contains("is-reading")) {
    $t.innerHTML = "Show Images";
  } else {
    $t.innerHTML = "Read More";
  }
};

$cta.addEventListener("click", initReading);

window.onload = initDraw;