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
          <h1 class="text-center mt-5 mb-5 fw-bold" style="font-family: 'Oswald';">Project Resources</h1>
          <div class="container fs-5">
            <ol>
              <li>
                <i class="fs-4 bi bi-book-half"></i>
                <span class="ms-1 d-none d-sm-inline">
                  <a href="https://runcloud.io/knowledgebase/articles/web-application/how-to-deploy-a-web-app-using-git" class="alert-link">
                    Knowledgebase RunCloud - How to deploy a web app using Git?
                  </a>
                </span>
              </li>
              <li>
                <i class="fs-4 bi bi-book-half"></i>
                <span class="ms-1 d-none d-sm-inline">
                  <a href="https://www.verywellmind.com/mental-health-effects-of-reading-negative-comments-online-5090287" class="alert-link">
                    Mental Health Effects of Reading Negative Comments Online
                  </a>
                </span>
              </li>
              <li>
                <i class="fs-4 bi bi-book-half"></i>
                <span class="ms-1 d-none d-sm-inline">
                  <a href="https://www.malaysiakini.com/news/631288" class="alert-link">
                    MalaysiaKini - Wanita mati lepas dihambur komen kebencian di Tik Tok
                  </a>
                </span>
              </li>
              <li>
                <i class="fs-4 bi bi-book-half"></i>
                <span class="ms-1 d-none d-sm-inline">
                  <a href="https://github.com/tensorflow/tfjs-models/tree/master/toxicity" class="alert-link">
                    TensorFlowJS Model GitHub - Toxicity Model
                  </a>
                </span>
              </li>
              <li>
                <i class="fs-4 bi bi-book-half"></i>
                <span class="ms-1 d-none d-sm-inline">
                  <a href="https://dev.to/vaishnavs/displaying-loading-animation-on-fetch-api-calls-1e5m" class="alert-link">
                    Displaying loading animation on Fetch API calls. DEV Community
                  </a>
                </span>
              </li>
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
