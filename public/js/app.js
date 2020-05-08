//require('./bootstrap');


function preventLivePage() {
 
  window.addEventListener("beforeunload", (event) => {
    event.preventDefault();
    event.returnValue = "";
  });

}



function goBack() {
  window.history.back();
}