<form method="POST">
    @csrf()
    <label for="firstname">First Name</label><br>
    <input name="firstname" id="firstname" type="text" value="{{ old('firstname') }}"><br>

    <label for="lastname">Last Name</label><br>
    <input name="lastname" id="lastname" type="text" value="{{ old('lastname') }}"><br>

    <label for="email">Email Adress</label><br>
    <input name="email" id="email" type="email" value="{{ old('email') }}"><br>

    <label for="question">Your Question</label><br>
    <textarea name="question" id="question" value="{{ old('question') }}">
    </textarea><br>

    <input type="submit">
</form><br>
