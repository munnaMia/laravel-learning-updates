<x-layout>

    <form action="/register" method="post">
        @csrf

        <fieldset>
            <legend>register</legend>

            <label for="name">username</label>
            <input required type="text" name="name" id="name" placeholder="name">

            <label for="email">Email</label>
            <input required type="email" name="email" id="email" placeholder="email">

            <label for="">Password</label>
            <input required type="password" name="password" id="password" placeholder="password">

            <button type="submit">Register</button>
        </fieldset>
    </form>

</x-layout>
