<x-layout>

    <form action="/login" method="post">
        @csrf

        <fieldset>
            <legend>login</legend>

            <label for="email">Email</label>
            <input required type="email" name="email" id="email" placeholder="email">

            <label for="">Password</label>
            <input required type="password" name="password" id="password" placeholder="password">

            <button type="submit">login</button>
        </fieldset>
    </form>

</x-layout>
