function generateUserId() {
    var username = document.getElementById("username").value;
    var userIdField = document.getElementById("userid");

    if (username.trim() !== "") {
        var userid = "user_" + username.toLowerCase();
        userIdField.value = userid;
    } else {
        userIdField.value = "";
    }
}
