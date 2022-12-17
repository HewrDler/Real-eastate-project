<!DOCTYPE html>
<html>
<head>
    <title>Laravel 8 Form Example Tutorial</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

      <form  action="postPage"  method="post">
       @csrf
          <label for="exampleInputEmail1">City</label>
          <input type="string" id="City" name="City" class="" >
        
          <label for="exampleInputEmail1">Area</label>
          <input type="number" id="Area" name="Area"  >
          <label for="exampleInputEmail1">Purpose</label>
          <input type="string" id="Purpose" name="Purpose"  >
          <label for="exampleInputEmail1">Property_Type</label>
          <input type="string" id="Property_Type" name="Property_Type"  >
          <label for="exampleInputEmail1">Price</label>
          <input type="double" id="Price" name="Price" >
          <label for="exampleInputEmail1">Floor</label>
          <input type="number" id="Floor" name="Floor"  >
          <label for="exampleInputEmail1">Bedroom</label>
          <input type="number" id="Bedroom" name="Bedroom"  >
          <label for="exampleInputEmail1">Image</label>
          <input type="string" id="Image" name="Image" >
         <label for="exampleInputEmail1">Description</label>
          <input type="longtext" id="Description" name="Description" >
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
      
</body>
</html>



$table->timestamps();