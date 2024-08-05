function filterTable() {
  let input = document.getElementById("searchInput");
  let filter = input.value.toLowerCase();
  let table = document.getElementById("orderTable");

  if (!table) {
    console.error("Mục tìm kiếm không tồn tại.");
    return;
  }

  let tr = table.getElementsByTagName("tr");

  for (let i = 1; i < tr.length; i++) {
    let td = tr[i].getElementsByTagName("td");
    let found = false;

    for (let j = 0; j < td.length; j++) {
      if (td[j]) {
        let txtValue = td[j].textContent || td[j].innerText;
        if (txtValue.toLowerCase().indexOf(filter) > -1) {
          found = true;
          break;
        }
      }
    }

    tr[i].style.display = found ? "" : "none";
  }
}
