var row;
var items;
var nodeList;
var id;
var original = "";
var template = "";

function getitem(index) {
    row = document.getElementById(index);
    id = index;
    items = row.querySelectorAll("td");

    setNodeList();

    if (template = "") {
        setTemplate();
    } else {
        template = "";
        setTemplate();
    }


    row.innerHTML = template;
}

function setTemplate() {
    template += "<th scope='row' class='px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white'>" + id + "</th>"
    template += "<td id='naam' class='px-6 py-4'><textarea>" + nodeList.naam.textContent + "</textarea></td>";
    template += "<td id='aller' class='px-6 py-4'><textarea>" + nodeList.aller.textContent + "</textarea></td>";
    template += "<td id='img' class='px-6 py-4'><textarea>" + nodeList.img.textContent + "</textarea></td>";
    template += "<td id='cat' class='px-6 py-4'><textarea>" + nodeList.cat.textContent + "</textarea></td>";
    template += "<td id='prijs' class='px-6 py-4'><textarea>" + nodeList.prijs.textContent + "</textarea></td>";
    template += "<td id='conf' class='px-6 py-4 flex justify-between'><a onclick='confim()'>V</a><a>X</a></td>";
}

function resetHTML() {
    original += "<th scope='row' class='px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white'>" + id + "</th>";
    original += "<td id='" + nodeList.naam + id + "' class='px-6 py-4'>" + nodeList.naam.childNodes[0].value + "</td>";
    original += "<td id='aller' class='px-6 py-4'>" + nodeList.aller.childNodes[0].value + "</td>";
    original += "<td id='img' class='px-6 py-4'>" + nodeList.img.childNodes[0].value + "</td>";
    original += "<td id='cat' class='px-6 py-4'>" + nodeList.cat.childNodes[0].value + "</td>";
    original += "<td id='prijs' class='px-6 py-4'>" + nodeList.prijs.childNodes[0].value + "</td>";
    original += "<td id='edit' class='px-6 py-4 text-right'>";
    original += "<a onclick='getitem($id)' class='font-medium text-blue-600 dark:text-blue-500 hover:underline'>Edit</a>";
    original += "</td>";
}

function confim() {
    row = document.getElementById(id);
    items = row.querySelectorAll("td");
    setNodeList();

    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            testArray = this.response;
            console.log(testArray);
        }
    };

    xhttp.open("POST", "php/ajaxUpdate.php");
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("id=" + id + "&naam=" + nodeList.naam.childNodes[0].value + "&aller=" + nodeList.aller.childNodes[0].value + "&img=" + nodeList.img.childNodes[0].value + "&cat=" + nodeList.cat.childNodes[0].value + "&prijs=" + nodeList.prijs.childNodes[0].value);

    if (original = "") {
        resetHTML();
    } else {
        original = "";
        resetHTML();
    }

    row.innerHTML = original;
}

function deleteItem(id) {
    if (confirm("Wil je dit item echt verwijderen?")) {
        xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                
            }
        };

        xhttp.open("POST", "php/ajaxDelete.php");
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("id=" + id);

        location.reload();

    }
}

function setNodeList() {
    nodeList = {
        naam: items[0],
        aller: items[1],
        img: items[2],
        cat: items[3],
        prijs: items[4],
        edit: items[5]
    }
}