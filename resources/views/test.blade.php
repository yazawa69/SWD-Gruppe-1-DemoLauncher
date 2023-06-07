<!DOCTYPE html>
<html>
<head>
    <title>File Upload Form</title>
</head>
<body>
    <h2>File Upload Form</h2>

    <form action="{{ route('test.submit')}}" method="POST" enctype="multipart/form-data">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name"><br><br>
        
        <label for="file">File:</label>
        <input type="file" name="file" id="file"><br><br>
        
        <button type="submit">Upload</button>
    </form>
</body>
</html>
