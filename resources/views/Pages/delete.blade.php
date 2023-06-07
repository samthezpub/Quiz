<form method="post" action="/delete_confirmed">
    @csrf
    <label for="title">are you sure?</label>
    <input type="submit" value="Delete">
</form>