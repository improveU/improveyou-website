document.getElementById("formSending").onsubmit = function (evt) {
    document.getElementById("formTextarea").value = editor.getMarkdown();
};


function testing(){
   console.log(editor.getMarkdown());
}
