function triggermobile() {
    console.log("test")
    var div = document.getElementById("show");
    if (div.style.display === "none") {
        div.style.display = "flex";
    } else {
        div.style.display = "none";
    }
}

function enableDateInput() {
    const dateInputs = document.getElementsByClassName('dateInput');

    for (let i = 0; i < dateInputs.length; i++) {
        const input = dateInputs[i];
        input.addEventListener('focus', function() {
            this.type = 'date';
        });
    }
}

function enableNumberInput() {
    const dateInputs = document.getElementsByClassName('numberInput');
    for (let i = 0; i < dateInputs.length; i++) {
        const input = dateInputs[i];
        input.addEventListener('focus', function() {
            this.type = 'number';
        });
    }
}

enableDateInput();

enableNumberInput();

document.querySelector('[data-action="openMenu"]').addEventListener('click', () => triggermobile())
