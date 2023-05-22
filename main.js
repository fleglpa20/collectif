function triggermobile() {
    var div = document.getElementById("show");
    if (div.style.display === "none") {
        div.style.display = "flex";
    } else {
        div.style.display = "none";
    }
}

function enableDateInput() {
    var dateInputs = document.getElementsByClassName('dateInput');
    for (var i = 0; i < dateInputs.length; i++) {
        var input = dateInputs[i];
        input.addEventListener('focus', function() {
            this.type = 'date';
        });
    }
}

function enableNumberInput() {
    var dateInputs = document.getElementsByClassName('numberInput');
    for (var i = 0; i < dateInputs.length; i++) {
        var input = dateInputs[i];
        input.addEventListener('focus', function() {
            this.type = 'number';
        });
    }
}

enableNumberInput();

enableDateInput();
