<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/operaciones" method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">numero 1</label>
    <input type="number" class="form-control" id="n1" name="n1" placeholder="Ingrese un numero">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">numero 2</label>
    <input type="number" class="form-control" id="n2" name="n2" placeholder="Ingrese un numero">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">operacion</label>
    <input type="text" class="form-control" id="operacion" name="operacion" placeholder="Ingrese la operacion">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Calcular</button>
</form>
    <div class="alert alert-primary" role="alert">
</div>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>