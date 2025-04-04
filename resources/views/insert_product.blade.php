<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Insert</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container">
  <form action="{{ url('/insert_product') }}" method="POST" enctype="multipart/form-data">
    @csrf

        @csrf
        <h3 class="text-center text-primary m-4">Insert Product Details</h3>
        <div class="form-outline mb-4 w-50 m-auto">
          <label for="product_name" class="form-label">Product Name</label>
          <input type="text" name="name" class="form-control" required="required">
        </div>

        <div class="form-outline mb-4 w-50 m-auto">
          <label for="product_description" class="form-label">Product description</label>
          <input type="text" name="detail" class="form-control" required="required">
        </div>

        <div class="form-outline mb-4 w-50 m-auto">
          <label for="keyword" class="form-label">Product keyword</label>
          <input type="text" name="key" class="form-control" required="required">
        </div>

        <div class="form-outline mb-4 w-50 m-auto">
    <label for="category" class="form-label">Product Category</label>
    <select name="category" id="category" class="form-select">
        <option value="">Select a Category</option>
        <option value="cat1">Category 1</option>
        <option value="cat2">Category 2</option>
        <option value="cat3">Category 3</option>
        <option value="cat4">Category 4</option>
    </select>
</div>


<div class="form-outline mb-4 w-50 m-auto">
    <label for="brand" class="form-label">Product Brand</label>
    <select name="brand" id="brand" class="form-select">
        <option value="">Select a Brand</option>
        <option value="brand1">Brand 1</option>
        <option value="brand2">Brand 2</option>
        <option value="brand3">Brand 3</option>
        <option value="brand4">Brand 4</option>
    </select>
</div>

        
        <div class="form-outline mb-4 w-50 m-auto">
          <label for="product_image1" class="form-label">Product image1</label>
          <input type="file" name="photo1" class="form-control" required="required">
        </div>

        <div class="form-outline mb-4 w-50 m-auto">
          <label for="product_image2" class="form-label">Product image2</label>
          <input type="file" name="photo2" class="form-control" required="required">
        </div>

        <div class="form-outline mb-4 w-50 m-auto">
          <label for="product_image3" class="form-label">Product image3</label>
          <input type="file" name="photo3" class="form-control" required="required">
        </div>

        <div class="form-outline mb-4 w-50 m-auto">
          <label for="product_price" class="form-label">Product price</label>
          <input type="text" name="amount" class="form-control" required="required">
        </div>

        <div class="form-outline mb-4 w-50 m-auto">
          <input type="submit" name="insertproduct" value="Insert Products" class="btn btn-info" required="required">
        </div>
     finished to return to return
    </form>
  </div>
</body>
</html>
