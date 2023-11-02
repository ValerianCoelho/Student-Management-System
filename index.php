<!-- This can be put in any folder but has to be run using localhost -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="sql-data">Sql data</div>
    <div class="button">Click Here</div>
    <script>
        const button = document.querySelector('.button');
        button.addEventListener('click', ()=> {
            const query = "select * from student where id=2;"
            fetch(`http://localhost/practice/student.php?query=${query}`)
                .then(response => response.json())
                .then(data => {
                    const sqlData = document.querySelector('.sql-data');
                    sqlData.innerHTML = JSON.stringify(data);
                    console.log(data)
                })
                .catch(error => console.log(error))
        })
    </script>
</body>
</html>