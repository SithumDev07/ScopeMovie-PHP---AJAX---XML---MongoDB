if(window.XMLHttpRequest) 
    xhr = new XMLHttpRequest();
else if(window.ActiveXObject) xhr = new ActiveXObject("Microsoft.XMLHTTP")

xhr.onreadystatechange = function () {
}

if (xhr.readstate == 4) {
    console.log("Done");
} console.log("Processing");