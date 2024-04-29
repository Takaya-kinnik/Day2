<form action="/result" method="post">
    @csrf
    <p>名字<input type="text" name="first_name"></p>
    <p>名前<input type="text" name="last_name"></p>
    <p><input type="submit" value="送信"></p>
</form>
