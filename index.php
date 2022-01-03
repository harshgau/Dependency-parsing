<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Dependency Parsing</title>
</head>
<style>
    * {
        background-color: skyblue;
        text-align: center;
    }

    #form {
        padding: 15%;
        ;
    }

    #script {
        text-align: center;
        border: 5px;
    }
</style>
<script>
    function myFunction() {
        import {
            spawn
        } from 'child_process';
        let scriptPath = './agrawalanshul053.github.io-main/templates/prodigy-custom-model/dependency.py' // path to your python script
        var script = spawn('python', ['-u', scriptPath, 'env/Scripts/activate.bat', 'python -m prodigy custom-dep data relations -F dependency.py']); // arg1,arg2 can be any command line arguments required by your script or if not needed you can skip them.
        script.stdout.on('data', data => {
            console.log('Data: ', data.toString());
            // implement your functionality here
        });
    }
    
</script>

<body>

    <form id="form" action="upload.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="file">
        <button type="submit" name="submit" class="btn btn-success" onclick="myfuction()">Upload</button>
    </form>
    <form action="upd.php">
        <input type="submit" class="btn btn-primary mb-2" value="Show Parsing">
    </form>
    <form action="down.php">
        <!-- <a href="env\Dependency parser/templates/prodigy-custom-model/download/output.txt" download="output.txt">Download</a>  -->
        <button id="dwn-btn">Download</button>
    </form>

    
    

</body>

</html> 