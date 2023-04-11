 <form method="POST" action="{{route('client.save')}}">
        @csrf

        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required>
        <label for="email">phone:</label>
        <input type="phone" name="phone" id="phone" required>

        <button type="submit">Create User</button>
 </form>
