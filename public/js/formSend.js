
document.getElementById("formSending").onsubmit = function (evt) {
    document.getElementById("formTextarea").value = editor.getMarkdown();
    console.log(document.getElementById("formTextarea").value = editor.getMarkdown())
};


function testing(){
    console.log(document.getElementById("formTextarea").value = editor.getMarkdown());
}
