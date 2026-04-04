@extends("layouts.layout")
@section('content')
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous"> -->
</head>

<body>
    <h1>Hello, world!</h1>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script> -->

    <h1>Example heading <span class="badge text-bg-secondary">New</span></h1>
    <h2>Example heading <span class="badge text-bg-secondary">New</span></h2>
    <h3>Example heading <span class="badge text-bg-secondary">New</span></h3>
    <h4>Example heading <span class="badge text-bg-secondary">New</span></h4>
    <h5>Example heading <span class="badge text-bg-secondary">New</span></h5>
    <h6>Example heading <span class="badge text-bg-secondary">New</span></h6>



    <!-- Botão Bootstrap -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#meuModal">
        Abrir Modal
    </button>

    <!-- Estrutura do Modal (Precisa do CSS do Bootstrap para funcionar) -->
    <div class="modal fade" id="meuModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Olá do Bootstrap!</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <p class="text-blue-500 font-bold">Este texto usa Tailwind dentro de um modal Bootstrap!</p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>


<script>
    var toggleOpen = document.getElementById('toggleOpen');
    var toggleClose = document.getElementById('toggleClose');
    var collapseMenu = document.getElementById('collapseMenu');

    function handleClick() {
        if (collapseMenu.style.display === 'block') {
            collapseMenu.style.display = 'none';
        } else {
            collapseMenu.style.display = 'block';
        }
    }

    toggleOpen.addEventListener('click', handleClick);
    toggleClose.addEventListener('click', handleClick);
</script>
@endsection