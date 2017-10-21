var el = document.getElementByClassName('delete');
el.onclick = deleteEmp;


function deleteEmp(empid) {
  var r = confirm("Delete Employee?");
    if (r == true) {
        window.location.href="delete.php?id=" + empid;
    } else {
        window.alert("Deletion Cancelled");
    }
}