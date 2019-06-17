<form autocomplete="off" method="POST">
    @csrf()
    <label for="firstname">First Name</label>
    <input name="firstname" id="firstname" type="text" placeholder="John" autocomplete="off" value="{{ old('firstname') }}"><br>

    <label for="lastname">Last Name</label>
    <input name="lastname" id="lastname" type="text" placeholder="Doe" autocomplete="off" value="{{ old('lastname') }}"><br>

    <label for="email">Email Adress</label>
    <input name="email" id="email" type="email" placeholder="john.doe@example.com" autocomplete="off" value="{{ old('email') }}"><br>

    <label for="question">Your Question</label>
    <textarea name="question" id="question" placeholder="Write your question here." autocomplete="off" value="{{ old('question') }}">
    </textarea>
    <br>
    <input type="submit" value="Send">
</form>
