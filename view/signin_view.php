<h1>Login</h1>

<form action="signin" method="post" >

    <label for="email">Email:</label>
    <input id="email" name="email" type="text">
    <br>
    <br>
    <label for="password">Password:</label>
    <input id="pwd" name="password" type="text">

    <button type="submit" name= "connection">Submit</button>
</form>

<style>
    h1 {
        text-align : center;
    }

    form {
        display:flex;
        justify-content: center;
    }

    label {
        margin : 15px;
    }
</style>