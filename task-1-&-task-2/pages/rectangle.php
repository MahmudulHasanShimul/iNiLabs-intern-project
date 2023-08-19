<?php
if (!isset($_SESSION['id'])) {
    header("Location: route.php?page=home");
}
?>
<section class="mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card bg-dark text-light">
                    <div class="card-header">
                        <h3 class="text-center">Calculate Area of a Rectangle</h3>
                    </div>
                    <div class="card-body">
                        <form class="px-5" method="POST" action="route.php?page=rectangle">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Enter value of Width</label>
                                <input type="number" class="form-control" name="width" required>
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Enter value of Height</label>
                                <input type="number" class="form-control" name="height" required>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-light">Calculate</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mt-2">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card bg-dark">
                    <div class="card-header text-light">
                        <h2 class="text-center">Result</h2>
                    </div>
                    <div class="card-body">
                       <h3 class="text-center text-success"> <?php 
                       if(isset($_POST['width']) && isset($_POST['height'])){
                            echo $calculateRectangle->calculateRectangle();
                       }
                       ?></h3> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

