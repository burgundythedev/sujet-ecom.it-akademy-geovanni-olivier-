<h1>Créez votre Compte G&O pour profiter des meilleures Offres !</h1>
<form action="register" method= "post">
    <div class="form">
        <div>
            <label for="name">First Name :</label>
                <input type="text" id="firtstname" name="first_name" required>
                <br>
                <br>
            <label for="name">Last Name :</label>
                <input type="text" id="lastname" name="last_name" required>
        </div>
        <br>
        <div>
            <label for="email">Enter your email:</label>
            <input type="email" id="email" name="email">
        </div>
        <br>
        <div>
            <label for="password">Create your Password:</label>
            <input type="password" id="pass" name="password">
        </div>
        <br>
        <div>
            <label for="phone">Enter your phone number:</label>
            <input type="tel" id="phone" name="phone">
        </div>
        <br>
        <button type="submit">Valider</button>
    </div>
</form>


<style>
    h1 {
        text-align : center;
    }

    label {
        margin : 15px;
    }
    button {
        width: 150px;
    }

    .form {
        display:flex;
        flex-direction: column;
        align-items: center;
        margin-top: 50px;
    }
</style>