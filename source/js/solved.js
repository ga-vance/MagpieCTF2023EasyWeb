const solve = document.getElementById('correctly');
const first = "bWFncGlle0Fy" 
const second = "M183aDNyMy1jMDBr";
const third = "MTM1XzFuLTVwQWMzP30=";

function getCookie(cookie) {
    let name = cookie + "=";
    let decodedCookie = decodeURIComponent(document.cookie);
    let ca = decodedCookie.split(';');
    for(let i = 0; i <ca.length; i++) {
        let c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}
const combination = first + second + third

let admin = getCookie("admin");
if (admin === "true") {
    solve.innerText = atob(combination);
}