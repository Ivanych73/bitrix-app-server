<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<body>
    <h1>Hello, world!</h1>
    <form action="{{ route('bitrix.view') }}" method="post">
        @csrf
        <button type="submit">Сформировать!</button>
    </form>
</body>

</html>
