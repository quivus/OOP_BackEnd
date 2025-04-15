<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
</head>

<body>
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
    <h1>Product</h1>
    <main style="width: 20%;">
        <form action="{{route('product.create')}}" style="display: flex; flex-direction:column;" method="post" enctype="multipart/form-data">
            @csrf
            <label for="">Product Name</label>
            <input type="text" name="Item_Name" id="" placeholder="Product Name" required>
            <label for="">Price</label>
            <input type="number" name="Unit_Price" id="" placeholder="Price" required>
            <label for="">Sizes</label>
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