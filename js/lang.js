var amh = {"home":"","hww":"","wpc":"","contact":""};
var oro = {"home":"","hww":"","wpc":"","contact":""};
var tig = {"home":"","hww":"","wpc":"","contact":""};
var eng = {"home":"Home","hww":"How we Work","wpc":"Weight and price calculator","contact":'Contact'};
var lang = eng;
var modal = document.querySelector(".modal");
    //var trigger = document.querySelector(".trigger");
var closeButton = document.querySelector(".close-button");

function toggleModal() {
    modal.classList.toggle("show-modal");
}

function windowOnClick(event) {
    if (event.target === modal) {
        toggleModal();
    }
}

    //trigger.addEventListener("click", toggleModal);
    closeButton.addEventListener("click", toggleModal);
    window.addEventListener("click", windowOnClick);