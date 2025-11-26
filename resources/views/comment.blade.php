<form method="POST" action="/comment">
    @csrf
    <textarea name="content"></textarea>
    <button type="submit">Submit</button>
</form>
