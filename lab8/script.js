function validate() {
    let n = document.getElementById("name").value.trim();
    let e = document.getElementById("email").value.trim();
    let m = document.getElementById("mobile").value.trim();
    let c = document.getElementById("color").value;
    let g = document.querySelector('input[name="gender"]:checked');

    if (!n || !e || !m) {
        alert("Fill all fields");
        return;
    }

    if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(e)) {
        alert("Invalid Email");
        return;
    }

    if (!/^\d{10}$/.test(m)) {
        alert("Invalid Mobile");
        return;
    }

    if (!g) {
        alert("Select Gender");
        return;
    }

    document.getElementById("output").value =
    "Name: " + n +
    "\nEmail: " + e +
    "\nMobile: " + m +
    "\nGender: " + g.value +
    "\nColor: " + c;
}