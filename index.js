let tabpanes = document.getElementsByClassName("tab-header")[0].getElementsByTagName("div");

for (let i = 0; i < tabpanes.length; i++) {
    tabpanes[i].addEventListener("click", function() {
        document.getElementsByClassName("tab-header")[0].getElementsByClassName("active")[0].classList.remove("active");
        tabpanes[i].classList.add("active");
        document.getElementsByClassName("tab-content")[0].getElementsByClassName("active")[0].classList.remove("active");
        document.getElementsByClassName("tab-content")[0].getElementsByClassName("tab-body")[i].classList.add("active");

    })
}