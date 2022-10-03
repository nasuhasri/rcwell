<h1 class="text-center mt-5 mb-5 fw-bold" style="font-family: 'Oswald';">Predict MY Comments</h1>
<div class="container">
  <form id="classify">
    <div class="mb-3">
      <label for="comment" class="form-label"
        >Insert your comment here</label
      >
      <input
        type="text"
        class="form-control"
        id="comment"
        placeholder="Eg: You suck"
      />
    </div>

    <button type="submit" class="btn btn-primary">Classify</button>
    <input type="reset" class="btn btn-outline-dark" />
  </form>

  <div id="loading" class="mb-2"></div>

  <p
    class="text-center alert alert-primary alert-link mt-3 mb-3"
    id="demo"
  >
    Demo result will be appeared here
  </p>

  <h4 class="mt-5 fw-bold" style="font-family: 'Oswald';">Demo Text</h4>
  <table class="table mb-5" id="displayTable">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Comments</th>
        <th scope="col">Label</th>
        <th scope="col">Probability</th>
      </tr>
    </thead>
    <tbody></tbody>
  </table>

  <h4 class="mt-5 mb-3 fw-bold" style="font-family: 'Oswald';">Sample Text To Test</h4>
  <ul>
    <li>
      Please stop. If you continue to vandalize Wikipedia, as you did
      to Kmart, you will be blocked from editing.
    </li>
    <li>
      I respect your point of view, and when this discussion
      originated on 8th April I would have tended to agree with you.
    </li>
  </ul>
</div>
