<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Dashboard</title>
</head>

<style>

</style>
<body>
    <section>
        @include('Application.Pages.SideBar')
        @yield('content')
    </section>

    <main>
        @include('Application.Pages.Dashboard')
        @yield('Dashboard')
    </main>

</body>
</html>
