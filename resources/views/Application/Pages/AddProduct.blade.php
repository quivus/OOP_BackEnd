<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <style>
    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }

    html, body {
        height: 100%;
        width: 100%;
            overflow-x: hidden;

    }

    h1 {
        font-size: 2em;
        font-weight: bold;
        background: linear-gradient(to bottom right, #F77062, #FE5196);
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
        margin-bottom: 1rem;
        text-align: center;
    }

    main {
        margin: 2rem auto;
        width: 95%;
        max-width: 600px;
        background: white;
        padding: 1.5rem;
        border-radius: 15px;
        box-shadow: 0 4px 15px rgba(240, 139, 179, 0.62);
        border: 1px solid #FE5196;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        overflow: hidden;
    }

    form {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 1rem;
        width: 100%;
        align-items: center;
        justify-items: center;
    }

    label {
        font-size: 1em;
        font-weight: 600;
        color: #b84070;
        text-align: left;
        width: 100%;
    }

    input[type="text"],
    input[type="number"],
    select {
        font-size: 0.9em;
        padding: 0.6rem 1rem;
        border: 1px solid #FE5196;
        border-radius: 50px;
        background-color: #fff;
        text-align: center;
        width: 100%;
        transition: 0.3s ease;
    }

    input[type="text"]:focus,
    input[type="number"]:focus,
    select:focus {
        outline: none;
        border-color: #FE5196;
        box-shadow: 0 0 6px #fe51967e;
    }

    input[type="file"] {
        padding: 0.5rem;
        border: 1px solid #ccc;
        border-radius: 10px;
        width: 100%;
        font-size: 0.85em;
    }

    button {
        grid-column: span 2;
        width: 20%;
        padding: 0.75rem;
        font-size: 1em;
        font-weight: bold;
        color: white;
        background: linear-gradient(to bottom right,rgba(247, 113, 98, 0.84),rgba(254, 81, 150, 0.82));
        border: 1px solid white;
        border-radius: 50px;
        cursor: pointer;
        transition: background-color 0.8s ease;
    }

    button:hover {
        background: linear-gradient(to bottom right, #F77062, #FE5196);
        transform: scale(1.1);

    }

    #previewImage {
        margin-top: 1rem;
        width: 100%;
        height: auto;
        border-radius: 10px;
        object-fit: cover;
    }

    @media screen and (max-width: 600px) {
        form {
            grid-template-columns: 1fr;
        }

        button {
            grid-column: span 1;
        }
    }
</style>


</head>

<body>
    @include('Application.Pages.SideBar')

    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    @if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
    @endif

    <main>
        <form action="{{route('product.create')}}" style="display: flex; flex-direction:column;" method="post" enctype="multipart/form-data">
            @csrf
            <h1>Product</h1>
            <label for="">Product Name</label>
            <input type="text" name="Item_Name" id="" placeholder="Product Name" required>
            <label for="">Price</label>
            <input type="number" name="Unit_Price" id="" placeholder="Price" required>
            <label for="">Sizes</label>
            <div style="flex-direction: row;">
            <label for="Regular">
                <input type="checkbox" name="Sizes[]" value="Regular" id="Regular">
                Regular
            </label>
            <label for="small">
                <input type="checkbox" name="Sizes[]" value="Small" id="small">
                Small
            </label>
            <label for="medium">
                <input type="checkbox" name="Sizes[]" value="Medium" id="medium">
                Medium
            </label>
            <label for="large">
                <input type="checkbox" name="Sizes[]" value="Large" id="large">
                Large
            </label>
            </div>
            <label for="">Setting</label>
            <select name="Setting" id="">
                <option value="0">Select Setting</option>
                <option value="Normal">Normal</option>
                <option value="Overload">Overload</option>
            </select>
            <label for="">Quantity</label>
            <input type="number" name="Quantity" id="" placeholder="Quantity" required>
            <label for="">Description</label>
            <input type="text" name="Description" id="" placeholder="Description" required>
            <input type="file" name="Image" id="image">
            <img src="" alt="" srcset="" id="previewImage">
            <button type="submit">Add</button>
        </form>
    </main>

    <script>
        const imageInput = document.getElementById('image');
        const previewImage = document.getElementById('previewImage');

        imageInput.addEventListener('change', function() {
            const file = this.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    previewImage.src = e.target.result;
                    previewImage.style.display = 'block';
                };
                reader.readAsDataURL(file);
            }
        });
    </script>
</body>
</html>
