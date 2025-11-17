<!DOCTYPE html>
<html>
<head>
    <title>Lab 2</title>

<style>
    body {
        font-family: Arial, sans-serif;
        padding: 30px;
        background-color: #e8f1ff;
    }

    h2 {
        text-align: center;
        color: #003366;
    }

    .box {
        background: white;
        width: 350px;
        margin: 20px auto;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }

    input, select, button {
        width: 100%;
        padding: 8px;
        margin-top: 10px;
        border-radius: 5px;
        border: 1px solid #ccc;
    }

    button {
        background-color: #003366;
        color: white;
        cursor: pointer;
    }

    button:hover {
        background-color: #0055aa;
    }

    #error {
        margin-top: 10px;
        color: red;
        text-align: center;
    }

    #successBox {
        background: #d6f5d6;
        border: 1px solid #70c470;
        padding: 15px;
        margin-top: 15px;
        border-radius: 8px;
    }

    .activityItem {
        background: #fff0f0;
        border: 1px solid #ffb3b3;
        padding: 10px;
        margin-top: 10px;
        border-radius: 6px;
        display: flex;
        justify-content: space-between;
    }

    .removeBtn {
        width: auto;
        padding: 5px 10px;
        background-color: #ff6666;
        border: none;
        border-radius: 4px;
        color: white;
        cursor: pointer;
    }

    .removeBtn:hover {
        background-color: #ff3333;
    }

</style>
</head>

<body>

<h2>Participant Registration</h2>

<!-- Registration Box -->
<div class="box">

<form onsubmit="return handleSubmit()">

    <label>Full Name:</label>
    <input type="text" id="name">

    <label>Email:</label>
    <input type="text" id="email">

    <label>Phone Number:</label>
    <input type="text" id="phone">

    <label>Password:</label>
    <input type="password" id="password">

    <label>Confirm Password:</label>
    <input type="password" id="confirm">

    <button type="submit">Register</button>

</form>

<div id="error"></div>
<div id="output"></div>

</div>

<!-- Activity Selection Box -->
<div class="box">
    <h2 style="font-size: 20px;">Activity Selection</h2>

    <label>Activity Name:</label>
    <input type="text" id="activity">

    <button onclick="addActivity()">Add Activity</button>

    <div id="activityList"></div>
</div>


<script>

function handleSubmit() {
    var name = document.getElementById("name").value.trim();
    var email = document.getElementById("email").value.trim();
    var phone = document.getElementById("phone").value.trim();
    var pass = document.getElementById("password").value.trim();
    var con = document.getElementById("confirm").value.trim();

    var err = document.getElementById("error");
    var out = document.getElementById("output");

    err.innerHTML = "";
    out.innerHTML = "";

    if(name=="" || email=="" || phone=="" || pass=="" || con==""){
        err.innerHTML = "Please fill in all fields.";
        return false;
    }

    if(pass !== con){
        err.innerHTML = "Password & Confirm Password must match.";
        return false;
    }

    out.innerHTML = `
        <div id="successBox">
            <strong>Registration Successful!</strong><br><br>
            Name: ${name}<br>
            Email: ${email}<br>
            Phone: ${phone}
        </div>
    `;

    return false;
}


function addActivity(){
    var act = document.getElementById("activity").value.trim();
    var list = document.getElementById("activityList");

    if(act === ""){
        alert("Enter activity name.");
        return;
    }

    var div = document.createElement("div");
    div.className = "activityItem";

    div.innerHTML = `
        ${act}
        <button class="removeBtn" onclick="this.parentElement.remove()">Remove</button>
    `;

    list.appendChild(div);

    document.getElementById("activity").value = "";
}

</script>

</body>
</html>
