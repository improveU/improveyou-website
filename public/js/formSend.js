document.getElementById("formSending").onsubmit = function (evt) {
    document.getElementById("formTextarea").value = mdEditor.getMarkdown();
};

function testing(){
    console.log(document.getElementById("formTextarea").value = mdEditor.getMarkdown());
}