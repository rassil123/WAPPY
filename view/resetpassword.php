<h1 class="header">Reset Password</h1>

    

    <form method="post" action="./controllers/ResetPasswords.php">

        <input type="hidden" name="type" value="send" />
        
        <input type="text" name="usersEmail" 
        placeholder="Email...">
        <button type="submit" name="submit">Receive Email</button>
    </form>