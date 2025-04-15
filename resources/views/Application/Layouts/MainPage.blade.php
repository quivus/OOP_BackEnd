<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Dashboard</title>
</head>
<body>

    <header>
        @include('Application.components.SideBar')
    </header>
    
    <main>
        <div>
            @include('Application.Pages.HomePage')
        </div>
    </main>
    
</body>
</html>