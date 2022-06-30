window.onload = () => {
    const nav = document.getElementById("dropdown-nav");
    const nav_button = document.getElementById("nav_button");

    nav_button.onclick = () => {
        if (nav.classList.contains("hidden")) {
            nav.classList.remove("hidden");
        } else {
            nav.classList.add("hidden");
        }
    }
    
}