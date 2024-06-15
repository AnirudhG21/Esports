const body = document.querySelector("body");
const darkLight = document.querySelector("#darkLight");
const sidebar = document.querySelector(".sidebar");
const submenuItems = document.querySelectorAll(".submenu_item");
const sidebarOpen = document.querySelector("#sidebarOpen");
const sidebarClose = document.querySelector(".collapse_sidebar");
const sidebarExpand = document.querySelector(".expand_sidebar");
sidebarOpen.addEventListener("click", () => sidebar.classList.toggle("close"));

sidebarClose.addEventListener("click", () => {
  sidebar.classList.add("close", "hoverable");
});
sidebarExpand.addEventListener("click", () => {
  sidebar.classList.remove("close", "hoverable");
});

sidebar.addEventListener("mouseenter", () => {
  if (sidebar.classList.contains("hoverable")) {
    sidebar.classList.remove("close");
  }
});
sidebar.addEventListener("mouseleave", () => {
  if (sidebar.classList.contains("hoverable")) {
    sidebar.classList.add("close");
  }
});

darkLight.addEventListener("click", () => {
  body.classList.toggle("dark");
  if (body.classList.contains("dark")) {
    document.setI;
    darkLight.classList.replace("bx-sun", "bx-moon");
  } else {
    darkLight.classList.replace("bx-moon", "bx-sun");
  }
});

submenuItems.forEach((item, index) => {
  item.addEventListener("click", () => {
    item.classList.toggle("show_submenu");
    submenuItems.forEach((item2, index2) => {
      if (index !== index2) {
        item2.classList.remove("show_submenu");
      }
    });
  });
});

if (window.innerWidth < 768) {
  sidebar.classList.add("close");
} else {
  sidebar.classList.remove("close");
}

document
  .getElementById("upcomingEvents")
  .addEventListener("click", function (event) {
    event.preventDefault(); // Prevent the default behavior of the link
    document.getElementById("mainContent").innerHTML = `
      <form action="includes/action-upload-character.php" method="post" enctype="multipart/form-data">
        <input type="file" name="character" /><button type="submit" name="upload">Upload</button>
      </form>
    `;
  });

function toggleUploadForm() {
  var uploadFormContainer = document.getElementById("uploadFormContainer");
  if (uploadFormContainer.style.display === "none") {
    // Show the upload form and center it
    uploadFormContainer.style.display = "block";
    uploadFormContainer.style.position = "fixed";
  } else {
    // Hide the upload form
    uploadFormContainer.style.display = "none";
  }
}
