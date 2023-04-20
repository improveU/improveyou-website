document.getElementById("formSending").onsubmit = function (evt) {
    document.getElementById("formTextarea").value = mdEditor.getMarkdown();
};
