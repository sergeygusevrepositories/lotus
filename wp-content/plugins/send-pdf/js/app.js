let wrapper = document.getElementById("signature-pad");
let clearButton = wrapper.querySelector("[data-action=clear]");

let undoButton = wrapper.querySelector("[data-action=undo]");
let sendApplication = document.querySelector(".sgus-submit");

let canvas = wrapper.querySelector("canvas");
let signaturePad = new SignaturePad(canvas, {
    backgroundColor: '#f8f8f8'
});

let canvasDiv = document.getElementById("signature-pad");

function resizeCanvas() {
    let ratio =  Math.max(window.devicePixelRatio || 1, 1);

    canvas.width = canvas.offsetWidth * ratio;
    canvas.height = canvas.offsetHeight * ratio;
    canvas.getContext("2d").scale(ratio, ratio);

    signaturePad.clear();
}

window.onresize = resizeCanvas;
resizeCanvas();

function download(dataURL, filename) {
    if (navigator.userAgent.indexOf("Safari") > -1 && navigator.userAgent.indexOf("Chrome") === -1) {
        window.open(dataURL);
    } else {
        let blob = dataURLToBlob(dataURL);
        let url = window.URL.createObjectURL(blob);

        let a = document.createElement("a");
        a.style = "display: none";
        a.href = url;
        a.download = filename;

        document.body.appendChild(a);
        a.click();

        window.URL.revokeObjectURL(url);
    }
}

function dataURLToBlob(dataURL) {
    let parts = dataURL.split(';base64,');
    let contentType = parts[0].split(":")[1];
    let raw = window.atob(parts[1]);
    let rawLength = raw.length;
    let uInt8Array = new Uint8Array(rawLength);

    for (let i = 0; i < rawLength; ++i) {
        uInt8Array[i] = raw.charCodeAt(i);
    }

    return new Blob([uInt8Array], { type: contentType });
}

clearButton.addEventListener("click", function (event) {
    signaturePad.clear();
});

undoButton.addEventListener("click", function (event) {
    let data = signaturePad.toData();

    if (data) {
        data.pop(); // remove the last dot or line
        signaturePad.fromData(data);
    }
});

sendApplication.addEventListener("click", function (event) {
    if (signaturePad.isEmpty()) {
        canvasDiv.classList.add("error-red");
    } else {
        canvasDiv.classList.remove("error-red");
    }
});
