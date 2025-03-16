<h1>Users</h1><br>
<h1>form</h1>
<form action="{{route('index')}}" method="GET">
        <input type="text" name="name" placeholder="Ismingiz">
        <input type="text" name="email" placeholder="Email">
        <button type="submit">GET Request</button>
    </form>

    <form action="{{route('store')}}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Ismingiz">
        <input type="text" name="email" placeholder="Email">
        <button type="submit">POST Request</button>
    </form>

    <form action="{{route('delete')}}" method="POST">
        @csrf
        @method('DELETE')
        <input type="text" name="id" placeholder="IDni kiriting">
        <button type="submit">DELETE Request</button>
    </form>


    <form action="{{route('update')}}" method="POST">

        @csrf
        @method('PUT')
        <input type="text" name="name" placeholder="Yangi ism">
        <input type="text" name="email" placeholder="Yangi email">
        <button type="submit">PUT Request</button>
    </form>

    <form action="{{route('patch')}}" method="POST">
        @csrf
        @method('PATCH')
        <input type="text" name="name" placeholder="Yangilangan ismingiz">
        <button type="submit">PATCH Request</button>
    </form>
