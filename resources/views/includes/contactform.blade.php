<form method="POST">
    @csrf

    <label for="firstname">First Name</label><br>
    <input name="firstname" id="firstname" type="text"><br>

    <label for="lastname">Last Name</label><br>
    <input name="lastname" id="lastname" type="text"><br>

    <label for="email">Email Adress</label><br>
    <input name="email" id="email" type="email"><br>

    <label for="question">Your Question</label><br>
    <textarea name="question" id="question">
    </textarea>
</form>