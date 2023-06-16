<x-layout>
    <form action="/login" method="POST">
        @csrf
        <label for="user">Usuário</label>
        <input type="text" name="user">
        @error('user')
            <p>{{$message}}</p>
        @enderror
        <label for="password">Senha</label>
        <input type="password" name="password">
        @error('password')
            <p>{{$message}}</p>
        @enderror
        <button>Login</button>
    </form>
   <form action="/register" method="POST">
        @csrf
        <label for="name">Usuário</label>
        <input type="text" name="name">
        <input type="email" name="email" placeholder="email">
        <label for="password">Senha</label>
        <input type="password" name="password">
        <button>Registrar</button>
    </form>
</x-layout>