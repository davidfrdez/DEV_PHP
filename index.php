<head>
   
    <link rel="stylesheet" href="CSS/Login.css" />
</head>
<div class="login-box">
    <h2>Login</h2>
    <div class="form">
        <div class="user-box">
            <input type="text" name="user" id="user" />
            <label>Username</label>
        </div>
        <div class="user-box">
            <input type="password" name="pass" id="pass" />
            <label>Password</label>
        </div>
        <a type="Submit" onclick="data()">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            Registrar
        </a>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
<script>
    const data = () => {
        let user = document.getElementById("user").value,
            pass = document.getElementById("pass").value;

        let obj = {
            user,
            pass
        }
        obj =JSON.stringify(obj);
        $.ajax({
            url: "http://localhost:70/APICRUD/",
            type: "POST",
            data: obj,
            success: (e) => {
                console.log(e);
            },
            error: (data) => {
                console.log(data);
            }
        });
    }
</script>