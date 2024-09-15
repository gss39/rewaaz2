function filter() {

    var sellers = document.querySelectorAll('input[name="seller"]');
    var prices = document.querySelectorAll('input[name="price"]');
    var rates = document.querySelectorAll('input[name="rating"]');
    var colors = document.querySelectorAll('input[name="color"]');


    var saller = [];
    var rate = [];
    var price = [];
    var color = [];


    var chack_saller = "true";
    var unchack_saller = "false";
    var chack_rate = "true";
    var unchack_rate = "false";
    var chack_price = "true";
    var unchack_price = "false";
    var chack_color = "true";
    var unchack_color = "false";


    rates.forEach(function (rt) {
        if (rt.checked) {
            rate.push(rt.id);
        }
        if (rt.unchecked) {
            rate.pop(rt.id);
        }
    });



    sellers.forEach(function (sl) {
        if (sl.checked) {
            saller.push(sl.id);
        }
        if (sl.unchecked) {
            saller.pop(sl.id);
        }
    });


    prices.forEach(function (pr) {
        if (pr.checked) {
            price.push(pr.id);
        }
        if (pr.unchecked) {
            price.pop(pr.id);
        }
    });


    colors.forEach(function (cl) {
        if (cl.checked) {
            color.push(cl.id);
        }
        if (cl.unchecked) {
            color.pop(cl.id);
        }
    });


  

    var data = { mysaller : saller, myrate: rate, myprice :price ,mycolor :color  }

    console.log(data);

    var xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {

            document.getElementById("search_products").innerHTML = xhttp.responseText;

        }
    }

    xhttp.open('POST', 'filter.php', true);
    xhttp.setRequestHeader("Content-Type", "application/json");
    xhttp.send(JSON.stringify(data));

}

