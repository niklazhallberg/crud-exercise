<!-- Necessary Customer And Billing info when register --> 

        <form action="register.php" method="POST" class="form" id="form1">
            <label for="register_username">Username:</label>
            <input type="text" name="username" id="register_username"><br>
            <label for="register_password">Password:</label>
            <input type="password" name="password" id="register_password"><br>
            <label for="firstName">First name: </label>
            <input id="firstName" type="text" name="firstName" /><br>
            <label for="lastName">Last name: </label>
            <input id="lastName" type="text" name="lastName"/><br>
            <label for="Adress">Adress: </label>
            <input id="Adress" type="text" name="Adress"/><br>
            <label for="ZipCode">Zipcode: </label>
            <input id="ZipCode" type="text" name="ZipCode"/><br>
            <label for="Phone">Phone: </label>
            <input id="Phone" type="tel" name="Phone" /><br>
            <label for="Mail">Mail: </label>
            <input id="Mail" type="email" name="Mail" /><br><br>
            <input type="submit" value="Register"/> 
        </form>