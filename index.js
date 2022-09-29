// import * as toxicity from '@tensorflow-models/toxicity';

const threshold = 0.9;

// const samples = [
//   {
//     id: '002261b0415c4f9d',
//     text: "We're dudes on computers, moron.  You are quite astonishingly stupid.",
//   },
//   {
//     id: '0027160ca62626bc',
//     text: 'Please stop. If you continue to vandalize Wikipedia, as you did to Kmart, you will be blocked from editing.',
//   },
//   {
//     id: '002fb627b19c4c0b',
//     text: 'I respect your point of view, and when this discussion originated on 8th April I would have tended to agree with you.',
//   },
// ];

// demo result
toxicity.load(threshold).then((model) => {
  const sentences = [
    // 'You suck.',
    // 'I love you but you are shit.',
    'We are dudes on computers, moron.  You are quite astonishingly stupid.',
    // 'Please stop. If you continue to vandalize Wikipedia, as you did to Kmart, you will be blocked from editing.',
    // 'I respect your point of view, and when this discussion originated on 8th April I would have tended to agree with you.',
  ];

  displayLoading();

  model.classify(sentences).then((predictions) => {
    let text = '';
    let labelarr = [];
    let probabilityarr = [];

    for (i = 0; i < 7; i++) {
      if (predictions[i].results[0].match) {
        labelText =
          predictions[i].label.charAt(0).toUpperCase() +
          predictions[i].label.slice(1);
        probabilityNum = predictions[i].results[0].probabilities[1].toFixed(2);

        text +=
          labelText +
          ' was found with probability of ' +
          probabilityNum +
          ' <br>';

        hideLoading();

        document.getElementById('demo').innerHTML = text;

        labelarr.push(labelText);
        probabilityarr.push(probabilityNum);
      }
    }

    displayTable(sentences, labelarr, probabilityarr, predictions);
  });
});

function displayTable(sentences, label, probability, predictions) {
  var counter = 1;

  for (var i = 0; i < sentences.length; i++) {
    var table = document.getElementById('displayTable');
    var row = table.insertRow();
    var cell1 = row.insertCell(0);
    var cell2 = row.insertCell(1);
    var cell3 = row.insertCell(2);
    var cell4 = row.insertCell(3);

    cell1.innerHTML = '<th scope="row">' + counter + '</th>';
    cell2.innerHTML = sentences[i];
    // cell4.innerHTML = predictions[i].results[0].match;

    for (var j = 0; j < label.length; j++) {
      cell3.innerHTML = label;
      cell4.innerHTML = probability;
    }

    counter++;
  }
}

// need to put window.onload because it will return null as it executes before DOM fully loads
window.onload = function () {
  getComment();
};

function getComment() {
  document.querySelector('#classify').addEventListener('submit', (e) => {
    let comment = document.querySelector('#comment').value;

    // Prevent submitting the form which would cause a page reload.
    e.preventDefault();
  });
}

// predict function
const predict = async () => {
  model = await toxicity.load();
  labels = model.model.outputNodes.map((d) => d.split('/')[0]);

  document.querySelector('#classify').addEventListener('submit', fetchHandler);
};

predict();

// select loading div
const loader = document.getElementById('loading').classList;

// show loading
function displayLoading() {
  // if (loader.style.display === 'none') {
  //   loader.style.display = 'block';
  // }

  loader.add('display');

  // to stop loading after some time - hide after 5 secs
  setTimeout(() => {
    loader.remove('display');
  }, 5000);
}

// hiding loading
function hideLoading() {
  loader.remove('display');

  // if (loader.style.display === 'block') {
  //   loader.style.display = 'none';
  // }
}

function fetchHandler(event) {
  const text = document.querySelector('#comment').value;

  displayLoading();

  model.classify(text).then((predictions) => {
    hideLoading();

    let text = '';
    let label = '';
    let probability;

    for (i = 0; i < 7; i++) {
      if (predictions[i].results[0].match) {
        label =
          predictions[i].label.charAt(0).toUpperCase() +
          predictions[i].label.slice(1);
        probability = predictions[i].results[0].probabilities[1].toFixed(2);

        text +=
          label + ' was found with probability of ' + probability + ' <br>';

        document.getElementById('demo').innerHTML = text;
      } else {
        let defaultText = '';

        defaultText = 'Your comment is free from toxicity. Congratulation!';

        document.getElementById('demo').innerHTML = defaultText;
      }
    }
  });

  // Prevent submitting the form which would cause a page reload.
  e.preventDefault();
}
