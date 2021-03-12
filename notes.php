
    <?php 
    require_once 'includes/view/header.php'; 
    print_header('notes')
    ?>
    <div id="app" class="container-fluid align-items-stretch row">


    <aside class=" h-100 col-sm-3">
        <div class="card h-100 p-2">
            <ul class="card-body text-muted">
                 <li class="card-subtitle mb-3 ">Card subtitle</h6>
                 <li data-target="collapse" class="pb-2"> Group
                 <ul class="card-body text-muted">
                 <li class="card-subtitle">    Card subtitle</h6>
                 </ul></li>
            </ul>
        </div>    
    </aside>

    <article class="col-sm-9 h-100 mh-100 " id="note">
        <form class="text-white form-inline">
            <select class="form-control bg-primary col-md-2 text-white">
            <option value="Heading 1" class="h1 text-white"> Heading 1
            <option value="Heading 1" class="h2 text-white"> Heading 2
            <option value="Heading 1" class="h3 text-white"> Heading 3
            <option value="Heading 1" class="h4 text-white"> Heading 4
            <option value="Heading 1" class="h5 text-white"> Heading 5
            <option value="Heading 1" class="h6 text-white"> Heading 6
            </select>

            <button type="button" class="btn btn-primary"></button>
            <button type="button" class="btn btn-primary"></button>
            <button type="button" class="btn btn-primary"></button>
            <button type="button" class="btn btn-primary"></button>
        </form>
        <input class="bg-white p-4 border my-4 d-block w-100 h1">
        <input class="bg-white p-4 border my-4 d-block w-100 h2">
        <input class="bg-white p-4 border my-4 d-block w-100 h3">
        <input class="bg-white p-4 border my-4 d-block w-100 h4">
        <input class="bg-white p-4 border my-4 d-block w-100 h5">
        <input class="bg-white p-4 border my-4 d-block w-100 h6">
        <input class="bg-white p-4 border my-4 d-block w-100 p">
</article>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
</body>

</html>