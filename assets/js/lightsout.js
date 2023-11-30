

var grid = document.getElementsByClassName("left");

Array.from(grid).forEach(click => click.addEventListener("click", function changeColor() {
    if (click.style.background === '#C7A17A') {
        click.style.background = "white";
    } else {
        click.style.background = "#C7A17A";
    }
}));

var rid = document.getElementsByClassName("right");

Array.from(rid).forEach(click => click.addEventListener("click", function changeColor() {
    if (click.style.background === 'brown') {
        click.style.background = "#C7A17A";
    } else {
        click.style.background = "brown";
    }
}));

// (199,161,122)