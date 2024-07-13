var selectedRow = null;

function onFormSubmit(){

}

//Retrieve the data
function readFormData(){
    var formData= {};
    formData["uid"] = document.gatElementById("uid").value;
    formData["fName"] = document.gatElementById("fName").value;
    formData["lName"] = document.gatElementById("lName").value;
    formData["phone"] = document.gatElementById("phone").value;
    formData["address"] = document.gatElementById("address").value;
    formData["email"] = document.gatElementById("email").value;

}

//Insert the data
function insertNewRecord(data){
    var table = document.getElementById("storeList").getElementsByTagName('tbody')[0];
    var newRow = table.insertRow(table.length);
    var cell = newRow.insertCell(0);
        cell.innerHTML = data.uid;
    var cell = newRow.insertCell(0);
        cell.innerHTML = data.uid;
    var cell = newRow.insertCell(0);
        cell.innerHTML = data.uid;
    var cell = newRow.insertCell(0);
        cell.innerHTML = data.uid;
    var cell = newRow.insertCell(0);
        cell.innerHTML = data.uid;
    var cell = newRow.insertCell(0);
        cell.innerHTML = data.uid;
}