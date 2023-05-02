document.addEventListener("DOMContentLoaded", function () {
    status();
});

async function status() {

    if (document.getElementById("statusMessage") !== null) {
        await delay(500);
        document.getElementById("statusMessage").classList.toggle("statusMessageVisible");
        await delay(4000);
        document.getElementById("statusMessage").classList.toggle("statusMessageVisible");
    }
}

const delay = ms => new Promise(res => setTimeout(res, ms));
