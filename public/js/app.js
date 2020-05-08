require('./bootstrap');


  document.addEventListener("beforeunload", event => {
    event.preventDefault();
    event.returnValue = "Tem certeza que pretende apapar o registo?";
    let deleteSolutionButton = document.querySelector("#deleteSolutionButton");
  });

function goBack() {
  window.history.back();
}