function buynow(id) {
    var x = new XMLHttpRequest();
    x.onreadystatechange = function() {

    };

    x.open("GET", "buynow.php?id=" + id, true);
    x.send();

}