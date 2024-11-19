function getXMLHTTPRequest() {
    if (window.XMLHttpRequest) {
        return new XMLHttpRequest();
    } else {
        return new ActiveXObject("Microsoft.XMLHTTP");
    }
}

function get_server_time() {
    let xmlhttp = getXMLHTTPRequest();
    let page = 'get_server_time.php';
    
    xmlhttp.open("GET", page, true);
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200){
            document.getElementById('showtime').innerHTML = xmlhttp.responseText;
        }
    }

    xmlhttp.send(null);
}

function add_customer_get() {
    let xmlhttp = getXMLHTTPRequest();

    let name = encodeURI(document.getElementById('name').value);
    let address = encodeURI(document.getElementById('address').value);
    let city = encodeURI(document.getElementById('city').value);

    if (name != "" && address != "" && city != "") {
        let url = "add_customer_get.php?name=" + name + "&address=" + address + "&city=" + city;
        let inner = "add_response"

        xmlhttp.open('GET', url, true);

        xmlhttp.onreadystatechange = function() {
            document.getElementById(inner).innerHTML = xmlhttp.responseText;
            return false;
        }

        xmlhttp.send(null);

        return;
    }

    alert("Tolong isi semua field");
}

function add_customer_post() {
    let xmlhttp = getXMLHTTPRequest();

    let name = encodeURI(document.getElementById('name').value);
    let address = encodeURI(document.getElementById('address').value);
    let city = encodeURI(document.getElementById('city').value);

    if (name != "" && address != "" && city != "") {
        let url = "add_customer_post.php";
        let inner = "add_response"
        let params = "name=" + name + "&address=" + address + "&city=" + city;

        xmlhttp.open('POST', url, true);
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

        xmlhttp.onreadystatechange = function() {
            if ((xmlhttp.readyState == 4) && (xmlhttp.status == 200)){
                document.getElementById(inner).innerHTML = xmlhttp.responseText;
            }
            return false;
        }

        xmlhttp.send(params);

        return;
    }

    alert("Tolong isi semua field");

}

function callAjax(url, inner) {
    let xmlhttp = getXMLHTTPRequest();

    xmlhttp.open('GET', url, true);

    xmlhttp.onreadystatechange = function() {
        if ((xmlhttp.readyState == 4) && (xmlhttp.status == 200)){
            document.getElementById(inner).innerHTML = xmlhttp.responseText;
        }

        return false
    }

    xmlhttp.send(null);
}

function showCustomer(customerid) {
    let inner = 'detail_customer';
    let url = 'get_customer.php?id=' + customerid;

    if (customerid == "") {
        document.getElementById(inner).innerHTML = '';
        return;
    }

    callAjax(url, inner);
}

function searchBook(k) {
    let uri = 'get_books.php?title=' + encodeURIComponent(k);
    let bookDetails = 'book-details';

    if (k == "") {
        document.getElementById(bookDetails).innerHTML = `
            <table class="table">
                <tr>
                    <td colspan="6" style="text-align: center;">
                        Lakukan Pencarian Terlebih Dahulu.
                    </td>
                </tr>
            </table>
        `;

        return;
    }

    callAjax(uri, bookDetails);
}

var input = document.getElementById("keywords");

input.addEventListener("keypress", function(event) {
  if (event.key === "Enter") {
    event.preventDefault();
    document.getElementById("search").click();
  }
});