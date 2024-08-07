let list = document.querySelectorAll(".navigation li");

function activeLink() {
  list.forEach((item) => {
    item.classList.remove("hovered");
  });
  this.classList.add("hovered");
}

list.forEach((item) => item.addEventListener("mouseover", activeLink));

let toggle = document.querySelector(".toggle");
let navigation = document.querySelector(".navigation");
let main = document.querySelector(".main");

toggle.onclick = function () {
  navigation.classList.toggle("active");
  main.classList.toggle("active");
};

function confirmDelete(id) {
  if (confirm("Bạn có chắc chắn muốn xóa sản phẩm này không?")) {
    window.location.href = "admin.php?mod=product&act=delete_product&id=" + id;
  }
}

function confirmDeleteUser(id) {
  if (confirm("Bạn có chắc chắn muốn xóa người dùng này không?")) {
    window.location.href = "admin.php?mod=user&act=delete_user&id=" + id;
  }
}

function confirmDeleteOrder(id) {
  if (confirm("Bạn có chắc chắn muốn xóa đơn hàng này không?")) {
    window.location.href = "admin.php?mod=product&act=delete_order&id=" + id;
  }
}
