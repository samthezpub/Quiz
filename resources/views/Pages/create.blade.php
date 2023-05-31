<form method="post" action="/create_confirmed">
    @csrf
    <label for="title">Quiz title:</label>
    <input type="text" id="title" name="title">
    <input type="submit" value="Submit">
</form>