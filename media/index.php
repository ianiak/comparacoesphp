<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <main>
        <form action="script.php" method="post">
            <label for="aluno">Nome de Aluno
                <input type="text" name="aluno" id="aluno">
            </label><br>
            <label for="notapt"> Nota Português
                <input type="number" name="notapt" id="" value="pt">
            </label><br>
            <label for="notamt"> Nota Matemática
                <input type="number" name="notamt" id="" value="mt">
            </label><br>
            <label for="notapt"> Nota Geografia
                <input type="number" name="notageo" id="" value="geo">
            </label> <br>
            <label for="notapt"> Nota Espanhol
                <input type="number" name="notaes" id="" value="es">
            </label><br>
            <label for="submit">Calcular
                <input type="submit" value="submit">
            </label>
        </form>
    </main>
    
</body>
</html>