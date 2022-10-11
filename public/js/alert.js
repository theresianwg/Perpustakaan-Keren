const alert = document.querySelector("#alert");
console.log(alert);
if (alert) {
    setTimeout(() => {
        alert.classList.add("hidden");
    }, 1500);
}
