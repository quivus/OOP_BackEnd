<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Dashboard</title>
</head>

<style>
    body{
        margin: 0;
        padding: 0;
    }

</style>
<body>
    <section>
        @include('Application.Pages.SideBar')
        @yield('content')
    </section>

    <main>
        @include('Application.Pages.HomePage')
        @yield('HomePage')
    </main>
   
</body>
</html>