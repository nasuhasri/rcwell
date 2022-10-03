<!DOCTYPE html>
<html lang="en">
  <?php include 'head.php'?>
  <body>
    <!-- body content  -->
    <div class="container-fluid">
      <div class="row flex-nowrap">
        <!-- sidebar  -->
        <?php include 'sidebar.php'?>

        <!-- main content  -->
        <div class="col py-3">
          <h1 class="text-center mt-5 mb-5 fw-bold" style="font-family: 'Oswald';">7 Classification of Toxic Comments</h1>
          <div class="container fs-5">
            <ol>
              <li>Attack</li>
              <li>Insult</li>
              <li>Obscene</li>
              <li>Severe Toxicity</li>
              <li>Sexual Explicit</li>
              <li>Threat</li>
              <li>Toxicity</li>
            </ol>
          </div>
        </div>
        <!-- end main content  -->
      </div>
    </div>

    <!-- api call for model  -->
    <script src="index.js"></script>
    <!-- js script  -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
